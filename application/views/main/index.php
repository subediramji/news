
            <main id="main" class="site-main container" role="main" style="display:block">

                <div style="height: 3079px;" id="primary" class="content-area column">

                    <!-- Featured Content / Start -->
                    <div id="featured-content" class="category-box clearfix">

                        <div id="news-ticker" class="clearfix">
                            <span class="text">Headlines</span>
                            <ul class="news-list">
                                
                                <?php foreach ($headlines as $head){ ?>
                                <li style="display: none;" class="news-item">
                                    <a href="" rel="bookmark"><?php echo $head->title; ?></a>
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
                                        <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$slid->image; ?>" width="728" height="410" alt="Post Title"></a>
                                        <h2 class="entry-title"><a href="" rel="bookmark"><?php echo $slid->title; ?></a></h2>
                                        <div class="entry-meta">
                                            <span class="entry-stars"></span>
                                            <span class="entry-date">2015</span>
                                            <span class="entry-comments"><a href=""></a></span>
                                        </div><!-- .entry-meta -->
                                        <div class="entry-summary">
                                            <?php echo $slid->summary; ?>
                                        </div><!-- .entry-summary -->
                                        <div class="more-link">
                                            <a href="">More</a>
                                        </div><!-- .more-link -->
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

                        <h3 class="section-title"><a href="">TECHNOLOGY</a><span class="see-all"><a href="">More</a></span></h3>

                        <ul class="clearfix">
                            <?php foreach ($technology as $tech) {?>
                            <li style="height: 308px;">
                                <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$tech->image; ?>" alt=""></a>
                                <h2 class="entry-title"><a href=""><?php echo $tech->title; ?></a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">2015</span>
                                    <span class="entry-comments"><a href=""></a></span>
                                </div><!-- .entry-meta -->
                                <div class="entry-summary">
                                   <?php echo $tech->summary; ?>
                                </div><!-- .entry-summary -->
                                <div class="more-link">
                                    <a href="">More</a>
                                </div><!-- .more-link -->
                            </li>
                            <?php } ?>
                        </ul>

                    </section>
                    <!-- Content Block #1 / End -->

                    <div class="content-ad">
                        <a href="http://www.websoftnepal.com"><img src="<?php echo base_url(); ?>assets/view/images/websoft.png" alt="Post Title"></a>
                    </div><!-- .content-ad -->

                    <!-- Content Block #3 / Start -->
                    <section class="content-block-3 category-box clearfix">

                        <div style="height: 671px;" class="block block-left">

                            <h3 class="section-title"><a href="">World News</a><span class="see-all"><a href="">More</a></span></h3>
                            <ul>
                                <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$worldnews[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $worldnews[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $worldnews[0]->summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++){ ?>
                                <li class="article-list clearfix">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$worldnews[$i]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $worldnews[$i]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                </li><!-- .article-list -->
                                <?php } ?>
                            </ul>

                        </div><!-- .block .block-left -->

                        <div style="height: 671px;" class="block block-right">

                            <h3 class="section-title"><a href="">Business</a><span class="see-all"><a href="http://dev.theme-junkie.com/html/supernews/category.html">More</a></span></h3>

                            <ul>                                
                                <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$business[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $business[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $business[0]->summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++) { ?>
                                <li class="article-list clearfix">
                                   <a href="http://dev.theme-junkie.com/html/supernews/post.html"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$business[$i]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $business[$i]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                </li><!-- .article-list -->
                                <?php  } ?>
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
                            <h3 class="section-title"><a href="">Travel</a><span class="see-all"><a href="">More</a></span></h3>
                            <ul>
                                <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$travel[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $travel[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                      <?php echo $travel[0]->summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++){ ?>
                               <li class="article-list">
                                    <h2 class="entry-title"><a href=""><?php echo $travel[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php } ?>
                            </ul>

                        </div><!-- .block .block-left -->

                        <div style="height: 527px;" class="block block-center">
                            <h3 class="section-title"><a href="">Lifestyle</a><span class="see-all"><a href="">More</a></span></h3>
                            <ul>
                               <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$life[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $life[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                       <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                       <?php echo $life[0]->summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++) { ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href=""><?php echo $life[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php } ?>
                            </ul>

                        </div><!-- .block .block-center -->

                        <div style="height: 527px;" class="block block-right">
                            <h3 class="section-title"><a href="">Culture</a><span class="see-all"><a href="">More</a></span></h3>
                            <ul>
                                <li class="article-first">
                                    <a href=""><img class="entry-thumbnail" src="<?php echo base_url()."upload/".$culture[0]->image; ?>" alt=""></a>
                                    <h2 class="entry-title"><a href=""><?php echo $culture[0]->title; ?></a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-date">2015</span>
                                        <span class="entry-comments"><a href=""></a></span>
                                    </div><!-- .entry-meta -->
                                    <div class="entry-summary">
                                        <?php echo $culture[0]->summary; ?>
                                    </div><!-- .entry-summary -->
                                    <div class="more-link">
                                        <a href="">more</a>
                                    </div><!-- .more-link -->
                                </li><!-- .article-first -->
                                <?php for($i=1;$i<3;$i++) { ?>
                                <li class="article-list">
                                    <h2 class="entry-title"><a href=""><?php echo $culture[$i]->title; ?></a></h2>
                                </li><!-- .article-list -->
                                <?php } ?>
                            </ul>

                        </div><!-- .block .block-right -->

                    </section>
                    <!-- Content Block #4 / End -->

                </div>
                <!-- Primary / End -->



