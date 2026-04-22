# Snazzy Sprocket Agency Site 🚀

## Project Overview
[cite_start]This project is a high-performance, custom-built WordPress site for **Snazzy Sprocket**, a fictional design and development agency[cite: 5]. [cite_start]Developed as part of the Software Engineer Assessment for **Happy Cog**, the site demonstrates a robust CMS architecture, a strictly custom Tailwind CSS-integrated theme, and a sophisticated AI-assisted development workflow[cite: 1, 2, 6].

[cite_start]The objective was to transform provided Figma designs into a fully functional, multi-page professional site within a 2-5 hour window, ensuring mobile responsiveness and a polished author experience[cite: 7, 16, 32].

---

## Key Features
* [cite_start]**Custom CMS Architecture:** Implementation of a dedicated "Case Studies" Custom Post Type (CPT) with structured taxonomies for 'Industry' and 'Technology'[cite: 21, 22].
* [cite_start]**Dynamic Work Gallery:** A functional listing page featuring frontend filters to allow users to sort projects by their respective categories[cite: 22].
* [cite_start]**Enhanced Author Experience (AX):** Integration of custom fields (ACF) and Gutenberg to empower content editors to manage agency narratives and the 10-member team section without modifying code[cite: 20, 29, 30].
* [cite_start]**Tailwind Proficiency:** A mobile-first, utility-first styling approach that ensures a lean CSS footprint and visual fidelity to the brand's design system[cite: 28, 32].
* [cite_start]**Technical Foundation:** Built on the latest version of WordPress using a "Strictly Custom" theme approach, avoiding restrictive page builders[cite: 25, 26, 27].

---

## AI-Driven Development & Orchestration
[cite_start]This project was developed using a "Human-in-the-loop" AI workflow, leveraging a cutting-edge stack of generative and agentic tools to accelerate delivery while maintaining senior-level engineering standards[cite: 34, 45].

### My AI Stack:
* **Google AI Ecosystem:** Utilized **Gemini** and **Gemini CLI** for high-level architectural brainstorming, logic validation, and technical documentation.
* **Orchestration & Agents:** Employed **AntiGravity** as the primary orchestration layer to manage local agentic tasks, alongside **Jules** for specialized code analysis and refactoring.
* [cite_start]**Coding Assistance:** Leveraged **Cursor**, **Claude**, and **GitHub Copilot** for real-time pair programming and scaffolding repetitive boilerplate[cite: 34, 37].

### Strategic Implementation:
* [cite_start]**Scaffolding:** Accelerated the creation of PHP CPT registrations, taxonomies, and ACF field groups[cite: 37].
* [cite_start]**Optimization:** Refined complex `WP_Query` logic for project filtering and optimized Tailwind configuration for production[cite: 37].
* [cite_start]**Verification:** Every AI-generated component was manually audited for performance, security, and adherence to WordPress Coding Standards (WPCS)[cite: 39].

---

## Technical Stack
* **Backend:** WordPress (PHP)
* **Frontend:** Tailwind CSS, Alpine.js
* **Environment:** Docker-based local development (Docker Compose)
* **Data Layer:** Custom Post Types, Taxonomies, and ACF

---

## Getting Started
1.  **Clone the repository.**
2.  **Ensure Docker is running.**
3.  **Run the containers:** ```bash
    docker compose up -d --build
    ```
    *(Note: The database will automatically seed on the first run using the included `init.sql` file).*
4.  **Access the frontend:** Navigate to `http://localhost:8080`.
5.  **Access the WordPress Admin:** Navigate to `http://localhost:8080/wp-admin`.
    * **Username:** `oscarmmi`
    * **Password:** `5#Z6ZIt8BDrlVLn(9*`