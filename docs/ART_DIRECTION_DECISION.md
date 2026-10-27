# Art Direction Decision Brief

**Project:** Kevin Kanigara Portfolio Website
**Date:** 2026‑10‑26
**Author:** Claude Code (with input from Kevin)

---

## 1. Audit of the Exploration

| Item | Status | Comment |
|------|--------|---------|
| **Creative Territory 1 – “ERROR 418”** | ✅ **PROPOSED** | Interesting HTTP‑status‑code metaphor, but humor relies heavily on niche knowledge and may overwhelm non‑technical visitors. |
| **Creative Territory 2 – “THE COMPILER”** | ✅ **PROPOSED** | Strong software‑centric language, but heavy compiler jargon can feel exclusionary. |
| **Creative Territory 3 – “THE OBSERVATORY”** | ✅ **PROPOSED** | Visually rich, but implementation complexity (SVG star‑map, canvas) is high for a student project. |
| **Creative Territory 4 – “THE ATTIC”** | ✅ **PROPOSED** | Warm, personal, but risk of appearing “messy” and unprofessional; needs careful curation. |
| **Creative Territory 5 – “THE CONTROL ROOM** | ✅ **PROPOSED** | Aligns with Kevin’s server/infrastructure interests; uses familiar monospace UI, but can feel gender‑coded/industrial. |
| **Hybrid “TERMINAL DESK”** (recommended) | ✅ **PROPOSED** | Combines the warmth of a physical desk with the authenticity of a terminal. Addresses gender‑neutrality, student‑honest framing, and implementation feasibility. |

### Contradictions & Open Questions

- **Color palette** – each concept defines its own palette; we will consolidate to a single, restrained set (see Section 3).
- **Typography** – multiple typefaces were suggested; we will adopt **Inter** for body, **Lora** for headings, **JetBrains Mono** for terminal/code, and **Caveat** only for sticky‑note captions.
- **Project entry** – earlier notes propose the name **Portfolio Systems Lab** for the portfolio itself, but the title/identity and completion status must be confirmed before publication. Until then, label it **NEEDS CONFIRMATION** in planning documents and do not claim it is completed.
- **Language** – UI strings will be English only.
- **Gendered aesthetic** – control‑room and compiler metaphors have historically male‑coded tones; our hybrid adds neutral, personal touches (hand‑written notes, warm desk colors).

---

## 2. Locked Central Creative Direction

**Primary Concept:** **Terminal Desk** – an overhead, illustrated view of a warm desk containing a laptop, notebook, coffee cup, sticky notes, a tool rack, and a project folder. The laptop is the visual home of the portfolio terminal. On desktop, the terminal may expand into a larger panel visually connected to the laptop; this is the same terminal interface, not a second independent terminal. Keep the desk illustrative and restrained, not photorealistic.

**Why it fits**
- **Personal relevance** – Kevin works at a terminal, loves Linux, and studies full‑stack development; a desk is a realistic student workspace.
- **Humor** – dry, observational jokes arise from sticky‑note captions, a coffee‑level meter, and gentle terminal easter‑eggs, avoiding niche jargon.
- **Scalability** – new projects become additional “folders” on the desk; new skills appear as new tools.
- **Gender‑neutral & Student‑Honest** – the desk is universally relatable and honest about the learning stage.
- **Implementation feasibility** – uses Tailwind CSS, Laravel Blade components, and a tiny vanilla‑JS command parser (no new dependencies).

**What is discarded / adapted**
- Full‑screen star‑map (Observatory) – deemed too complex.
- Heavy‑density dashboard (Control Room) – would overload information.
- Teapot Easter‑egg (ERROR 418) – niche; replaced with a subtle coffee‑cup Easter‑egg.
- Compiler build‑animation – replaced with an optional, brief boot‑sequence in the terminal.

---

## 3. Visual System (Unified Palette & Typography)

| Role | Hex Value |
|------|-----------|
| **Primary Background** | `#F5F0E8` – warm cream (desk surface) |
| **Primary Text** | `#2C1810` – deep brown (ink) |
| **Accent – Tool** | `#C75B39` – rust orange (copper tools) |
| **Accent – Success** | `#5B7C5A` – moss green (caffeine level) |
| **Accent – Warning** | `#D4A843` – mustard (sticky‑note highlight) |
| **Terminal Background** | `#0A0A0A` – near‑black |
| **Terminal Text** | `#00FF41` – classic green |
| **Terminal Prompt** | `#FFB000` – amber |

