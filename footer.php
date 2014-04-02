<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fastr
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <a class="back-to-top" href="#">&uarr;</a>
        <div class="container">
            <div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                  <div class="menu">
                     <ul>
                        <li><a href="http://impactstory.org">Impactstory home</a></li>
                        <li><a href="http://twitter.com/impactstory">Twitter</a></li>
                        <li><a href="http://facebook.com/Impactstory">Facebook</a></li>
                        <li><a href="https://plus.google.com/100164144715192552027/posts">g+</a></li>
                     </ul>
                  </div>
              </nav><!-- #site-navigation -->
            </div>

            <?php include(TEMPLATEPATH . "/searchform.php"); ?>


            <div class="site-info">
             <a href="http://wordpress.org">WordPress</a>
             <span class="sep"> | </span>
             <a href="https://github.com/total-impact/fastr-wordpress-theme">Theme</a>
             <span class="sep"> | </span>
             <a href="http://creativecommons.org/licenses/by/4.0/legalcode">CC-BY</a>
            </div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>