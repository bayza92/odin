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

        
            
		<div id="homepage-slider">
            <div class="image-cover">
            
                <span id="slider-text"></span>
                
                <script>
                    $('#slider-text').typeIt({
                         speed: 100,
                         autoStart: false
                    })
                    
                    .tiType('EVENT MANAGEMENT.')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('AWARDS DINNERS')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('CONFERENCES')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('ONLINE REGISTRATION')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('VENUE FINDING')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('EVENT SUPPORT')
                    .tiPause(1000)
                    .tiDelete()
                    .tiPause(500)
                    .tiType('EVENT MANAGEMENT')
                    
                </script>
            
            </div>
            
            <?php 
                echo do_shortcode("[metaslider id=26]"); 
            ?>
            
        </div>
            
        <div id="slider-buttons">
              <a href="https://www.youtube.com/watch?v=c8wFS_4zBUw&t=1s" rel="lightbox" class="button button-solid">Watch our video<i class="fa fa-play-circle" aria-hidden="true"></i></a>
              <a href="/contact/" class="button">Contact us<i class="fa fa-envelope" aria-hidden="true"></i></a>
              <div class="clearfix"></div>
        </div>
            
        <div id="homepage-section-1" class="homepage-section">
            
                <ul id="service-boxes">
                
                    <li class="service-box"><a id="event-management-box" href='//s2fevents.co.uk/services/#event-management'><span class="service-box-cover"><span class="service-box-title">Event Management</span></span></a></li>
                    <li class="service-box"><a id="online-registration-box" href='//s2fevents.co.uk/services/#online-reg'><span class="service-box-cover"><span class="service-box-title">Online Registration</span></span></a></li>
                    <li class="service-box"><a id="venue-sourcing-box" href='//s2fevents.co.uk/services/#venue-sourcing'><span class="service-box-cover"><span class="service-box-title">Venue Sourcing</span></span></a></li>
                    <li class="service-box"><a id="logistics-box" href='//s2fevents.co.uk/services/#logistics'><span class="service-box-cover"><span class="service-box-title">Logistics</span></span></a></li>
                    <li class="service-box"><a id="event-support-box" href='//s2fevents.co.uk/services/#event-support'><span class="service-box-cover"><span class="service-box-title">Event Support</span></span></a></li>
                    
                    <li class="service-box"><a id="conferences-box" href='//s2fevents.co.uk/what-we-do/#conferences'><span class="service-box-cover"><span class="service-box-title">Conferences</span></span></a></li>
                    <li class="service-box"><a id="awards-dinners-box" href='//s2fevents.co.uk/what-we-do/#awards-dinners'><span class="service-box-cover"><span class="service-box-title">Awards Dinners</span></span></a></li>
                    <li class="service-box"><a id="roadshows-box" href='//s2fevents.co.uk/what-we-do/#roadshows'><span class="service-box-cover"><span class="service-box-title">Roadshows</span></span></a></li>
                    <li class="service-box"><a id="exhibitions-box" href='//s2fevents.co.uk/what-we-do/#exhibitions'><span class="service-box-cover"><span class="service-box-title">Exhibitions</span></span></a></li>
                    <li class="service-box"><a id="international-box" href='//s2fevents.co.uk/what-we-do/#international'><span class="service-box-cover"><span class="service-box-title">International</span></span></a></li>
                    
                    <div class="clearfix"></div>
                </ul>
            
        </div>
            
        <div id="homepage-section-2" class="homepage-section">
            
            <div id="content-boxes">
            
                <div id="case-study-box">
                
                    <?php
                        $args = array(
                            'numberposts' => 1,
                            'offset' => 0,
                            'category' => 4,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'include' => '',
                            'exclude' => '',
                            'meta_key' => '',
                            'meta_value' =>'',
                            'post_type' => 'post',
                            'suppress_filters' => true
                        );
                    
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                            
                            if ( has_post_thumbnail() ) {
                                echo '<div class="content-box-image">';
                                echo '<div class="content-box-image-holder">';
                                echo '<a href="' . get_permalink($recent["ID"]) . '"><div class="fade"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>' .get_the_post_thumbnail($recent["ID"]).'</a>';
                                echo '</div>';
                                echo '<span class="image-title">Featured Case Study <i class="fa fa-thumb-tack" aria-hidden="true"></i></span>';
                                echo '</div>';
                            } 

                            echo '
                            
                            <div class="content-box-content">
                                <div class="content-box-title">
                                    <a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> 
                                    <div class="clearfix"></div>
                                </div>
                                <div class="content-box-excerpt">
                                    '.   wp_trim_words( $recent["post_content"], 50 ).'
                                </div>


                                <div class="content-box-read-more">
                                    <a href="' . get_permalink($recent["ID"]) . '">Read more</a> 
                                </div>
                            </div>
                            ';
                        }  
                    
                        wp_reset_query();
                    ?>
                    <div class="clearfix"></div>
                </div>
                <hr>
                <div id="blog-box">
                
                    <?php
                        $args = array(
                            'numberposts' => 1,
                            'offset' => 0,
                            'category' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'include' => '',
                            'exclude' => '',
                            'meta_key' => '',
                            'meta_value' =>'',
                            'post_type' => 'post',
                            'suppress_filters' => true
                        );
                    
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                            
                            if ( has_post_thumbnail() ) {
                                echo '<div class="content-box-image">';
                                echo '<div class="content-box-image-holder">';
                                echo '<a href="' . get_permalink($recent["ID"]) . '"><div class="fade"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>' .get_the_post_thumbnail($recent["ID"]).'</a>';
                                echo '</div>';
                                echo '<span class="image-title">Latest News <i class="fa fa-newspaper-o" aria-hidden="true"></i></span>';
                                echo '</div>';
                            } 

                            echo '
                            
                            <div class="content-box-content">
                                <div class="content-box-title">
                                    <a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> 
                                    <div class="clearfix"></div>
                                </div>
                                <div class="content-box-excerpt">
                                    '.   wp_trim_words( $recent["post_content"], 50 ).'
                                </div>


                                <div class="content-box-read-more">
                                    <a href="' . get_permalink($recent["ID"]) . '">Read more</a> 
                                </div>
                            </div>
                            ';
                        }  
                    
                        wp_reset_query();
                    ?>
                    <div class="clearfix"></div>
                
                </div>
            
            </div>
        
        </div>
            
        <div id="homepage-section-3" class="homepage-section">
            
            <div id="twitter-holder">
                
                <div id="twitter-logo">
                
                    <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
                
                </div>
        
            <?php 
                echo do_shortcode("[rotatingtweets screen_name='S2Fevent' tweet_count='3' timeout='5000']");  
            ?> 
                
                <div class="clearfix"></div>
                
            </div>
            
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
