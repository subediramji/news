
            <main id="main" class="site-main container" role="main" style="display:block">

                <div style="height: 3079px;" id="primary" class="content-area column">
                    <!-- Featured Content / Start -->
                    <div id="featured-content" class="category-box clearfix">
                        <div id="news-ticker" class="clearfix">
                            <span class="text section-title">प्रमुख समाचार</span>
                            <ul class="news-list">
                                <?php foreach ($headlines as $head){ ?>
                                <li style="display: none;" class="news-item">
                                    <a href="<?php echo base_url()."view/post/".$head->id; ?>" rel="bookmark"><?php echo $head->title; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div><!-- .news-ticker -->
                        <div data-jcarouselautoscroll="true" data-jcarousel="true" id="carousel-0" class="jcarousel">
                            <ul style="left: -1456px; top: 0px;">
                                <!-- slide #1 -->
                                <?php foreach ($slider as $slid) { ?>
                                <li>
                                    <article class="hentry clearfix">
                                        <a href="<?php echo base_url()."view/post/".$slid->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$slid->image; ?>" alt="image"></a>
                                        <div style="background-color: rgba(0,0,0,0.7); z-index: 5000;margin-top: -90px;">
                                        <h2 class="entry-title">
                                            <a href="<?php echo base_url()."view/post/".$slid->id; ?>" rel="bookmark" style="color: #fff;"><?php echo $slid->title; ?></a></h2>
                                        <div class="entry-meta">
                                            <span class="entry-date"><?php echo $slid->time; ?></span>
                                        </div><!-- .entry-meta -->
                                        <div class="entry-summary">
                                            <a href="<?php echo base_url()."view/post/".$slid->id; ?>" style="color: #fff;font-size: 120%;">
                                            <?php echo $slid->limit_summary; ?>
                                          </a>
                                        </div><!-- .entry-summary -->
                                        </div>
                                    </article><!-- .hentry -->
                                </li>
                                <?php } ?>
                                </ul>
                            <p data-jcarouselpagination="true" class="jcarousel-pagination-0"><a class="" href="#1">1</a><a class="active" href="#2">2</a><a class="" href="#3">3</a></p>
                            <a data-jcarouselcontrol="true" href="#" class="jcarousel-control-prev"><i class="fa fa-chevron-left"></i></a>
                            <a data-jcarouselcontrol="true" href="#" class="jcarousel-control-next"><i class="fa fa-chevron-right"></i></a>
                        </div><!-- #carousel-0 -->
                    </div>
                    <!-- Featured Content / End -->
                    <!-- Content Block #1 / Start -->
                    <section class="content-block-1 category-box clearfix">
                        <h3 class="section-title" ><a href="<?php echo base_url()."view/categories/14";?>">विज्ञान प्रविधि</a><span class="see-all"><a href="<?php echo base_url()."view/categories/14"; ?>">More</a></span></h3>
                        <ul class="clearfix">
                            <?php foreach ($technology as $tech) {?>
                            <li style="height: 308px;">
                                <a href="<?php echo base_url()."view/post/".$tech->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$tech->image; ?>" alt=""></a>
                                <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$tech->id; ?>"><?php echo $tech->title; ?></a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date" style="color:#ccc;"><?php echo $tech->time; ?></span>
                                    
                                </div><!-- .entry-meta -->
                                <div class="entry-summary">
                                   <?php echo $tech->limit_summary; ?>
                                </div><!-- .entry-summary -->
                                <div class="more-link">
                                    <a href="<?php echo base_url()."view/post/".$tech->id; ?>">More</a>
                                </div><!-- .more-link -->
                            </li>
                            <?php } ?>
                        </ul>
                    </section>
                    <!-- Content Block #1 / End -->
                    <div class="content-ad">
                        <a href="http://www.websoftnepal.com"><img src="<?php echo base_url(); ?>assets/view/images/websoft.jpg" alt="image"></a>
                    </div><!-- .content-ad -->
                    <!-- Content Block #3 / Start -->
                    <section class="content-block-3 category-box clearfix">
                        <div style="height: 671px;" class="block block-left">
                            <h3 class="section-title"><a href="<?php echo base_url()."view/categories/18"; ?>">अन्तर्राष्ट्रिय</a><span class="see-all"><a href="<?php echo base_url()."view/categories/18"; ?>">More</a></span></h3>
                            <ul>
                                <?php if(!empty($worldnews)){ ?>
                                <li class="article-first">
                                    <a href="<?php echo base_url()."view/post/".$worldnews[0]->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$worldnews[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$worldnews[0]->id; ?>"><?php echo $worldnews[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo $worldnews[0]->time; ?></span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $worldnews[0]->limit_summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="<?php echo base_url()."view/post/".$worldnews[0]->id; ?>">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++){
                                    if(!empty($worldnews[$i])){?>
                                <li class="article-list clearfix">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$worldnews[$i]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $worldnews[$i]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo $worldnews[$i]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$worldnews[$i]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                </li><!-- .article-list -->
                                <?php }}} ?>
                            </ul>
                        </div><!-- .block .block-left -->
                        <div style="height: 671px;" class="block block-right">
                            <h3 class="section-title"><a href="<?php echo base_url()."view/categories/19"; ?>">अर्थ</a><span class="see-all"><a href="<?php echo base_url()."view/categories/19"; ?>">More</a></span></h3>
                            <ul>            
                                <?php if(!empty($business)){ ?>
                                <li class="article-first">
                                    <a href="<?php echo base_url()."view/post/".$business[0]->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$business[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $business[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date"><?php echo $business[0]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$business[0]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $business[0]->limit_summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="<?php echo base_url()."view/post/".$business[0]->id; ?>">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php 
                                for($i=1;$i<3;$i++) {
                                    if(!empty($business[$i])){ ?>
                                <li class="article-list clearfix">
                                   <a href="<?php echo base_url()."view/post/".$business[$i]->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$business[$i]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$business[$i]->id; ?>"><?php echo $business[$i]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo $business[$i]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$business[$i]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                </li><!-- .article-list -->
                                <?php  }} }?>
                                <!-- .article-list -->
                            </ul>
                        </div><!-- .block .block-right -->
                    </section>
                    <!-- Content Block #3 / End -->
                    <div class="content-ad">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/view/images/websoft.jpg" alt=""></a>
                    </div><!-- .content-ad -->
                    <!-- Content Block #4 / Start -->
                    <section class="content-block-4 category-box clearfix">
                        <div style="height: 527px;" class="block block-left">
                            <h3 class="section-title"><a href="<?php echo base_url()."view/categories/20"; ?>">राजनीति</a><span class="see-all"><a href="<?php echo base_url()."view/categories/20"; ?>">More</a></span></h3>
                            <ul>
                                <?php if(!empty($travel)) { ?>
                                <li class="article-first">
                                    <a href="<?php echo base_url()."view/post/".$travel[0]->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$travel[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $travel[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo $travel[0]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$travel[0]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                      <?php echo $travel[0]->limit_summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="<?php echo base_url()."view/post/".$travel[0]->id; ?>">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++){
                                     if(!empty($business[$i])){?>
                               <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$travel[$i]->id; ?>"><?php echo $travel[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php } } }?>
                            </ul>
                        </div><!-- .block .block-left -->
                        <div style="height: 527px;" class="block block-center">
                            <h3 class="section-title"><a href="<?php echo base_url()."view/categories/21"; ?>">खेलकुद</a><span class="see-all"><a href="<?php echo base_url()."view/categories/21"; ?>">More</a></span></h3>
                            <ul>
                                <?php  if(!empty($life)){ ?>
                               <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$life[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$life[0]->id; ?>"><?php echo $life[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                       <span class="entry-date"><?php echo $life[0]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$life[0]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $life[0]->limit_summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="<?php echo base_url()."view/post/".$life[0]->id; ?>">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++) {
                                     if(!empty($business[$i])){
                                 ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$life[$i]->id; ?>"><?php echo $life[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php }}} ?>
                            </ul>
                        </div><!-- .block .block-center -->
                        <div style="height: 527px;" class="block block-right">
                            <h3 class="section-title"><a href="<?php echo base_url()."view/categories/22"; ?>">साहित्य/ कला</a><span class="see-all"><a href="<?php echo base_url()."view/categories/22"; ?>">More</a></span></h3>
                            <ul>
                                <?php  if(!empty($culture)){ ?>
                                <li class="article-first">
                                    <a href="<?php echo base_url()."view/post/".$culture[0]->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$culture[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$culture[0]->id; ?>"><?php echo $culture[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date"><?php echo $culture[0]->time; ?></span>
                                        <span class="entry-comments"><a href="<?php echo base_url()."view/post/".$culture[0]->id; ?>"></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                        <?php echo $culture[0]->limit_summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="<?php echo base_url()."view/post/".$culture[0]->id; ?>">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php
                                for($i=1;$i<3;$i++) {
                                    if(!empty($culture[$i])) {?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$culture[$i]->id; ?>"><?php echo $culture[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php } } }?>
                            </ul>
                        </div><!-- .block .block-right -->
                    </section>
                    <!-- Content Block #4 / End -->
                </div>
                <!-- Primary / End -->