# Dr. Alipour WordPress Site - Setup Guide

## Project Overview

A modern, responsive WordPress site for Dr. Alipour's psychology and coaching practice built with:
- **WordPress 6.x** (Latest)
- **Custom Theme** with **Tailwind CSS** & **Alpine.js**
- **ACF Pro** for custom blocks and fields
- **Gravity Forms** for contact forms
- **Calendly** integration for appointment booking
- **Yoast SEO** for search engine optimization

## Quick Start

### Prerequisites

- **Docker** and **Docker Compose** installed
  - [Download Docker Desktop](https://www.docker.com/products/docker-desktop)
- **Node.js** and **npm** (v16+) for Tailwind CSS compilation
  - [Download Node.js](https://nodejs.org/)

### Installation Steps

1. **Clone/Extract Project**
   ```bash
   cd c:\AI_Projects\Dr_Alipour
   ```

2. **Install npm Dependencies**
   ```bash
   npm install
   ```

   This installs Tailwind CSS, Alpine.js, and build tools.

3. **Start Tailwind CSS Watch Mode** (in separate terminal)
   ```bash
   npm run dev
   ```

   This watches for CSS changes and automatically compiles Tailwind.

4. **Start Docker Containers** (in another terminal)
   ```bash
   docker-compose up -d
   ```

   This will:
   - Create MySQL database container
   - Create WordPress container
   - Create phpMyAdmin container for database management

5. **Access WordPress**
   - **WordPress Site**: http://localhost:8080
   - **phpMyAdmin**: http://localhost:8081
   - **Database**: `wordpress_db` / User: `wordpress` / Pass: `wordpress`

6. **Complete WordPress Setup**
   - Visit http://localhost:8080
   - Follow the WordPress installation wizard
   - Create admin account
   - Install theme & plugins

### Environment Configuration

Edit `.env` file to customize:
- Database credentials
- Site URL
- Debug mode settings

### Project Structure

```
/Dr_Alipour
├── package.json                        # npm dependencies (Tailwind, Alpine)
├── tailwind.config.js                  # Tailwind CSS configuration
├── postcss.config.js                   # PostCSS config for Tailwind
├── docker-compose.yml                  # Docker services configuration
├── .env                                # Environment variables
├── README.md                           # This file
├── TAILWIND_ALPINE_GUIDE.md            # Tailwind CSS & Alpine.js guide
├── TEMPLATE_STRUCTURE.md               # Template hierarchy & usage guide
└── theme/                              # Custom WordPress theme
   ├── style.css                        # Theme header (auto-compiled)
   ├── functions.php                    # Theme functions & ACF setup
   ├── header.php                       # Header template with navigation
   ├── footer.php                       # Footer template
   ├── index.php                        # Fallback template
   ├── front-page.php                   # Home page template
   ├── page.php                         # Generic page template
   ├── single.php                       # Single blog post template
   ├── archive.php                      # Blog archive/listings
   ├── search.php                       # Search results template
   ├── 404.php                          # 404 error page
   ├── blocks/                          # ACF custom blocks
   │  ├── service/render.php            # Service display block
   │  ├── testimonial/render.php        # Testimonial block
   │  └── cta/render.php                # Call-to-action block
   ├── templates/                       # Custom page templates
   │  ├── page-services.php             # Services page template
   │  ├── page-about.php                # About page template
   │  └── page-contact.php              # Contact page template
   └── assets/
      ├── css/
      │  ├── input.css                  # Tailwind source (EDIT THIS)
      │  ├── style.css                  # Compiled Tailwind output
      │  └── editor-style.css           # Editor styles
      ├── js/
      │  └── main.js                    # Alpine.js utilities
      └── images/                       # Theme images
```
│  ├── header.php         # Header template
│  ├── footer.php         # Footer template
│  ├── blocks/            # ACF custom blocks
│  │  ├── service/
│  │  ├── testimonial/
│  │  └── cta/
│  ├── templates/         # Additional templates
│  ├── assets/
│  │  ├── css/            # Stylesheets
│  │  ├── js/             # JavaScript files
│  │  └── images/         # Theme images
└── wordpress/            # WordPress core & plugins (created on first run)
```

## WordPress Configuration

### Site Settings

1. Go to **Settings > General**
   - Set Site Title: "Dr. Alipour"
   - Set Tagline/Description
   - Ensure URLs use http://localhost:8080

2. Go to **Settings > Permalink**
   - Select "Post name" for clean URLs

### Theme Activation

1. Go to **Appearance > Themes**
2. Activate "Dr. Alipour - Psychology & Coaching" theme

### Plugin Installation

1. Go to **Plugins > Add New**
2. Install & Activate:
   - **Advanced Custom Fields Pro** (ACF Pro)
     - [Get free or pro license](https://www.advancedcustomfields.com/)
   - **Gravity Forms**
     - [Get license](https://www.gravityforms.com/)
   - **Yoast SEO**
     - Free version available

3. For Calendly integration:
   - Go to Gravity Forms settings
   - Set up contact form
   - Add Calendly embed code to appropriate pages

## Development Workflow

### Creating ACF Blocks

Block definitions are registered in `functions.php`. To create a new block:

1. **Register the block** in `functions.php`:
   ```php
   acf_register_block_type( array(
       'name'            => 'dr-alipour/my-block',
       'title'           => 'My Block Title',
       'render_template' => THEME_DIR . '/blocks/my-block/render.php',
       // ... other options
   ) );
   ```

2. **Create render template** at `theme/blocks/my-block/render.php`:
   ```php
   <?php
   // Block template code
   ?>
   ```

3. **Define ACF fields** in `functions.php`:
   ```php
   acf_add_local_field_group( array(
       'key'      => 'group_my_block',
       'title'    => 'My Block Fields',
       'fields'   => array( /* field definitions */ ),
       'location' => array(
           array(
               array(
                   'param'    => 'block',
                   'operator' => '==',
                   'value'    => 'acf/dr-alipour-my-block',
               ),
           ),
       ),
   ) );
   ```

### Adding Pages & Content

1. **Create Pages** via WordPress admin
2. **Use blocks** to build pages with custom components
3. **Add to menu** via **Appearance > Menus**

### Managing Styles with Tailwind CSS

This theme uses **Tailwind CSS** for utility-first styling. All styles are managed through:

1. **Tailwind Configuration**: `tailwind.config.js`
   - Define custom colors, fonts, spacing, etc.

2. **CSS Input File**: `theme/assets/css/input.css`
   - Add custom CSS components and utilities
   - Edit this file for any styling changes

3. **Build Process**:
   ```bash
   # Development (watch for changes)
   npm run dev

   # Production (minified)
   npm run build
   ```

4. **Using Tailwind Classes** in PHP templates:
   ```php
   <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark">
     Click Me
   </button>
   ```

For detailed Tailwind CSS and Alpine.js documentation, see [TAILWIND_ALPINE_GUIDE.md](TAILWIND_ALPINE_GUIDE.md).

### JavaScript with Alpine.js

This theme uses **Alpine.js** for lightweight interactivity. Global utilities are exposed in `window.drAlipour`:

**Example - Accordion:**
```html
<div x-data="{ open: false }">
  <button @click="open = !open" class="w-full p-4 bg-gray-200">
    Toggle
  </button>
  <div x-show="open" class="p-4">
    Content
  </div>
</div>
```

See [TAILWIND_ALPINE_GUIDE.md](TAILWIND_ALPINE_GUIDE.md) for more examples and best practices.

## Page Templates

The theme includes custom templates for key pages. Assign templates to pages in **Page Attributes → Template**:

### Available Page Templates

1. **Services** (`page-services.php`)
   - Hero section with tagline
   - Service blocks grid
   - FAQ accordion with Alpine.js
   - Call-to-action button

2. **About** (`page-about.php`)
   - Hero with gradient background
   - Content + image layout
   - Credentials display (years, clients, etc.)
   - Specializations checklist
   - Testimonials showcase
   - CTA section

3. **Contact** (`page-contact.php`)
   - Hero section
   - Contact information (hours, phone, email, address)
   - Gravity Forms contact form integration
   - Calendly appointment scheduling embed
   - Fully responsive

### Default Page Templates

Other templates auto-loaded:
- **Home** (`front-page.php`) - Static front page
- **Blog Posts** (`single.php`) - Individual blog posts with sidebar
- **Blog Archives** (`archive.php`) - Category, tag, author listings
- **Search** (`search.php`) - Search results
- **404** (`404.php`) - Not found page

For detailed template information, see [TEMPLATE_STRUCTURE.md](TEMPLATE_STRUCTURE.md).

## Docker Management

### Common Commands

```bash
# Start containers
docker-compose up -d

# Stop containers
docker-compose down

# View logs
docker-compose logs -f wordpress

# Stop and remove all data
docker-compose down -v

# Rebuild containers
docker-compose up -d --build

# Access container shell
docker exec -it dr_alipour_wp bash
```

## Database Backups

### Using phpMyAdmin
1. Visit http://localhost:8081
2. Login: `wordpress` / `wordpress`
3. Select database and export

### Using Command Line
```bash
docker exec dr_alipour_db mysqldump -u wordpress -pwordpress wordpress_db > backup.sql
```

## Deployment Checklist

- [ ] Configure hosting (managed or self-hosted)
- [ ] Update `.env` for production URLs
- [ ] Update WordPress `wp-config.php` for production
- [ ] Install SSL certificate
- [ ] Set up automatic backups
- [ ] Configure email settings
- [ ] Update permissions (wp-content ownership)
- [ ] Set up CDN for media (optional)
- [ ] Install caching plugin (W3 Total Cache, etc.)
- [ ] Test Calendly integration
- [ ] Test Gravity Forms submissions
- [ ] Set up email notifications

## Troubleshooting

### WordPress won't start
```bash
# Check logs
docker-compose logs wordpress

# Rebuild
docker-compose down
docker-compose up -d --build
```

### Database connection error
- Verify `.env` database credentials match docker-compose.yml
- Check MySQL container is healthy: `docker-compose ps`

### Plugins not activating
- Check PHP version compatibility
- Review WordPress error log: `docker exec dr_alipour_wp cat /var/www/html/wp-content/debug.log`

### File permissions (Linux/Mac)
```bash
docker exec dr_alipour_wp chown -R www-data:www-data /var/www/html
```

## Support & Resources

- **WordPress**: https://wordpress.org
- **ACF Documentation**: https://www.advancedcustomfields.com/resources/
- **Gravity Forms**: https://docs.gravityforms.com/
- **Yoast SEO**: https://yoast.com/help/
- **Calendly API**: https://developer.calendly.com/

## Next Steps

1. [x] Set up Docker environment
2. [ ] Install and configure WordPress
3. [ ] Install required plugins (ACF, Gravity Forms, Yoast)
4. [ ] Create page templates & ACF blocks
5. [ ] Migrate content from old site
6. [ ] Set up appointments with Calendly
7. [ ] Configure SEO settings
8. [ ] Test all forms and functionality
9. [ ] Deploy to production
