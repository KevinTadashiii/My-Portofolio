import { DeskTerminal } from './terminal.js';

/**
 * Desk behaviour: the terminal lives in exactly one place at a time.
 *
 * Collapsed it sits inside the laptop screen; expanded it is docked into the
 * panel next to the laptop, wired to it with a cord. It is the same element
 * either way, so there is never a second command input.
 */

const STATUS_LABELS = {
    live: 'Live',
    in_progress: 'In progress',
    archived: 'Archived',
};

function readManifest() {
    const node = document.getElementById('portfolio-manifest');

    if (!node) {
        return {};
    }

    try {
        return JSON.parse(node.textContent);
    } catch {
        return {};
    }
}

function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

export function initDesk() {
    const desk = document.querySelector('[data-desk]');
    const terminalRoot = document.querySelector('[data-terminal]');

    if (!desk || !terminalRoot) {
        return;
    }

    const manifest = readManifest();
    const screenSlot = document.querySelector('[data-terminal-screen-slot]');
    const panelSlot = document.querySelector('[data-terminal-panel]');
    const panelHost = panelSlot?.querySelector('.terminal-panel') ?? null;
    const toggleButtons = Array.from(document.querySelectorAll('[data-terminal-toggle]'));

    const terminal = new DeskTerminal(terminalRoot, manifest);
    terminal.mount();

    let expanded = false;

    function placeTerminal() {
        const host = expanded ? panelHost : screenSlot;

        if (host && terminalRoot.parentElement !== host) {
            host.appendChild(terminalRoot);
        }

        terminalRoot.dataset.placement = expanded ? 'panel' : 'screen';
        desk.dataset.terminalState = expanded ? 'expanded' : 'collapsed';

        toggleButtons.forEach((button) => {
            button.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        });
    }

    function setExpanded(next) {
        expanded = next;
        placeTerminal();

        if (!expanded) {
            return;
        }

        if (window.matchMedia('(max-width: 767px)').matches) {
            panelSlot?.scrollIntoView({
                behavior: prefersReducedMotion() ? 'auto' : 'smooth',
                block: 'center',
            });
        }
    }

    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => setExpanded(!expanded));
    });

    document.querySelectorAll('[data-terminal-help]').forEach((button) => {
        button.addEventListener('click', () => {
            terminal.submit('help');
        });
    });

    /* --------------------------------------------------------------------
     | Project dialog — one card, shared by the section and the terminal
     | ------------------------------------------------------------------ */

    const dialog = document.getElementById('project-dialog');

    function openProject(slug) {
        const project = manifest.projects?.[slug];

        if (!project || !dialog) {
            return;
        }

        dialog.querySelector('#project-dialog-title').textContent = project.title;
        dialog.querySelector('[data-project-status]').textContent =
            `Status: ${STATUS_LABELS[project.status] ?? 'Unlisted'}`;
        dialog.querySelector('[data-project-summary]').textContent = project.summary;

        const stack = dialog.querySelector('[data-project-stack]');
        stack.replaceChildren(
            ...(project.stack ?? []).map((technology) => {
                const tag = document.createElement('span');
                tag.textContent = technology;
                return tag;
            }),
        );

        const link = dialog.querySelector('[data-project-link]');
        link.hidden = !project.url;

        if (project.url) {
            link.href = project.url;
        }

        dialog.showModal();
    }

    document.querySelectorAll('[data-project-open]').forEach((button) => {
        button.addEventListener('click', () => openProject(button.dataset.projectOpen));
    });

    dialog?.querySelector('[data-project-close]')?.addEventListener('click', () => dialog.close());
    dialog?.addEventListener('click', (event) => {
        if (event.target === dialog) {
            dialog.close();
        }
    });

    window.addEventListener('portfolio:open-project', (event) => {
        openProject(event.detail?.slug);
    });

    /* --------------------------------------------------------------------
     | Reveal on scroll
     | ------------------------------------------------------------------ */

    const revealTargets = Array.from(document.querySelectorAll('.reveal'));

    if ('IntersectionObserver' in window && !prefersReducedMotion()) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -6% 0px' },
        );

        revealTargets.forEach((target) => observer.observe(target));
    } else {
        revealTargets.forEach((target) => target.classList.add('is-visible'));
    }

    placeTerminal();
}
