<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



    <div id="" class="content">
        <?php
            
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="" <?php post_class(); ?>>
                <span class="byline">
                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php echo get_post_format_link(get_post_format()) ?>" class="post_icon" title="All <?php echo get_post_format() ?> posts">All <?php echo get_post_format() ?> posts</a>
                    <span class="date"><?php the_time('M d') ?></span>
                    <div class="clear"></div>
                </span>
                <?php the_content(); ?>
            </div> <!-- close:  post -->
        <?php endwhile; else: endif; ?>
    </div> <!-- close:  content -->
    
    <?php
        global $wp_query;

        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1){

          $current_page = max(1, get_query_var('paged'));

          echo '<div class="page_nav">';

          echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '/page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              'prev_text' => 'Prev',
              'next_text' => 'Next'
            ));

          echo '</div>';

        }
    ?>
    
</div>

<?php get_footer(); ?>