**Typography**
- **Headings & Display** – *Lora* (serif) for a scholarly feel.
- **Body Text** – *Inter* (sans‑serif) for readability.
- **Terminal / Code** – *JetBrains Mono* for developer authenticity.
- **Sticky‑note Captions** – *Caveat* (hand‑written) used sparingly.

**Composition & Layout**
- CSS Grid defines the desk zones (Laptop, Notebook, Coffee, Tools, Sticky‑notes).
- Generous padding; intentional empty desk space for future items.
- Flat, minimal SVG icons; subtle drop‑shadows for depth.
- Motion limited to simple CSS transitions (hover lift, click‑zoom). No canvas or 3‑D.

---

## 4. Information Architecture (Content Hierarchy)

| Section | Desktop location | Mobile adaptation |
|---------|------------------|-------------------|
| **Hero / Terminal** | Laptop screen (center) shows the greeting and terminal prompt `kevin@desk:~$`. The expanded terminal panel is visually connected to the laptop and is not a duplicate terminal. | Intro and a visible **Terminal** button. The panel is collapsed by default and expands in the page flow. |
| **About / Bio** | Notebook object – selecting it reveals the bio. | A clearly labelled **Bio** button/section; terminal command `about` is an optional shortcut. |
| **Projects** | Project folder on the desk; selecting it opens project details. | A visible **Projects** section/card reachable without terminal commands. `projects` is an optional shortcut. |
| **Skills / Tools** | Tool rack represents skills; select/focus it to reveal skill tags. | A visible **Skills** section/button. `skills` is an optional shortcut. |
| **Learning Journey** | Scroll‑paper timeline pinned to the desk. | A visible **Journey** section/button. `journey` is an optional shortcut. |
| **Contact** | Postcard on the desk with owner-confirmed public contact links. | A visible **Contact** section/button. `contact` is an optional shortcut. Show availability only if the owner confirms it. |
| **Help / Navigation** | Sticky note labeled `help` opens the terminal help screen. | A persistent, accessible **Help** entry is available without typing. |

**Project entry pending confirmation** – `Portfolio Systems Lab` is a proposed label from the earlier exploration. Confirm its title/identity and completion status with the owner before public launch. **NEEDS CONFIRMATION** is an internal review annotation only; do not expose it as public-facing portfolio content. If the information remains unconfirmed at launch, omit the entry rather than inventing details or claiming completion. 

---

## 5. Terminal Behavior Specification (Revised)

| Command | Purpose | Expected Output | Notes |
|---------|---------|-----------------|-------|
| `help` | List available commands | Table of commands with short descriptions. | Always reachable via the Help sticky‑note. |
| `whoami` | Show short bio | `Kevin Kanigara – Software Engineering Student (Bandung)` | Friendly tone. |
| `about` | Detailed bio (from notebook) | Multi‑paragraph markdown including links to GitHub. | Rendered inside the terminal; also accessible via the Bio button. |
| `projects` | List publishable project entries | Show only owner-confirmed project entries; otherwise give a clear empty state such as `No verified projects are listed yet.` | `Portfolio Systems Lab` remains a proposed entry until its identity and status are confirmed. Do not expose the internal **NEEDS CONFIRMATION** annotation or show a completion checkmark. |
| `project <slug>` | Show project details | Title, description, tech stack, status, external link. | Uses the same data as the modal card. |
| `skills` | List technical skills | Grouped list (Active / Learning). | Mirrors the sticky‑note rack. |
| `journey` | Timeline of learning phases | Chronological bullets (grade 6 → grade 10). |
| `contact` | Show contact info | Owner-confirmed public links and location; availability only if confirmed. |
| `clear` | Clear terminal screen | Clears visible content, leaves prompt. |
| `sudo` | Joke response | `User is not in the sudoers file. This incident will be reported.` |
| *any unknown* | Graceful error | `Command not recognized. Type 'help' for a list.` |

**Error handling** – errors appear in amber (`#FFB000`). Commands are case‑insensitive. Desktop autocomplete is optional. On mobile, provide discoverable command suggestions or a help list; do not rely on keyboard-specific suggestions. Terminal commands are simulated and restricted to portfolio content.

---

## 6. Desktop & Mobile Behavior

