<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card bg-card border border-border rounded-lg overflow-hidden hover:border-accent transition-all duration-300 hover:shadow-card mb-8'); ?>>
    
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('card-image', array('class' => 'w-full h-48 object-cover')); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="post-content p-6">
        <?php
        $categories = get_the_category();
        if (!empty($categories)) {
            echo '<div class="post-category mb-3">';
            echo '<span class="inline-block bg-accent text-accent-foreground px-2 py-1 rounded-full text-xs font-semibold">';
            echo esc_html($categories[0]->name);
            echo '</span>';
            echo '</div>';
        }
        ?>
        
        <header class="entry-header">
            <?php if (is_singular()) : ?>
                <h1 class="entry-title text-3xl font-bold mb-4 text-foreground"><?php the_title(); ?></h1>
            <?php else : ?>
                <h2 class="entry-title mb-3">
                    <a href="<?php the_permalink(); ?>" class="text-xl font-bold text-foreground hover:text-accent transition-colors">
                        <?php the_title(); ?>
                    </a>
                </h2>
            <?php endif; ?>
        </header>
        
        <div class="entry-content text-muted-foreground mb-4">
            <?php
            if (is_singular()) {
                the_content();
                
                wp_link_pages(array(
                    'before' => '<div class="page-links">Pages: ',
                    'after'  => '</div>',
                ));
            } else {
                the_excerpt();
            }
            ?>
        </div>
        
        <div class="entry-meta flex items-center justify-between text-sm text-muted-foreground">
            <time datetime="<?php echo get_the_date('c'); ?>">
                <?php echo get_the_date(); ?>
            </time>
            <span>by <?php echo get_the_author(); ?></span>
        </div>
        
        <?php if (is_singular()) : ?>
            <div class="entry-footer mt-6">
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    echo '<div class="post-tags">';
                    foreach ($tags as $tag) {
                        echo '<span class="inline-block bg-muted text-muted-foreground px-2 py-1 rounded text-xs mr-2">';
                        echo esc_html($tag->name);
                        echo '</span>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</article>