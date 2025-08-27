# Waterways WordPress Theme

A modern, responsive WordPress theme for the Waterways TV series website featuring a professional header with navigation, hero section with 4 main areas (TV Show, Games, Graphic Novel, Lessons), and comprehensive STEM educational content.

## Features

- **Responsive Design**: Mobile-first approach with beautiful layouts on all devices
- **SEO Optimized**: Built-in SEO best practices and schema markup
- **Performance Optimized**: Fast loading times with optimized assets
- **Accessibility Ready**: WCAG 2.1 AA compliant with keyboard navigation support
- **Custom Post Types**: TV Episodes, Game Modules, and Lesson Plans
- **Customizer Support**: Easy theme customization through WordPress Customizer
- **Translation Ready**: Fully prepared for internationalization

## Design System

The theme uses a beautiful water-inspired design system with:

- **Colors**: Deep ocean teal, mangrove sage, biscayne bay blue, coral accents
- **Typography**: Modern, readable fonts optimized for STEM content
- **Animations**: Smooth transitions and floating particle effects
- **Components**: Reusable card layouts, buttons, and form elements

## Installation

1. Download the theme ZIP file
2. In WordPress admin, go to **Appearance → Themes**
3. Click **Add New → Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Activate the theme

## Theme Setup

### Required Plugins

While not required, these plugins enhance the theme functionality:

- **Contact Form 7**: For advanced contact forms
- **Yoast SEO**: For enhanced SEO features
- **WP Super Cache**: For performance optimization

### Recommended Pages

Create these pages for full theme functionality:

- **Home** (Front page)
- **TV Show** (Page template: page-tv-show.php)
- **Games** (Page template: page-games.php)
- **Graphic Novel** (Page template: page-graphic-novel.php)
- **Lessons** (Page template: page-lessons.php)
- **About** (Standard page)
- **Contact** (Standard page)
- **Privacy Policy** (Standard page)
- **Terms of Service** (Standard page)

### Menu Setup

1. Go to **Appearance → Menus**
2. Create a new menu called "Primary Navigation"
3. Add your pages to the menu
4. Assign it to the "Primary Navigation" location
5. Repeat for "Mobile Navigation" and "Footer Navigation"

### Custom Post Types

The theme includes three custom post types:

#### TV Episodes
- **URL**: `/episodes/`
- **Use**: Individual TV show episodes
- **Features**: Title, content, featured image, excerpt

#### Game Modules
- **URL**: `/game-modules/`
- **Use**: Educational games and interactive content
- **Features**: Title, content, featured image, excerpt

#### Lesson Plans
- **URL**: `/lesson-plans/`
- **Use**: Educational curriculum and lesson plans
- **Features**: Title, content, featured image, excerpt
- **Custom Fields**: Grade level, subject area, duration

## Customization

### Theme Customizer

Access customization options at **Appearance → Customize**:

#### Contact Information
- Contact email
- Phone number
- Location/address
- Footer description

#### Social Media Links
- Facebook URL
- Twitter URL
- Instagram URL
- YouTube URL

### Custom CSS

Add custom styles through **Appearance → Customize → Additional CSS**

### Child Theme

For extensive customizations, create a child theme:

```php
// functions.php
<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
```

## File Structure

```
waterways/
├── style.css                 # Main stylesheet with theme headers
├── index.php                 # Main template file
├── functions.php             # Theme functions and setup
├── header.php                # Header template
├── footer.php                # Footer template
├── sidebar.php               # Sidebar template
├── single.php                # Single post template
├── page.php                  # Page template
├── archive.php               # Archive template
├── search.php                # Search results template
├── 404.php                   # 404 error template
├── comments.php              # Comments template
├── searchform.php            # Search form template
├── page-tv-show.php          # TV Show page template
├── page-games.php            # Games page template
├── page-lessons.php          # Lessons page template
├── template-parts/           # Template partials
│   ├── hero-section.php
│   ├── services-grid.php
│   ├── about-section.php
│   ├── testimonials-slider.php
│   └── contact-form.php
├── assets/                   # Theme assets
│   ├── css/
│   │   ├── waterways-theme.css
│   │   └── tailwind.css
│   ├── js/
│   │   └── waterways-theme.js
│   └── images/
│       └── WaterWays-Logo-Web.png
├── screenshot.png            # Theme screenshot
└── README.md                # This file
```

## Development

### Local Development Setup

1. Set up a local WordPress environment
2. Clone the theme to `/wp-content/themes/waterways/`
3. Install dependencies (if using build tools)
4. Activate the theme

### CSS Framework

The theme uses a custom CSS framework inspired by Tailwind CSS with:

- Utility classes for rapid development
- CSS custom properties for theming
- Responsive design utilities
- Component-based architecture

### JavaScript

- jQuery-based for WordPress compatibility
- Modular architecture with individual feature functions
- Progressive enhancement approach
- Accessibility-focused interactions

## Browser Support

- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- iOS Safari (latest 2 versions)
- Android Chrome (latest 2 versions)

## Performance

The theme is optimized for performance:

- Minimal HTTP requests
- Optimized images with lazy loading
- Efficient CSS and JavaScript
- Caching-friendly architecture
- Core Web Vitals optimized

## Accessibility

WCAG 2.1 AA compliant features:

- Semantic HTML5 markup
- Proper heading hierarchy
- Keyboard navigation support
- Screen reader friendly
- High contrast mode support
- Focus indicators
- Alt text for images

## SEO Features

Built-in SEO optimizations:

- Semantic HTML structure
- Schema.org markup
- Open Graph tags
- Twitter Card support
- Optimized page titles
- Meta descriptions
- Breadcrumb navigation
- XML sitemap ready

## Support

For theme support and documentation:

- **Documentation**: Full documentation available in theme files
- **Community**: WordPress.org support forums
- **Custom Development**: Contact theme developers for custom work

## Changelog

### Version 1.0.0
- Initial release
- Responsive design implementation
- Custom post types integration
- SEO optimization
- Accessibility improvements
- Performance optimization

## License

This theme is licensed under the GPL v2 or later.

- **License**: GPL v2 or later
- **License URI**: https://www.gnu.org/licenses/gpl-2.0.html

## Credits

- **Design**: Waterways Miami team
- **Development**: WordPress theme development best practices
- **Icons**: SVG icons for optimal performance
- **Fonts**: System font stack for performance

---

© 2024 Waterways Miami. All rights reserved.