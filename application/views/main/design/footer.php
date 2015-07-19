            <!-- Footer / Start -->
            <footer id="footer" class="container clearfix">

                <div class="footer-column footer-column-1">
                    <div class="widget">
                        <h3 class="widget-title">About</h3>
                        <p>Web Soft Nepal Create a News Portal CMS</p>
                    </div><!-- .widget -->
                </div><!-- .footer-column .footer-column-1 -->

                <div class="footer-column footer-column-2">
                    <div class="widget widget_posts_thumbnail">
                        <h3 class="widget-title">Popular Posts</h3>
                        <ul>
                            <?php foreach ($latest as $lest) { ?>
                            <li>
                                <a href="<?php echo base_url()."view/post/".$lest->id; ?>" rel="bookmark"><img src="<?php echo base_url()."upload/thumb_".$lest->image; ?>" class="entry-thumbnail" style="width: 150px;height: 100px;" alt="Post Title"></a>
                                <a href="<?php echo base_url()."view/post/".$lest->id; ?>" rel="bookmark"><?php echo $lest->title; ?></a>
                                <div class="entry-meta">
                                    <span class="entry-date"><?php echo $lest->time; ?></span>
                                </div>
                            </li> 
                            <?php } ?>
                        </ul>
                    </div><!-- .widget .widget_posts_thumbnail -->
                </div><!-- .footer-column .footer-column-2 -->

                <div class="footer-column footer-column-3">
                    <div class="widget widget_twitter">
                        <h3 class="widget-title"><strong>Latest Tweets</strong></h3>
                        <ul>
                            <li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a> <span class="timestamp"><a href="#">3 hours ago</a></span></li>
                            
                        </ul>
                    </div><!-- .widget .widget_twitter -->
                </div><!-- .footer-column .footer-column-3 -->

                <div class="footer-column footer-column-4">
                    <div class="widget widget_newsletter">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Make sure you don't miss interesting happenings by joining our newsletter program. We don't do spam.</p>
                        <form role="form">
                            <input placeholder="Enter your email..." type="text">
                            <button class="btn" type="button">Signup</button>
                        </form>
                    </div><!-- .widget .widget_newsletter -->
                </div><!-- .footer-column .footer-column-4 -->

                <!-- Site Bottom / Start -->
                <div id="site-bottom" class="container clearfix">

                    <nav id="footer-nav">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </nav><!-- #footer-nav -->

                    <div class="copyright">
                        © 2014 <a href="">ramji</a>
                    </div><!-- .copyright -->

                </div>
                <!-- Site Bottom / End -->

            </footer>
            <!-- Footer / End -->

        </div>
        <!-- Page / End -->

        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/view/js/ga.js" async="" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_004.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/superfish.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_005.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_002.js"></script>
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/retina.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_006.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_003.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_007.js"></script>
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/analytics.js"></script> FOR DEMO ONLY -->
              
       </body></html>