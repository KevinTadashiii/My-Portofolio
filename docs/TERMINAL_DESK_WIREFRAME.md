# Terminal Desk Wireframe (Low‑Fidelity)

*All measurements are approximate; the layout is defined using Tailwind CSS utility classes. The wireframe is text‑based and meant for quick iteration before visual mock‑ups.*

---

## 1. Overall Layout (Desktop ≥ 1024 px)

```
+---------------------------------------------------------------+
|                     [HEADER – optional logo]                 |
+---------------------------------------------------------------+
|                         DESK VIEW                           |
|  +-------------------------------------------------------+  |
|  |                    OVERHEAD DESK                     |  |
|  |                                                       |  |
|  |  +-----------+   +-----------+   +-----------+        |  |
|  |  | NOTEBOOK  |   |  LAPTOP   |   |  COFFEE   |        |  |
|  |  | (left)    |   | (center)  |   | (right)   |        |  |
|  |  +-----------+   +-----------+   +-----------+        |  |
|  |                                                       |  |
|  |  +-----------+   +-----------+   +-----------+        |  |
|  |  | TOOLS     |   | STICKY    |   | PROJECT   |        |  |
|  |  | rack      |   | NOTES/HELP|   | FOLDER    |        |  |
|  |  +-----------+   +-----------+   +-----------+        |  |
|  +-------------------------------------------------------+  |
|  TERMINAL EXPANDED STATE: visually connected to the laptop; |
|  same terminal interface, not a second independent terminal.|
+---------------------------------------------------------------+
```

- **Grid definition:** Use a three-column CSS Grid within a bounded desk container; align laptop centrally, notebook left, coffee right, and project folder in the lower-right zone.
- **Object interaction:** Use semantic buttons/links. Hover may add polish, but never carries essential information by itself.
- **Terminal presentation:** The laptop screen is the terminal's visual home. Any expanded terminal panel represents the same interface, not a duplicate command input.
- **Layering:** Use stacking context only for clear interaction states, such as a selected object or a modal.

---

## 2. Object Details (Desktop)

### Laptop (center)
```
+-------------------+
|  _______________________  |
| |   TERMINAL UI       | |
| |   (vanilla‑JS)      | |
| |_____________________| |
|   __________________   |
|  |   Keyboard keys   | |
|  +-------------------+ |
+-------------------+
```
- **Component:** Blade component `components.desk-laptop`.
- **Responsiveness:** At ≤ 768 px it spans full width (`col-span-3`).
- **Interaction:** Clicking the laptop or its explicit terminal control may open/expand the terminal. Do not automatically focus the input on page load; the visitor must intentionally select the input before typing.

### Project Folder (lower-right)
```
+-------------------+
| PROJECTS          |
| [folder tab]      |
| Status:           |
| NEEDS CONFIRMATION|
+-------------------+
```
- **Interaction:** Click, keyboard-activate, or tap to open the Projects details/list. This must also be available through a normal Projects section/button; do not require terminal input.
- **Content status:** `Portfolio Systems Lab` is a proposed entry whose title/identity and completion status still need owner confirmation. `NEEDS CONFIRMATION` is an internal planning annotation, not public-facing copy. Until details are confirmed, the public project list should omit this entry or use only owner-approved facts; never show a completion checkmark without confirmation.

### Notebook (left)
```
+-------------------+
|   /---\   /---\   |
|  |  *  | |  *  |  |
|   \---/   \---/   |
|   SPIRAL BINDING  |
|   ---------------- |
|   [Open] → Bio    |
+-------------------+
```
- **Flip animation:** CSS `transform rotateY(180deg)` on click.
- **Content:** Bio markdown rendered inside the notebook.

### Coffee Cup (right)
```
   ( )
  (   )   <- steam (CSS animation)
   | |
   | |
   | |
  [caffeine: 73%]
```
- **Easter‑egg:** Hover, focus, or tap can reveal `caffeine_level: nominal`.
- **Status joke:** Any coffee/energy indicator is a clearly fictional visual gag, not a live measurement or personal-health claim.

### Tools Rack (bottom‑left)
```
+-------------------+
| 🔧  🔨  🪛  🪚   |
|  Laravel  Git   NPM |
+-------------------+
```
- **Icons:** Reuse the repository's existing icon set if confirmed. Otherwise use simple inline SVG shapes; do not add a dependency just for icons.
- **Interaction:** Click, keyboard focus/activation, or tap reveals the related skill list. Hover is optional enhancement only.

### Sticky‑Note Cluster (lower-center)
```
+----+   +----+   +----+
| ?  |   | ?  |   | ?  |
|----|   |----|   |----|
|Help|   |Todo|   |Note|
+----+   +----+   +----+
```
- **Help note** opens terminal `help` screen.
- **Todo note** may contain a light, non-sensitive joke. Do not expose private planning tasks or present unconfirmed roadmap items as public promises.
- **Random note** contains a witty caption (e.g., “Remember to back up”).

