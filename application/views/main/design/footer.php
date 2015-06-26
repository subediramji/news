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
                                <a href="" rel="bookmark"><img src="<?php echo base_url()."upload/thumb_".$lest->image; ?>" class="entry-thumbnail" alt="Post Title"></a>
                                <a href="" rel="bookmark"><?php echo $lest->title; ?></a>
                                <div class="entry-meta">
                                    <span class="entry-date">2015</span>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/retina.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_006.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_003.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/jquery_007.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/view/js/analytics.js"></script><!-- FOR DEMO ONLY -->



        <div class="sidr left" id="sidr-existing-primary"><div class="sidr-inner">

                <ul id="sidr-id-primary-menu" class="sidr-class-sf-menu sidr-class-sf-js-enabled sidr-class-sf-arrows">
                    <li><a href="">About</a></li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="#">Mega Menu</a>
                        <ol class="sidr-class-sf-mega sidr-class-links">
                            <li>
                                <span class="sidr-class-column-heading">Homepage &amp; Listings</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/index.html">Default Homepage</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/index2.html">Homepage V2</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_classic.html">Classic Listing</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Grid Listing 1</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid2.html">Grid Listing 2</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_blog.html">Blog Style Listing</a></li>
                                </ol>
                            </li>
                            <li>
                                <span class="sidr-class-column-heading">Pre-defined Pages</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/page.html">Default Single Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/404.html">404 Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/author.html">Author Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Archive &amp; Category Page</a></li>

                                    <li><a href="http://dev.theme-junkie.com/html/supernews/full_width.html">Full Width Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/search.html">Search Results</a></li>
                                </ol>
                            </li>
                            <li>
                                <span class="sidr-class-column-heading">Post Styles</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post.html">Default Single Post</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_full.html">Full Width Post</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_video.html">Post with Video</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_gallery.html">Post with Gallery</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_reviews.html">Post with Reviews</a></li>

                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post.html#comments">Comments Example</a></li>
                                </ol>
                            </li>
                        </ol><!-- .sf-mega -->
                    </li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/layout_s1_content_s2.html">Layouts</a>
                        <ul>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/layout_s1_content_s2.html">Side 1 / Content / Side 2</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/layout_content_s1_s2.html">Content / Side 1 / Side 2</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/layout_content_s2_s1.html">Content / Side 2 / Side 1</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/layout_content_s2.html">Content / Side 2</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/layout_s2_content.html">Side 2 / Content</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/shop_full.html">Shop</a>
                        <ul>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/shop_full.html">Shop (full width)</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/shop_sidebar.html">Shop (sidebar)</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/product_full.html">Product (full width)</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/product_sidebar.html">Product (sidebar)</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/cart_full.html">Shopping Cart (full width)</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/cart_sidebar.html">Shopping Cart (sidebar)</a></li>
                        </ul>
                    </li>

                    <li><a href="http://dev.theme-junkie.com/html/supernews/typography.html">Typography</a></li>
                </ul>

            </div></div><div class="sidr left" id="sidr-existing-secondary"><div class="sidr-inner">
                <ul id="sidr-id-secondary-menu" class="sidr-class-sf-menu sidr-class-sf-js-enabled sidr-class-sf-arrows">
                    <li class="sidr-class-home_item sidr-class-current_item"><a href="http://dev.theme-junkie.com/html/supernews/index.html"><i class="sidr-class-fa sidr-class-fa-home"></i> Home</a></li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="#">Features</a>
                        <ol class="sidr-class-sf-mega sidr-class-links">
                            <li>
                                <span class="sidr-class-column-heading">Homepage &amp; Listings</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/index.html">Default Homepage</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/index2.html">Homepage V2</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_classic.html">Classic Listing</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Grid Listing 1</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid2.html">Grid Listing 2</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_blog.html">Blog Style Listing</a></li>
                                </ol>
                            </li>
                            <li>
                                <span class="sidr-class-column-heading">Pre-defined Pages</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/page.html">Default Single Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/404.html">404 Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/author.html">Author Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Archive &amp; Category Page</a></li>

                                    <li><a href="http://dev.theme-junkie.com/html/supernews/full_width.html">Full Width Page</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/search.html">Search Results</a></li>
                                </ol>
                            </li>
                            <li>
                                <span class="sidr-class-column-heading">Post Styles</span>
                                <ol>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post.html">Default Single Post</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_full.html">Full Width Post</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_video.html">Post with Video</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_gallery.html">Post with Gallery</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post_reviews.html">Post with Reviews</a></li>

                                    <li><a href="http://dev.theme-junkie.com/html/supernews/post.html#comments">Comments Example</a></li>
                                </ol>
                            </li>
                        </ol><!-- .sf-mega -->
                    </li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/category.html">Mega Menu</a>
                        <div class="sidr-class-sf-mega sidr-class-posts">
                            <ol class="sidr-class-sub-cats">
                                <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Sub Category 1</a></li>
                                <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Sub Category 2</a></li>
                                <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Sub Category 3</a></li>
                                <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Sub Category 4</a></li>
                                <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Sub Category 5</a></li>
                            </ol><!-- .sub-cats -->
                            <div class="sidr-class-cat-posts">
                                <div class="sidr-class-post-list">
                                    <a class="sidr-class-clearfix" href="http://dev.theme-junkie.com/html/supernews/post.html">
                                        <img class="sidr-class-entry-thumbnail" src="<?php echo base_url(); ?>assets/view/logo.png" alt="Post Title">
                                        <h2 class="sidr-class-entry-title">Nulla enim consequat amet congue</h2>
                                        <div class="sidr-class-entry-meta">28 Aug, 2014</div>
                                    </a>
                                </div><!-- .post-list -->
                                <div class="sidr-class-post-list">
                                    <a class="sidr-class-clearfix" href="http://dev.theme-junkie.com/html/supernews/post.html">
                                        <img class="sidr-class-entry-thumbnail" src="<?php echo base_url(); ?>assets/view/logo.png" alt="Post Title">
                                        <h2 class="sidr-class-entry-title">Euismod amet leo cras et massa</h2>
                                        <div class="sidr-class-entry-meta">28 Aug, 2014</div>
                                    </a>
                                </div><!-- .post-list -->
                                <div class="sidr-class-post-list">
                                    <a class="sidr-class-clearfix" href="http://dev.theme-junkie.com/html/supernews/post.html">
                                        <img class="sidr-class-entry-thumbnail" src="<?php echo base_url(); ?>assets/view/logo.png" alt="Post Title">
                                        <h2 class="sidr-class-entry-title">Tincidunt quam enim ac a pede</h2>
                                        <div class="sidr-class-entry-meta">28 Aug, 2014</div>
                                    </a>
                                </div><!-- .post-list -->

                            </div><!-- .cat-posts -->
                        </div><!-- .sf-mega .posts-->
                    </li>
                    <li>
                        <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Business</a>
                        <ul>
                            <li>
                                <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1</a>
                                <ul>
                                    <li>
                                        <a class="sidr-class-sf-with-ul" href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.1</a>
                                        <ul>
                                            <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.1.1</a></li>
                                            <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.1.2</a></li>
                                            <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.1.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.2</a></li>
                                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 1.3</a></li>
                                </ul>
                            </li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 2</a></li>
                            <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid1.html">Sub Menu 3</a></li>
                        </ul>
                    </li>
                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_grid2.html">Travel</a></li>
                    <li><a href="http://dev.theme-junkie.com/html/supernews/listing_blog.html">Lifestyle</a></li>
                    <li><a href="http://dev.theme-junkie.com/html/supernews/category.html">Culture</a></li>
                </ul>
            </div></div></body></html>