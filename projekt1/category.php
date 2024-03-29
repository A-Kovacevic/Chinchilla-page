<?php get_header(); 
global $hala_options;
$tb_show_page_title = isset($hala_options['tb_post_show_page_title']) ? $hala_options['tb_post_show_page_title'] : 1;
$tb_show_page_breadcrumb = isset($hala_options['tb_post_show_page_breadcrumb']) ? $hala_options['tb_post_show_page_breadcrumb'] : 1;
Hala_title_bar($tb_show_page_title, $tb_show_page_breadcrumb);
$readmore_text = (int) isset($hala_options['tb_blog_post_readmore_text']) ? $hala_options['tb_blog_post_readmore_text'] : 'VIEW DETAIL';
$tb_post_show_post_share = (int) isset($hala_options['tb_post_show_post_share']) ?  $hala_options['tb_post_show_post_share']: 1;
?>
	<div class="main-content mo-blog-list">
      <div class="internal-content">
		<div class="container">
			<div class="row">
				<?php
				$tb_blog_layout = isset($hala_options['tb_blog_layout']) ? $hala_options['tb_blog_layout'] : '2cr';
				$cl_sb_left = isset($hala_options['tb_blog_left_sidebar_col']) ? $hala_options['tb_blog_left_sidebar_col'] : 'col-xs-12 col-sm-12 col-md-4 col-lg-4';
				$cl_content = isset($hala_options['tb_blog_content_col']) ? $hala_options['tb_blog_content_col'] : ( is_active_sidebar('hala-main-sidebar') ? 'col-xs-12 col-sm-12 col-md-8 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12 col-lg-12' );
				if ( !is_active_sidebar('hala-main-sidebar') && !is_active_sidebar('hala-left-sidebar') && !is_active_sidebar('hala-left-sidebar') ) {
					$cl_content = 'col-xs-12 col-sm-12 col-md-8 col-lg-8';
				}
				$cl_sb_right = isset($hala_options['tb_blog_right_siedebar_col']) ? $hala_options['tb_blog_right_siedebar_col'] : 'col-xs-12 col-sm-12 col-md-4 col-lg-4';
				?>
				<!-- Start Left Sidebar -->
				<?php if ( $tb_blog_layout == '2cl' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_left) ?> sidebar sidebar-left">
						<?php if (is_active_sidebar('hala-left-sidebar')) { dynamic_sidebar('hala-left-sidebar'); } else { dynamic_sidebar('hala-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="<?php echo esc_attr($cl_content) ?> content">
					<?php
					if( have_posts() ) {
						while ( have_posts() ) : the_post();?>
                          <article <?php post_class(); ?>>
                            <div class="mo-post-item grid-post">
                                <div class="mo-media <?php echo get_post_format(); ?>">
                                <?php get_template_part( 'framework/templates/blog/entry', get_post_format()); ?>
                                </div>
                                <div class="info-post">
                                        <h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <ul class="meta-post">
                                            <li><?php echo get_the_date('d M, Y'); ?></li>
                                            <li><?php echo esc_html__('By ', 'hala').get_the_author(); ?></li><li><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' );?>  <?php echo esc_html__('Comments ', 'hala'); ?> </a></li>
                                            <li><?php Hala_post_favorite(); ?></li>
                                            <li><?php the_terms( get_the_ID(), 'category' ); ?></li>
                                            <?php
                                            hala_get_post_views($post->ID);
                                            $views = hala_get_post_views(get_the_ID());
                                           ?>
                                           <li><?php echo ($views); echo esc_html__('Views', 'hala'); ?></li>
                                       </ul>
                                        <?php the_excerpt(); 
										if ( $tb_post_show_post_share ) { hala_social_share(); }?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-post"><i class="fa fa-long-arrow-right"></i><?php echo esc_html($readmore_text); ?></a>
                                        <!-- tags-share -->
                                    </div>
                            </div>
                          </article>
					<?php endwhile;
						Hala_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
					?>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if ( $tb_blog_layout == '2cr' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_right) ?> sidebar sidebar-right">
						<?php if (is_active_sidebar('hala-right-sidebar')) { dynamic_sidebar('hala-right-sidebar'); } else { dynamic_sidebar('hala-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
      </div>  
	</div>
<?php get_footer(); ?>