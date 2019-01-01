    <footer>
      <div class="footer-container">
        <div class="footer-text hideme">
          <div><i class="footer-icon fa fa-clock-o" aria-hidden="true"></i><h1 class="footer-label">Hours of Operation</h1>
            <ul class="footer-list">
              <li class="footer-item">Monday-Friday: 5am-10pm</li>
              <li class="footer-item">Saturday: 7am-9pm</li>
              <li class="footer-item">Sunday: Closed</li>
            </ul>
          </div>
          <div><i class="footer-icon fa fa-map-marker" aria-hidden="true"></i><h1 class="footer-label">Physical Address</h1>
            <ul class="footer-list">
              <li class="footer-item">5151 West U.S. Highway 40</li>
              <li class="footer-item">Greenfield, IN 46140</li>
              <li class="footer-item">317-894-8888</li>
            </ul>
          </div>
          <div><i class="footer-icon fa fa-envelope-o" aria-hidden="true"></i><h1 class="footer-label">Mailing Address</h1>
            <ul class="footer-list">
              <li class="footer-item">P.O. Box 90</li>
              <li class="footer-item">New Palestine, IN 46163</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="top-bar">
        <span class="top-bar-text">Family Fun &amp; Fitness ~ Mo-Fr: 5am-10pm, St: 7am-9pm</span>
        <div class="tool-bar">
          <a class="tool-bar-link" href="#"><i class="fa fa-rss" aria-hidden="true"></i><p class="tool-bar-text">RSS</p></a>
          <a class="tool-bar-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><p class="tool-bar-text">twitter</p></a>
          <a class="tool-bar-link" href="https://www.facebook.com/FamilyFunFitness" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><p class="tool-bar-text">facebook</p></a>
          <a class="tool-bar-link" href="https://www.youtube.com/user/FamilyFunFitness" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i><p class="tool-bar-text">youtube</p></a>
        </div>
      </div>
      </div>
    </footer>
  </div>
</div>

<script>
  (function($) {
    $(window).scroll(function() {
    /* Check the location of each desired element */
      $(".hideme").each(function(i) {
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        /* If the object is completely visible in the window, fade it it */
        if (bottom_of_window > bottom_of_object) {
          $(this).animate({ opacity: "1" }, 500);
        }
      });
    });
  })( jQuery );
</script>
<?php wp_footer(); ?>

</body>
</html>