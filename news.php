<?php /* Template Name: News */ ?>

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <header class="entry-header page-header">
		          <h1 class="entry-title page-title">News</h1>	
            </header>
            
                <div id="news" class="entry-content">
                 
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                      'category_name' => 'blog',
                      'posts_per_page' => 6,
                      'paged'          => $paged
                    );

                    $the_query = new WP_Query( $args ); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
                        <div class="grid-item">
                            <div class="grid-item-image">
                             <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                             <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                             </div>
                         </div>
                    <?php endwhile; ?>

                    

                    <?php else: ?>
                      <article>
                        <h1>Sorry...</h1>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                      </article>
                    <?php endif; ?>
                    
                    <div class="clearfix"></div>
                    
                    
            <?php wpex_pagination(); ?>

                    
                    
                    
                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