---

## 3. Mobile Layout (≤ 600 px)

```
+--------------------------------+
| HEADER / PRIMARY NAV            |
| [Bio] [Projects] [Skills]       |
| [Journey] [Contact] [Terminal]  |
+--------------------------------+
| LAPTOP / INTRO                  |
| [Open terminal]                 |
+--------------------------------+
| NOTEBOOK / BIO                  |
+--------------------------------+
| HELP NOTE / COMMAND GUIDE       |
+--------------------------------+
| PROJECTS SECTION / CARDS        |
+--------------------------------+
| SKILLS SECTION                  |
+--------------------------------+
| LEARNING JOURNEY                |
+--------------------------------+
| CONTACT                         |
+--------------------------------+
| TERMINAL PANEL (when expanded)  |
+--------------------------------+
```

- The **initial visual desk** shows only the Laptop/Intro, Notebook, and Help entry. Peripheral desk decorations (Coffee and Tools) are hidden initially; this does not hide the corresponding essential content.
- Essential About, Projects, Skills, Journey, and Contact content remains available through visible buttons/sections and normal scrolling. Typing terminal commands is optional.
- The persistent **Terminal** button opens/closes the terminal in the normal page flow. The terminal panel is collapsed by default and is **not fixed over or obscuring content**.
- Opening the terminal does not auto-focus the input or open the on-screen keyboard. The visitor taps the input deliberately to begin typing.

---

## 4. Interaction Flow (Key Scenarios)

1. **Landing** – Page loads with the desk and essential navigation. The desktop terminal may be visible, but its input is not focused; the mobile terminal is collapsed. The persistent Terminal button opens/closes the panel without focusing the input.
2. **Help** – Activate the Help note/icon or type `help` after deliberately selecting the terminal input; the available commands are shown.
3. **Explore Bio** – Select the notebook or Bio button; the same bio is available without typing.
4. **View Projects** – Select the visible Project Folder / Projects section or type `projects`. List only owner-confirmed entries in public-facing output. `Portfolio Systems Lab` remains an internal review item until its title/identity and status are confirmed; if confirmation is pending, use an honest empty state rather than exposing the review annotation or inventing details.
5. **Easter‑egg** – Hover, keyboard-focus, or tap the coffee cup to reveal an optional, clearly fictional coffee-status joke.
6. **Clear Screen** – Type `clear` after intentionally selecting the terminal input; terminal output clears while the prompt remains.
7. **Unknown Command** – Enter an unrecognized command; show an amber error and suggest `help`.
8. **Reduced motion** – With `prefers-reduced-motion`, show terminal output instantly and disable nonessential desk animations.

---

## 5. Design Tokens (Reference Only — Not an Executable Tailwind Config)

These values define the visual palette, not a required configuration-file format. During implementation, map them into the repository's existing stylesheet and the configuration conventions supported by the installed Tailwind version. The repository configuration has not been independently inspected as part of this document edit. Do not import `@tailwindcss/forms` or add dependencies unless the existing project explicitly confirms they are installed and required.

| Token | Value |
|-------|-------|
| `desk-bg` | `#F5F0E8` |
| `desk-text` | `#2C1810` |
| `accent-rust` | `#C75B39` |
| `accent-green` | `#5B7C5A` |
| `accent-warn` | `#D4A843` |
| `term-bg` | `#0A0A0A` |
| `term-text` | `#00FF41` |
| `term-prompt` | `#FFB000` |

---

## 6. Accessibility Checklist (Requirements to Verify)
- Prefer native `<button>` and `<a>` elements for interactive objects; add accessible names that describe the action (for example, `aria-label="Open notebook"`) when the visible text is insufficient. Do not add `role="button"` to native buttons unnecessarily.
- Keyboard order must be logical and visible focus indicators must be present. Confirm activation works with keyboard as well as pointer/touch.
- Test actual color pairings. Target at least 4.5:1 for normal text and check other applicable contrast requirements; do not state that the palette has passed until measured.
- **Reduced motion** – when `prefers-reduced-motion` is active, disable or replace nonessential CSS and JavaScript motion, including the terminal typewriter effect, and render terminal output immediately.
- Essential content and instructions must not require hover, terminal commands, or finding Easter eggs.
- These are requirements to test, not a claim that the implemented site has already passed an accessibility audit.

---

## 7. Open Items (to be refined in visual design)
- Final icon set for tools (Laravel, Git, NPM, etc.).
- Exact dimensions for the laptop screen (aspect ratio 16:9). 
- Determine whether the terminal will support command autocomplete (via `tab` key). 
- Decide whether a resume link is available and confirmed; if included, keep it visible in normal navigation rather than hiding essential functionality in an Easter egg. 

---

*End of wireframe.*