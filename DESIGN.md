# Design System Documentation: Structural Sophistication

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"The Architectural Monolith."** 

Construction is the art of permanence, precision, and layering. To move beyond a "generic corporate" look, this system treats the digital interface as a physical site—built with heavy foundations, intentional voids (white space), and structural depth. We reject the "template" aesthetic of thin lines and flat boxes. Instead, we use **intentional asymmetry** and **tonal layering** to create an editorial experience that feels as solid and authoritative as the buildings 'TSR Groups' constructs. 

This system is designed to convey "Trust through Scale." By using high-contrast typography scales and deep, immersive color fields, we position the brand as an industry titan rather than just another contractor.

---

## 2. Colors: Tonal Architecture
We utilize a sophisticated palette where depth is defined by color shifts rather than structural outlines.

### The Palette
*   **Primary Foundation:** `primary` (#001e40) and `primary_container` (#003366). These represent the "Steel and Stone"—the core strength of the brand.
*   **The Accent (The Spark):** `tertiary_fixed` (#ffdcbd) and `on_tertiary_container` (#e18600). These orange/yellow tones are used for "Laser-Focus" elements: CTAs, status indicators, and critical highlights.
*   **Neutrals:** `surface` (#f8f9fb) through `surface_container_highest` (#e0e3e5).

### The Rules of Engagement
*   **The "No-Line" Rule:** Explicitly prohibit the use of 1px solid borders to section off content. Boundaries must be defined solely through background color shifts. For example, a `surface_container_low` section should sit directly against a `surface` background to create a clean, modern break.
*   **Surface Hierarchy & Nesting:** Treat the UI as a series of stacked physical layers. Use the `surface_container` tiers (Lowest to Highest) to define importance. An inner card or content block should always be a tier "higher" (lighter) or "lower" (darker) than its parent container to create natural depth without visual clutter.
*   **The "Glass & Gradient" Rule:** To avoid a flat "out-of-the-box" feel, use Glassmorphism for floating navigation or overlays. Utilize `surface_variant` with a 70% opacity and a `20px` backdrop-blur. 
*   **Signature Textures:** For Hero sections or primary CTAs, use a subtle linear gradient transitioning from `primary` to `primary_container` at a 135-degree angle. This provides a "brushed steel" professional polish that flat hex codes cannot achieve.

---

## 3. Typography: Editorial Authority
The typography system pairs the geometric precision of **Manrope** with the utilitarian clarity of **Work Sans**.

*   **Display (Manrope):** Large, bold, and unapologetic. Use `display-lg` (3.5rem) for hero statements. These should often be set with tight letter-spacing (-0.02em) to feel like a structural beam.
*   **Headlines (Manrope):** Use `headline-lg` to `sm` for section titles. These are the "Signage" of the site—clear and commanding.
*   **Body (Work Sans):** Use `body-lg` (1rem) for general prose. Work Sans provides a technical, "blueprint" feel that balances the heavy headings.
*   **Labels (Work Sans):** Use `label-md` for technical data, metadata, or small accents. 

**Hierarchy Strategy:** Always maintain a high contrast between Display and Body. If a headline is `headline-lg`, ensure the accompanying sub-text is `body-md` to emphasize the scale and importance of the heading.

---

## 4. Elevation & Depth: Tonal Layering
We move away from traditional drop-shadows toward a more sophisticated "Ambient Light" model.

*   **The Layering Principle:** Depth is achieved by "stacking" surface tokens. Place a `surface_container_lowest` (#ffffff) card on a `surface_container_low` (#f2f4f6) section. This creates a soft, natural lift that mimics architectural plans.
*   **Ambient Shadows:** If a floating element (like a Modal or FAB) requires a shadow, it must be extra-diffused. Use a blur of `32px` or higher at `4%-8%` opacity. The shadow color must be a tinted version of `on_surface` (deep navy/grey), never pure black.
*   **The "Ghost Border" Fallback:** If a border is required for accessibility, use the `outline_variant` token at `15%` opacity. High-contrast, 100% opaque borders are strictly forbidden as they "trap" the eye and break the editorial flow.
*   **Glassmorphism:** For secondary floating elements, use semi-transparent surface colors with a heavy backdrop-blur. This allows construction imagery to bleed through subtly, integrating the UI with the photography.

---

## 5. Components: The Building Blocks

### Buttons: Monolithic Actions
*   **Primary:** `primary` background with `on_primary` text. No border. Use `rounded-sm` (0.125rem) to maintain a sharp, industrial feel. 
*   **Secondary:** `surface_container_high` background. This creates a button that looks like it was "carved" out of the surface.
*   **Tertiary/Accent:** Use the orange `tertiary_fixed` for high-conversion CTAs.

### Input Fields: Clean Structures
*   **Styling:** Forgo the four-sided box. Use a "Floating Slab" approach: a `surface_container_highest` background with a `2px` bottom-bar in `outline` color. 
*   **States:** On focus, the bottom-bar transitions to `tertiary` (Orange).

### Cards & Lists: The Void Method
*   **Rule:** Forbid the use of divider lines. 
*   **Execution:** Separate list items or cards using vertical white space (`spacing-8` or `spacing-10`). Use subtle background shifts (`surface` to `surface_container_low`) to define the container of the card.
*   **Imagery:** Cards featuring construction sites should use a subtle "Ken Burns" zoom effect on hover to add life to the static professional imagery.

### Additional Component: The "Progress Pylon"
*   In a construction context, use a custom progress stepper that mimics a vertical skyscraper structure. As steps are completed, the "floors" (blocks) fill from `primary_container` to `tertiary` (Orange).

---

## 6. Do’s and Don’ts

### Do:
*   **Do** use asymmetrical grid layouts (e.g., a 7-column content block next to a 5-column image block) to create an editorial feel.
*   **Do** use high-quality imagery of machinery and architecture. Let the images "bleed" off the edge of the screen to suggest scale.
*   **Do** respect the `0.25rem` (DEFAULT) roundedness. It’s enough to soften the UI but sharp enough to feel corporate and strong.

### Don’t:
*   **Don’t** use pure black (#000000). Use the `primary` (#001e40) for all "black" needs to keep the palette rich and branded.
*   **Don’t** use standard "Web 2.0" cards with heavy shadows and 1px borders.
*   **Don’t** crowd the interface. If an element feels tight, double the spacing using the `spacing-16` or `20` tokens. Space is a luxury; use it to signify a premium brand.
*   **Don’t** use iconography that is too "playful" or rounded. Stick to geometric, stroke-based icons with consistent weights.

---
*End of Document*