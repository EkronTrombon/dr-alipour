# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

A custom WordPress theme for Dr. Alipour's psychology and coaching practice, built with Tailwind CSS v3 and Alpine.js v3. The development environment runs entirely in Docker.

## Common Commands

```bash
# Install frontend dependencies
npm install

# Watch and compile Tailwind CSS during development
npm run dev

# Production build (minified)
npm run build

# Start Docker environment (WordPress + MySQL + phpMyAdmin)
docker compose up -d

# Stop Docker environment
docker compose down
```

**Local URLs:**
- WordPress site: http://localhost:8080
- phpMyAdmin: http://localhost:8081

## Architecture

### CSS Pipeline
- **Edit**: `theme/assets/css/input.css` — Tailwind source with `@layer` component definitions
- **Never edit**: `theme/style.css` or `theme/assets/css/style.css` — these are compiled outputs
- Custom design tokens are in `tailwind.config.js` (primary blue `#0073aa`, secondary purple `#667eea`)

### JavaScript
- Alpine.js handles all interactivity — declared inline in PHP templates via `x-data`, `x-show`, `@click`, etc.
- `theme/assets/js/main.js` exposes global utilities under `window.drAlipour` (accordion, mobile menu, smooth scroll)

### Template Hierarchy
WordPress template resolution order is documented in `TEMPLATE_STRUCTURE.md`. Key templates:
- `front-page.php` — home page
- `templates/` — custom page templates (services, about, contact)
- `blocks/` — ACF-registered Gutenberg blocks (service, testimonial, cta)

### Theme Entry Point
`theme/functions.php` handles all theme setup: script/style enqueueing, nav menus, ACF block registration, and WordPress hooks.

### Docker & Mounts
- `./theme` mounts to `/wp-content/themes/dr-alipour` inside the WordPress container
- `./wordpress` contains WordPress core (created by Docker on first run, gitignored)
- PHP limits configured in `.docker/php.ini` (256M uploads, 512M memory)

## Required WordPress Plugins
- Advanced Custom Fields (ACF) Pro — powers custom blocks in `theme/blocks/`
- Gravity Forms — contact/inquiry forms
- Yoast SEO — SEO meta management
