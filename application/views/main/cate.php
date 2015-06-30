		<!-- Site Main / Start -->
		<main id="main" class="site-main container" role="main" style="display:block">

			<div style="height: 3022px;" id="primary" class="content-area column">

				<!-- Featured Content / Start -->
				<div id="featured-content" class="category-box clearfix">

					 <div id="news-ticker" class="clearfix">
                            <span class="text">प्रमुख समाचार</span>
                            <ul class="news-list">
                                
                                <?php foreach ($headlines as $head){ ?>
                                <li style="display: none;" class="news-item">
                                    <a href="<?php echo base_url()."view/post/".$head->id; ?>" rel="bookmark"><?php echo $head->title; ?></a>
                                </li>
                                <?php } ?>
                            </ul>

                        </div><!-- .news-ticker -->

				</div>
				<!-- Featured Content / End -->

				<!-- Content / Start -->
	            <div id="content" class="content-loop category-box grid grid2">

	                <h3 class="section-title"><strong><a href="">Categories</a> - <a href=""><?php echo $idcat[0]->name; ?></a></strong></h3>
<?php foreach ($idcate as $cate) {?>
	                <article style="height: 223px;" id="post-1" class="hentry post">
                            <a href="<?php echo base_url()."view/post/".$cate->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$cate->image; ?>" alt="image"></a>
	                    <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$cate->id; ?>"><?php echo $cate->title; ?></a></h2>
						<div class="entry-meta">
							<span class="entry-stars"></span>				
							<span class="entry-date"><?php echo $cate->time; ?></span>
							<span class="entry-comments"><a href="<?php echo base_url()."view/post/".$cate->id; ?>"></a></span>
						</div><!-- .entry-meta -->
	                    <div class="entry-summary">
	                       <?php echo $cate->limit_summary; ?>
	                    </div>
		                <div class="more-link">
		                    <a href="<?php echo base_url()."view/post/".$cate->id; ?>">more</a>
		                </div><!-- .more-link -->	 	                    
	                </article>
<?php } ?>
	                <div class="clearfix"></div>

<!--	                <nav class="pagination">
	                     <a class="page-numbers prev" href="#">Prev</a>                    
	                    <a class="page-numbers current" href="">1</a>
	                    <a class="page-numbers" href="#">2</a>
	                    <a class="page-numbers" href="#">3</a>
	                    <span class="page-numbers dots">…</span>     
	                    <a class="page-numbers" href="#">5</a>
	                    <a class="page-numbers next" href="#">Next</a>                  
	                </nav>                 

	                <div class="clearfix"></div>-->

	            </div>
	            <!-- Content / End -->

			</div>
			<!-- Primary / End -->

