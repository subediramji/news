                <!-- Sidebar #2 / Start -->
                <div id="secondary" class="widget-area widget-primary sidebar2 column" role="complementary">

                    <div class="widget widget_ads">
                        <h3 class="widget-title">Advertisement</h3>
                        <a href="http://websoftnepal.com" target="_blank"><img style="width: 310px;" src="<?php echo base_url(); ?>assets/view/images/websoft.jpg" alt="Ad Widget"></a>
                    </div><!-- .widget .widget_ads -->

                    <div class="widget widget_social clearfix">
                        <ul>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i><span><strong>5,600</strong></span><span>Followers</span></a></li>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i><span><strong>1,986</strong></span><span>Fans</span></a></li>
                            <li><a href="#" title="GooglePlus"><i class="fa fa-google-plus"></i><span><strong>1,300</strong></span><span>In Circle</span></a></li>
                            <li><a href="#" title="RSS"><i class="fa fa-rss"></i><span><strong>20,000</strong></span><span>Subscribers</span></a></li>
                        </ul>
                    </div><!-- .widget .widget_social -->

                    <div class="widget widget_newsletter">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="newsletter-container">
                            <p>Subscribe to our newsletter to receive breaking news by email.</p>
                            <form role="form">
                                <input placeholder="Enter your email..." type="text">
                                <button class="btn" type="button">Signup</button>
                            </form>
                        </div>
                    </div><!-- .widget .widget_newsletter -->

                    <div class="widget widget_tabs">

                        <!-- Tabs Nav -->
                        <ul class="tabs-nav">
                            <li class="active"><a href="#tab1" title="Popular"><i class="fa fa-star"></i></a></li>
                            <li><a href="#tab2" title="Latest"><i class="fa fa-clock-o"></i></a></li>
                            <li><a href="#tab3" title="Comments"><i class="fa fa-comments"></i></a></li>
                            <li><a href="#tab4" title="Tags"><i class="fa fa-tags"></i></a></li>
                        </ul>

                        <!-- Tabs Container -->
                        <div class="tabs-container">

                            <div style="display: block;" class="tab-content" id="tab1">
                                <ul>
                                    <?php 
                                    if(!empty($latest)){foreach ($latest as $lest) { ?>
                                    <li class="clearfix">
                                        <a href="<?php echo base_url()."view/post/".$lest->id; ?>" rel="bookmark"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$lest->image; ?>" alt="Post Title"></a>
                                        <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$lest->id; ?>" rel="bookmark"><?php echo $lest->title;  ?></a></h2>
                                        <div class="entry-meta"><?php echo $lest->time; ?></div>
                                    </li>  
                                    <?php }}?>
                                </ul>
                            </div>

<!--                            <div style="display: none;" class="tab-content" id="tab2">
                                <ul>
                                    <li class="clearfix">
                                        <a href="<?php //echo base_url()."view/post/".$lest->id; ?>" rel="bookmark"><img class="entry-thumbnail" src="<?php //echo base_url(); ?>assets/view/logo.png" alt="Post Title"></a>
                                        <div class="entry-meta"><?php //echo $lest->time; ?></div>
                                    </li>
                                   
                                </ul>
                            </div>-->

                            <div style="display: none;" class="tab-content" id="tab3">
                                <ul>
                                    <li class="clearfix">
                                        <a href=""><img class="entry-thumbnail" src="<?php echo base_url(); ?>assets/view/logo.png" alt="Author Name"></a>
                                        <a href=""><strong>ramji</strong><span>.......................</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div style="display: none;" class="tab-content" id="tab4">
                                <a href="#">WordPress</a>
                                <a href="#">Hosting</a>
                                <a href="#">Web Design</a>
                                <a href="#">Domain Name</a>
                            </div>
                        </div>

                    </div><!-- .widget .widget_tabs -->
                     <?php 
                if(!empty($advs)){foreach ($advs as $as) { // size 300*600?>
                <div class="widget widget_ads">
                     <h3 class="widget-title">Advertisement</h3>  
                    <a href="#"><img alt="" style="width: 300px;height: 300px;" src="<?php echo base_url()."/upload/".$as->image; ?>"></a>
			</div>
                <?php }}?>
                     
			       
			       
			    
                </div>
               
                <!-- Secondary / End -->

                <div class="clearfix"></div>

                <!-- Sidebar #2 / End -->

                <!-- Carousel-1 / Start -->
                
                <!-- Carousel-1 / End -->

            </main>
            <!-- Site Main / End -->