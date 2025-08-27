<?php
/**
 * Custom search form template
 */
?>

<form role="search" method="get" class="search-form relative" action="<?php echo home_url('/'); ?>">
    <div class="search-input-wrapper relative">
        <input 
            type="search" 
            class="search-field w-full px-4 py-3 pr-12 border border-border rounded-lg bg-input text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-accent transition-colors" 
            placeholder="<?php echo esc_attr_x('Search Waterways...', 'placeholder', 'waterways'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            title="<?php echo esc_attr_x('Search for:', 'label', 'waterways'); ?>"
        />
        <button 
            type="submit" 
            class="search-submit absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-ocean text-primary-foreground p-2 rounded-md hover:shadow-glow transition-all duration-300"
            aria-label="<?php echo esc_attr_x('Search', 'submit button', 'waterways'); ?>"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </div>
</form>