<div class="post-container">
	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="post-quote">

			<?php
				
				// Fetch post content
				$content = get_post_field( 'post_content', get_the_ID() );
				
				// Get content parts
				$content_parts = get_extended( $content );
				
				// Output part before <!--more--> tag
				echo $content_parts['main'];
			
			?>
		
		</div> <!-- /post-quote -->
		
		<?php if ( is_sticky() ) : ?>
				
			<div class="is-sticky">
				<div class="genericon genericon-pinned"></div>
			</div>
		
		<?php endif; ?>
								
		<div class="post-inner">
		
			<?php $title_var = get_the_title(); ?>
		
			<?php if ( !empty( $title_var ) ) : ?>
		
				<div class="post-header">
					
				    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				    	    
				</div> <!-- /post-header -->
			
			<?php endif; ?>
				    		            			            	                                                                                            
			<div class="post-excerpt">
					
				<?php 
					if ($pos=strpos($post->post_content, '<!--more-->')) {
						echo  '<p>' . mb_strimwidth($content_parts['extended'], 0, 200, '...') . '</p>';
					} else {
						the_excerpt('100');
					}
				?>
			
			</div> <!-- /post-excerpt -->
			
			<?php garfunkel_meta(); ?>
		
		</div> <!-- /post-inner -->
	
	</div>

</div>