<?php
/**
* Template Name: Front Page
**/

get_header();
?>

	<div id="primary" class="content-area">

		<?php if (have_rows('banner')) : ?>
			<?php while (have_rows('banner')) : the_row(); ?>
				<div id="banner" style="background-image: url(<?php the_sub_field('background'); ?>);">
					<div id="banner-overlay"></div><!--#banner-overlay-->
					<div class="inner">
						<div id="banner-content">
							<h1 id="banner-header"><?php the_sub_field('header'); ?></h1><!--#banner-header-->
							<h2 id="banner-subheader"><?php the_sub_field('subheader'); ?></h2><!--#banner-subheader-->
							<p id="banner-copy"><?php the_sub_field('copy'); ?></p><!--#banner-copy-->
						</div><!--#banner-content-->
					</div><!--.inner-->
				</div><!--#banner-->
			<?php endwhile; ?>
		<?php endif; ?>

		<main id="main">
			<?php if (have_rows('about_section')) : ?>
				<?php while (have_rows('about_section')) : the_row(); ?>
					<div id="about-my-coaching-services" class="page-section">
						<div class="inner">
							<h2 id="about-header" class="section-header"><?php the_sub_field('header'); ?></h2><!--#about-header.section-header-->
							<h3 id="about-subheader" class="section-subheader"><?php the_sub_field('subheader'); ?></h3><!--#about-subheader.section-subheader-->
							<div id="about-content" class="section-content"><?php the_sub_field('content'); ?></div><!--#about-content-->
							<?php if (have_rows('button')) : ?>
								<?php while (have_rows('button')) : the_row('button'); ?>
									<a id="about-btn" class="section-btn" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a><!--#about-btn.section-btn-->
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!--.inner-->
					</div><!--#about-my-coaching-services.page-section-->
				<?php endwhile; ?>
			<?php endif; ?>

			<?php get_template_part('template-parts/newsletter-form'); ?>

			<?php if (have_rows('testimonial_section')) : ?>
				<?php while (have_rows('testimonial_section')) : the_row(); ?>
					<div id="testimonials-from-satisfied-clients" class="page-section grey">
						<div class="inner">
							<h2 id="testimonial-header" class="section-header"><?php the_sub_field('header'); ?></h2>
							<h3 id="testimonial-subheader" class="section-subheader"><?php the_sub_field('subheader'); ?></h3>
							<?php if (have_rows('slides')) : ?>
								<div id="testimonial-slider">
									<?php while (have_rows('slides')) : the_row(); ?>
										<div class="testimonial-slide">
											<blockquote class="testimonial-quote"><?php the_sub_field('quote'); ?></blockquote>
											<span class="testimonial-source"><?php the_sub_field('source'); ?></span>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div><!--.inner-->
					</div><!--#testimonials-from-satisfied-clients.page-section-->
				<?php endwhile; ?>
			<?php endif; ?>

			<div id="contact-tonya-moore">
				<?php get_template_part('template-parts/contact-form'); ?>
			</div><!--#contact-tonya-moore-->

		</main><!--#main-->

	</div><!-- #primary -->

<?php get_footer(); ?>