- **Desktop** – The desk view is the main visual composition. The terminal may be visible by default, with its expanded panel visually connected to the laptop. **Do not focus the input automatically** on page load; focus occurs only after a deliberate interaction with the input.
- **Mobile (≤ 600 px)** – The initial desk view shows the laptop/intro, notebook, and Help entry. Peripheral desk decorations are hidden initially. A persistent, accessible **Terminal** button opens/closes the terminal in the normal page flow; it does not overlay or obscure essential content. Opening the panel does not automatically focus the input or summon the on-screen keyboard.
- **Essential content** – About, Projects, Skills, Journey, and Contact remain accessible through visible buttons/sections and ordinary scrolling. Typing commands, hover interactions, and Easter eggs are optional shortcuts only.
- **Keyboard navigation** – Use semantic links and buttons, keep focus order logical, and provide visible focus indicators. `Enter`/`Space` activate buttons as expected.
- **Reduced motion** – When `prefers-reduced-motion` is enabled, disable or replace all nonessential CSS and JavaScript motion, including the terminal typewriter effect; render output immediately. No separate setting is required.

---

## 7. Implementation Constraints (Verify Before Coding)

- **Framework and frontend versions** – Earlier repository notes report Laravel 13, Vite, and Tailwind CSS 4. Re-check the actual manifests/configuration before implementation; this document alone is not proof of the installed setup.
- **No new dependencies** – The design specification chooses a small vanilla-JavaScript command parser. Do not add a terminal library or other dependency unless repository inspection reveals a concrete blocker and the change is approved.
- **No unnecessary server-side behavior** – Prefer the existing Blade architecture and keep terminal commands client-side, reading from a structured portfolio-content manifest where appropriate. Confirm the actual application structure before choosing file locations.
- **Accessibility** – Semantic controls, labels, visible focus, keyboard operation, and adequate contrast are requirements to verify; they have not been demonstrated by this design document.
- **Performance** – Asset size below 500 KB and Lighthouse score targets are goals to measure under documented test conditions, not verified results. Lazy-load optional visual assets where useful.

---

## 8. Acceptance Criteria (Testable)

### Design & Content
- [ ] **Creative Direction approved** – “Terminal Desk” documented and sign‑off received.
- [ ] **Palette & Typography** – CSS variables match the palette; fonts load without errors.
- [ ] **Responsive Layout** – Desktop, tablet, and mobile breakpoints match the wireframes.
- [ ] **Project entry** – Confirm the name/identity and completion status of “Portfolio Systems Lab” with the owner before publication. If it remains unconfirmed, omit it from the public project list rather than displaying the internal review annotation or implying completion.

### Functionality
- [ ] **Terminal commands** – All commands in Section 5 work, are case‑insensitive, and return the correct output.
- [ ] **Project status handling** – Future or incomplete entries are labelled accurately; any entry with unconfirmed identity/status is marked **NEEDS CONFIRMATION** in planning and is not presented as completed.
- [ ] **Help & Easter‑egg** – Sticky‑note Help opens the terminal help; coffee‑cup tooltip appears on hover (desktop) or tap (mobile).

### Accessibility & Performance
- [ ] **Keyboard navigation** – All focusable elements reachable via `Tab`; visible focus ring.
- [ ] **Screen-reader semantics** – Native buttons/links are used where possible; accessible names and focus behavior are checked in a screen reader or accessibility audit.
- [ ] **Color contrast** – Check all used text/background combinations against applicable contrast criteria; do not assume a palette passes without testing.
- [ ] **Reduced-motion** – Verify that `prefers-reduced-motion` disables/replaces all nonessential motion, including typewriter effects.
- [ ] **Performance** – Measure initial load and Lighthouse under documented device/network/cache conditions; report actual results rather than presuming a pass.

### Documentation
- [ ] **README** – Includes a “How to add a new project” guide.

---

## 9. Summary of Decisions & Next Steps

| Decision | Rationale |
|----------|-----------|
| Adopt **Terminal Desk** as the final art direction | Aligns with Kevin’s technical background, remains gender‑neutral, honest about the student stage, and is feasible with the current stack. |
| Consolidate to a single warm‑cream palette with rust accents and a dark terminal | Provides visual cohesion while preserving the terminal identity. |
| Use a **single‑page Blade view** with Tailwind Grid | Keeps the repository simple; no new routes needed. |
| Implement terminal via a **vanilla‑JS command parser** (no new dependencies) | Avoids adding packages; satisfies the “no new dependencies” rule. |
| Keep sticky‑note humor lightweight and optional | Adds personality without overwhelming the visitor. |

**Next step:** Create desktop and mobile visual mockups from the aligned wireframe. Before implementation, confirm the proposed project entry and re-check repository configuration.

---

*End of Decision Brief*