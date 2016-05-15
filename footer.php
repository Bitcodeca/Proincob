	
		<footer>
      	 <div id="footer">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <br>
                        <p class="copyright text-muted small">&copy; 2015 PROINCOB CA | RIF: J-31059282-9 | Todos los Derechos Reservados</p>
						<p class="copyright text-muted small">Desarrollado por <b><a href="http://bitcode.com.ve/" style="color:#bbb">BitCODE</a></b></p>
                    </div>
                </div>
            </div>
          </div>
	</footer>

	<?php wp_footer(); ?>

	<script>
	jQuery(document).ready(function($) {
		$(document).scroll(function() {
  var dHeight = $(this).height()-$(window).height();
  if (dHeight >= $(this).scrollTop()) {
    $('.navbar-default').css('background', 'rgba(255,255,255,' + 3*$(this).scrollTop() / dHeight + ')');
  }
});
});
	</script>
              <script>
              new WOW().init();
              </script>  
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script>
		jQuery(document).ready(function($) {
	function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}
});
	</script>
    <script type="text/javascript">
    jQuery(function($){
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
	</body>
</html>