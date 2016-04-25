	<div id="footer">
		<div id="footer-inner" class="row">
			<footer class="row">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'footer-menu' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-block', 'container' => 'nav', 'container_class' => 'large-4 columns left' ) );
				} ?>
				<a href="/"><img src="/wp-content/themes/cornerstone-child/images/footer-logo.png" id="footer-logo" class="large-4 columns right"/></a>	
			</footer>
		</div>	
	</div>
<?php wp_footer(); ?>
  <a class="exit-off-canvas"></a>

  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50663982-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</body>
</html>