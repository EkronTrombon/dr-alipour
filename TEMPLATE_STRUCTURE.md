# Dr. Alipour Theme - Template Structure Guide

## Template Hierarchy

WordPress uses a specific order to load templates. This theme follows the standard WordPress template hierarchy with custom page templates.

### Template Hierarchy Map

```
WordPress → Check for specific template → Fall back to parent template
```

## Templates Overview

### Core Templates

#### `front-page.php`
- **Purpose**: Custom home page
- **Usage**: Displayed when homepage is set to static front page
- **Features**:
  - Hero section with gradient background
  - Highlights statistics
  - Services preview
  - Recent blog posts
  - Testimonials section
  - Call-to-action

#### `page.php`
- **Purpose**: Generic page template for standard pages
- **Usage**: Default template for pages without specific custom template
- **Features**:
  - Page title and featured image
  - ACF blocks support
  - Responsive content layout

#### `single.php`
- **Purpose**: Single blog post template
- **Usage**: Displayed for individual blog posts
- **Features**:
  - Post meta (author, date, category, reading time)
  - Featured image
  - Content with sidebar
  - Author bio box
  - Post navigation (previous/next)
  - Comments section
  - Related posts widget
  - Search widget

#### `archive.php`
- **Purpose**: Archive/listing template for blog posts, categories, tags, authors
- **Usage**: Displayed for category, tag, author, and date archives
- **Features**:
  - Grid layout (3 columns on desktop)
  - Category filtering
  - Sort options
  - Post cards with thumbnails
  - Pagination

#### `search.php`
- **Purpose**: Search results template
- **Usage**: Displayed when search is performed
- **Features**:
  - Search query display
  - Result count
  - Grid layout of results
  - Search form
  - Pagination

#### `404.php`
- **Purpose**: Not found error page
- **Usage**: Displayed when page doesn't exist
- **Features**:
  - Friendly error message
  - Navigation suggestions
  - Search form

### Custom Page Templates

Custom page templates are in `/theme/templates/` and can be assigned to specific pages via WordPress admin.

#### `page-services.php`
- **Template Name**: Services
- **Purpose**: Services showcase page
- **Features**:
  - Hero section
  - Service blocks grid
  - Call-to-action section
  - Alpine.js accordion for FAQ
  - Mobile responsive

#### `page-about.php`
- **Template Name**: About
- **Purpose**: About Dr. Alipour page
- **Features**:
  - Hero section with gradient
  - About content + image grid
  - Credentials display
  - Specializations list
  - Testimonials showcase
  - Call-to-action

#### `page-contact.php`
- **Template Name**: Contact
- **Purpose**: Contact form and scheduling page
- **Features**:
  - Hero section
  - Contact information (hours, phone, email, address)
  - Gravity Forms integration
  - Calendly embed for appointment booking
  - Fully responsive layout

## Using Custom Page Templates

### To Apply a Custom Template:

1. Go to **Pages → Add New** (or edit existing page)
2. On the right side, find **Page Attributes** panel
3. Under "Template", select desired template:
   - Services (for `/services` page)
   - About (for `/about` page)
   - Contact (for `/contact` page)
4. Publish/Update page

## Template Features & Classes

### Tailwind CSS Classes Used

All templates use Tailwind utility classes for styling:

- **Containers**: `container-page` - max-width: 1200px, centered, 20px padding
- **Headings**: `heading-1`, `heading-2`, `heading-3` - predefined sizes and weights
- **Buttons**: `btn btn-primary`, `btn btn-secondary`, `btn btn-outline`
- **Cards**: `card`, `card-body` - white box with shadow
- **Responsive**: `md:`, `lg:`, `sm:` breakpoints

### Alpine.js Components

#### Accordion (Services Page)
```html
<div x-data="{ active: null }">
    <button @click="active = active === 1 ? null : 1">
        Toggle Item 1
    </button>
    <div x-show="active === 1">
        Content visible when active
    </div>
</div>
```

#### Mobile Menu
```javascript
window.drAlipour.mobileMenu
```

## ACF Block Integration

Templates support ACF blocks automatically through:

```php
<?php
if (function_exists('has_blocks') && has_blocks()) {
    echo apply_filters('the_content', get_post_field('post_content'));
}
?>
```

## Sidebar/Widget Areas

Two widget areas registered:

1. **Blog Sidebar** (`blog-sidebar`)
   - Used in `single.php`
   - For search, recent posts, categories

2. **Footer Sidebar** (`footer-sidebar`)
   - Available in footer
   - For additional footer widgets

## Template Relationships

```
home / index
    ├── front-page.php (if static home)
    └── home.php → index.php

single post/page
    ├── single-{post-type}.php
    ├── single.php (posts)
    ├── page-{slug}.php (specific page)
    ├── page-{id}.php (specific page)
    ├── page.php (generic pages)
    └── index.php (fallback)

archive (categories, tags, authors)
    ├── category-{slug}.php
    ├── tag-{slug}.php
    ├── author-{user-nicename}.php
    ├── archive.php
    └── index.php

search
    ├── search.php
    └── index.php

404
    ├── 404.php
    └── index.php
```

## Adding New Templates

To add a new custom page template:

1. Create file in `/theme/templates/page-{name}.php`
2. Add header comment:
   ```php
   <?php
   /**
    * Template Name: Display Name
    * Template Post Type: page
    */
   ```
3. Get header/footer:
   ```php
   get_header();
   // ... content
   get_footer();
   ```
4. Use Tailwind classes and Alpine.js for interactivity
5. Template appears in WordPress page editor

## Performance Considerations

- Templates use `container-page` class for consistent max-width
- Images use lazy loading via `loading="lazy"` attribute
- CSS is compiled from Tailwind (npm run build)
- Only needed Alpine.js features are loaded
- Minified in production

## Mobile Responsiveness

All templates are mobile-first:
- Base styles work on mobile (320px+)
- `sm:` (640px+), `md:` (768px+), `lg:` (1024px+) breakpoints
- Flexbox for layout
- Touch-friendly buttons and links

## Customization

To customize template styles:

1. **Edit Tailwind source**: `theme/assets/css/input.css`
2. **Add custom CSS**: Use `@layer` in input.css
3. **Recompile**: `npm run build` (production) or `npm run dev` (development)
4. **Update components**: Edit template files using Tailwind classes

## Common Patterns

### Hero Section
```html
<section class="py-16 sm:py-24 bg-gradient-to-r from-primary to-primary-dark text-white">
    <div class="container-page">
        <!-- Content -->
    </div>
</section>
```

### Card Grid
```html
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="card card-body"><!-- Item --></div>
</div>
```

### Text with Image
```html
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div class="prose max-w-none"><!-- Text --></div>
    <div><!-- Image --></div>
</div>
```

## Resources

- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [Tailwind CSS Docs](https://tailwindcss.com/)
- [Alpine.js Docs](https://alpinejs.dev/)
