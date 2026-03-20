# Tailwind CSS & Alpine.js Integration Guide

This guide covers the setup and development workflow for Tailwind CSS and Alpine.js in the Dr. Alipour theme.

## Prerequisites

- **Node.js** and **npm** installed (v16+ recommended)
  - [Download Node.js](https://nodejs.org/)

## Initial Setup

### 1. Install Dependencies

After cloning the project, navigate to the project root and install npm packages:

```bash
cd c:\AI_Projects\Dr_Alipour
npm install
```

This will install:
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **PostCSS** and **Autoprefixer** - CSS processing tools

### 2. Build Tailwind CSS

#### Development Mode (Watch for changes)

During development, use watch mode to automatically recompile CSS as you make changes:

```bash
npm run dev
```

This command will:
- Monitor `theme/assets/css/input.css` for changes
- Scan PHP files for Tailwind class usage
- Automatically compile to `theme/assets/css/style.css`
- Continue running until you stop it (Ctrl+C)

#### Production Build

When ready to deploy, run the production build:

```bash
npm run build
```

This creates a minified, optimized CSS file.

## Project Structure

```
/Dr_Alipour
├── package.json                    # npm dependencies & scripts
├── tailwind.config.js              # Tailwind configuration
├── postcss.config.js               # PostCSS configuration
└── theme/
    ├── style.css                   # Theme header (auto-compiled)
    ├── header.php, footer.php      # Use Tailwind classes
    ├── blocks/
    │   ├── service/render.php      # Uses Tailwind classes
    │   ├── testimonial/render.php  # Uses Tailwind classes
    │   └── cta/render.php          # Uses Tailwind classes
    └── assets/
        ├── css/
        │   ├── input.css           # Tailwind source file (EDIT THIS)
        │   └── style.css           # Compiled output (AUTO-GENERATED)
        └── js/
            └── main.js             # Alpine.js utilities & initialization
```

## Tailwind CSS Usage

### Utility Classes

Tailwind CSS uses utility classes for styling. Examples:

```html
<!-- Spacing -->
<div class="p-4 m-8">Content</div>

<!-- Colors -->
<div class="bg-blue-500 text-white">Text</div>

<!-- Responsive Design -->
<div class="text-sm sm:text-base lg:text-lg">Responsive Text</div>

<!-- Hover States -->
<button class="bg-blue-500 hover:bg-blue-600">Hover me</button>
```

### Custom Components

Custom component classes are defined in `theme/assets/css/input.css`:

```css
@layer components {
  .btn-primary {
    @apply btn bg-primary text-white hover:bg-primary-dark shadow-md hover:shadow-lg;
  }
}
```

Use them in PHP:

```php
<a href="#" class="btn btn-primary">Click me</a>
```

### Theme Colors

Defined in `tailwind.config.js`:

- Primary: `#0073aa` (blue)
- Secondary: `#667eea` (purple)

Usage in classes:

```html
<div class="text-primary hover:text-primary-dark">Link</div>
<button class="bg-secondary hover:bg-secondary-dark">Button</button>
```

## Alpine.js Usage

### Basic Syntax

Alpine.js uses HTML attributes to add interactivity without separate JavaScript files.

### Common Directives

```html
<!-- x-data: Initialize component state -->
<div x-data="{ open: false }">

  <!-- x-show: Toggle visibility -->
  <button @click="open = !open">Toggle</button>
  <div x-show="open">Visible when open is true</div>

  <!-- x-if: Conditional rendering -->
  <template x-if="open">
    <div>Only in DOM when open is true</div>
  </template>

  <!-- x-text: Set text content -->
  <span x-text="message"></span>

  <!-- x-bind: Bind attributes -->
  <div :class="{ 'hidden': !open }">Content</div>

  <!-- @click: Event listener -->
  <button @click="open = false">Close</button>
</div>
```

### Example: Accordion

```html
<div x-data="{ active: null }">
  <button @click="active = active === 1 ? null : 1" class="w-full p-4 bg-gray-200">
    Item 1
  </button>
  <div x-show="active === 1" class="p-4">
    Accordion content here
  </div>

  <button @click="active = active === 2 ? null : 2" class="w-full p-4 bg-gray-200">
    Item 2
  </button>
  <div x-show="active === 2" class="p-4">
    More content here
  </div>
</div>
```

### Using Global Theme Functions

The `main.js` file exposes global Alpine utilities in `window.drAlipour`:

```html
<!-- Mobile menu example -->
<div x-data="window.drAlipour.mobileMenu" @click.away="close()">
  <button @click="toggle()">Menu</button>
  <nav :class="{ 'hidden': !isOpen }">Navigation items</nav>
</div>
```

### AJAX Form Example

```html
<form @submit="$event.preventDefault(); fetchContent('/api/endpoint')">
  <input type="text" required>
  <button type="submit">Submit</button>
</form>
```

## Tips & Best Practices

### 1. Watch for Class Generation

Tailwind only includes classes that appear in your PHP files. Make sure to:
- Write full class names (don't concatenate strings)
- Check `tailwind.config.js` content paths include all PHP files

### 2. Responsive Design

Always design with mobile-first approach:

```html
<!-- Mobile: text-sm, larger screens: text-lg -->
<h1 class="text-sm sm:text-base lg:text-lg">Heading</h1>
```

### 3. Custom CSS When Needed

For styles that don't fit Tailwind utilities, add to `theme/assets/css/input.css`:

```css
@layer components {
  .custom-style {
    @apply py-4 px-6 bg-white rounded-lg shadow-md;
  }
}
```

### 4. Alpine.js for Interactivity

Use Alpine for lightweight interactions. For complex UX, consider additional libraries.

### 5. Performance

- Tailwind only includes used classes (PostCSS scanning)
- Production build is minified automatically
- Alpine.js is only loaded when needed

## Common Commands

```bash
# Install dependencies
npm install

# Watch and compile Tailwind (development)
npm run dev

# Build minified CSS (production)
npm run build

# List installed packages
npm list
```

## Troubleshooting

### Styles not appearing

1. Ensure `npm run dev` is running or you've run `npm run build`
2. Check that class names are complete (not dynamically generated)
3. Verify file paths in `tailwind.config.js` content array

### Alpine.js not working

1. Confirm Alpine.js is loaded: Check browser console, look for "Alpine is ready"
2. Use browser DevTools to inspect `window.drAlipour` object
3. Check that HTML attributes are correct (e.g., `x-data` not `x:data`)

### Build errors

```bash
# Clear npm cache and reinstall
rm -r node_modules package-lock.json
npm install
npm run build
```

## Resources

- **Tailwind CSS Docs**: https://tailwindcss.com/docs
- **Tailwind Config**: https://tailwindcss.com/docs/configuration
- **Alpine.js Docs**: https://alpinejs.dev/
- **Alpine Examples**: https://alpinejs.dev/examples

## Next Steps

1. Start the development server: `npm run dev`
2. Make changes to PHP templates using Tailwind classes
3. Test Alpine.js interactivity in browser
4. When ready to deploy, run `npm run build` for production
