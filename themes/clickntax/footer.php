<section class="section-40 section-sm-60 bg-cello">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-xs-10 cell-sm-11 cell-md-12">
              <div class="range">
                <div class="cell-sm-6 cell-md-4">
                  <div class="inset-md-right-30">
                    <h6 class="text-uppercase text-big">About us</h6>
                    <p class="offset-top-27 text-bismark">
                      Our firm has been providing expert tax and consulting services to individuals and small businesses throughout the country since 1989.
                      
                    </p>
                  </div>
                  <div class="offset-top-22">
                    <div class="group-md group-top">
                      <div>
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-xs-smaller icon-primary fa-phone"></span></div>
                          <div class="unit-body"><a href="callto:#" class="link link-bold link-white-v2">011-45281122</a></div>
                        </div>
                        <div class="inset-left-30">Mobile: <a href="catoll:#" class="link-white-v2 text-italic">+91-9990881588 </a></div>
                      </div>
                      <div>
                        <ul class="list-inline list-inline-reset">
                          <li><a href="#" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-facebook"></a></li>
                          <li><a href="#" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-twitter"></a></li>
                          <li><a href="#" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-google-plus"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                  <h6 class="text-uppercase text-big">Quick links</h6>
                  <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                    
					
					<?php 
			
							$menu_arr = array(
							'menu'=>'Primary Menu',
							'menu_class'=>'list-marked-variant-2',
							'container' => '',
							'container_class' => '',
							'theme_location'=>'Primary Menu',
							'fallback_cb'=>false
							);
						wp_nav_menu($menu_arr);
			?>	
			
			<!--
					<div class="col-xs-6">
                      <ul class="list-marked-variant-2">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Individual</a></li>
                        <li><a href="careers.html">Start a Business</a></li>
                        <li><a href="blog-classic.html">Business Solutions</a></li>
                      </ul>
                    </div>
					
                    <div class="col-xs-6">
                      <ul class="list-marked-variant-2">
                        <li><a href="about-us.html">Tax Tools</a></li>
                        <li><a href="contact-us.html">Learning Center</a></li>
                        <li><a href="appointment.html">Contact Us</a></li>
                      </ul>
                    </div>
					-->
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                  <h6 class="text-uppercase text-big">Subscribe</h6>
                  <div class="offset-top-22 offset-md-top-30">
                    <p class="text-bismark">Get the latest updates and offers.</p>
                    <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-classic form-inline offset-top-15">
                      <div class="form-group">
                        <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                        <label for="contact-email" class="form-label">Enter Your E-mail</label>
                      </div>
                      <button type="submit" aria-label="Subscribe" class="btn btn-icon-only btn-primary"><span class="icon icon-xs icon-white fa-envelope-o"></span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="page-foot section-15 bg-cloud-burst">
        <div class="shell text-center">
          <div class="range">
            <div class="cell-sm-12">
              <p class="rights text-bismark"><span>&#169;&nbsp;</span><span id="copyright-year"></span><span>Click N Tax All Rights Reserved&nbsp;</span><a href="index.php">Click N Tax</a>&nbsp;
              <a rel="nofollow" href="#" target="_blank">Privacy Policy</a> &nbsp;<a rel="nofollow" href="#" target="_blank">Terms & Conditions</a> &nbsp;<a rel="nofollow" href="#" target="_blank">Site Map</a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div id="form-output-global" class="snackbars"></div>
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/core.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
  </body>
</html>