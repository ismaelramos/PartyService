<?php get_header(); ?>

	<div class="contenido home-page">
		<div class="wrapper-cont-sidebar">
			<!-- section combos-->
			<section>
				<div class="combos">
					<h3>Combos fiesteros</h3>
					<?php
						$args = array (
							'post_type' => 'combos',
							'posts_per_page' => 3,
							'orderby' => 'date',
							'order' => 'ASC',
						);

						$fcombos = new WP_Query($args);
						while ($fcombos->have_posts()): $fcombos->the_post();
					?>
					<div class="combo-item">
						<figure>
						<figcaption><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></figcaption>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('combo'); ?></a>
						</figure>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>

				<div class="blogs">
					<h3>Entradas de blog</h3>
					<div class="wrapper-blogs">
						<?php $cont = 0;
							while (have_posts()): the_post(); ?>
							<div class="blog-item">
								<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>	
								<?php	$cont+=1;
										if ($cont==4)
											break;
								?>
							
							</div>

				<?php endwhile; ?>
					</div>
				</div>
				<p class="alin-derecha"><a>Más entradas de nuestro blog</a></p>

				

			</section>
		</div>
	</div>

<?php get_footer(); ?>
