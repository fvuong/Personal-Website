
<footer id="footer">
	<div class="wrapper">


		<div class="profile-img">
			<h4><?php echo __("Frank Vuong", "frankvuong"); ?></h4>
			<?php the_field("footer_list", 7); ?>
		</div>

		<div class="about">
			<?php get_sidebar("footer-info"); ?>
		</div>



		<div class="footer-menu">
			<h4><?php echo __("Other Links", "ReadyArtwork"); ?></h4>
			<?php $nav_arguments =  array(
				'theme_location'  => 'header_nav',
				'container'       => 'div',
				'menu_class'      => 'menu',
				'echo'            => true,
				); ?>

			<?php 
			wp_nav_menu($nav_arguments); 
			?>
		</div>




	</div>
</footer>
<?php wp_footer(); ?>

</section> <!-- CONTAINER -->

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-214.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scripts.js"></script>

</body></html>