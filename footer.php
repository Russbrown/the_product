<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package browny
 */

?>

	</div><!-- #content -->

		<footer class="footer">
      <div class="social-icons">
        <a href="https://twitter.com/the__product" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/the__product/" class="fa fa-instagram"></a>
        <a href="https://www.linkedin.com/in/russell-brown-07740a21/" class="fa fa-linkedin"></a>
      </div>
		</footer>

	</div><!-- #page -->

<?php wp_footer(); ?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="<?= get_template_directory_uri()?>/js/scripts.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91400131-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"e7510dfc6336ee69f4cbdd4be","lid":"106483b035"}) })</script>

</body>
</html>
