<!-- Site Main / Start -->
<?php if(!empty($idnews)){ ?>
		<main id="main" class="site-main container" role="main" style="display:block">
			<div style="height: 900px;" id="primary" class="content-area column">
		        <div style="height: 27px;" class="sticky-wrapper" id="breadcrumbs-sticky-wrapper"><div style="" id="breadcrumbs">
                                <strong>You are here:</strong> <span class="home-link"><a href="<?php echo base_url(); ?>">Home</a></span> <span class="sep">→</span> <span class="category-link"><a href=""><?php echo $idnews[0]->title; ?></a></span>
		        	<span class="post-nav"><a href="" title="Previous Post"><i class="fa fa-angle-left"></i></a> <a href="" class="Next Post"><i class="fa fa-angle-right"></i></a></span>
		        </div></div> 
				<!-- Article / Start -->
				<article class="hentry post">

					<h1 class="entry-title"><?php echo $idnews[0]->title; ?></h1>

					<div class="entry-meta">
						<span class="entry-author"><i class="fa fa-user"></i> <a href="">ramji</a></span>
						<span class="entry-date"><i class="fa fa-clock-o"></i> <?php echo $idnews[0]->time; ?> </span>
						<span class="entry-comment"><i class="fa fa-comments"></i> <a href="#comments"></a></span>
						<span class="entry-tags"><i class="fa fa-tags"></i> <a href="#"></a>, <a href="#"></a></span>						
					</div>

                                        <img class="entry-thumbnail" src="<?php echo base_url()."upload/".$idnews[0]->image; ?>" style="width: 610px;" alt="image">

					<div class="entry-content">

                                            <p><?php echo $idnews[0]->summary; ?></p>																		

<!--			        <div class="related-posts">
			        	<h3>You might also like:</h3>
			        	<ul class="clearfix">
			        		<li><a href="http://dev.theme-junkie.com/html/supernews/post_reviews.html"><img src="SuperNews_files/1-344x193.jpg" alt=""><h2 class="entry-title">Local ice cream shop grand opening (reviews)</h2></a></li>
			        		<li><a href="http://dev.theme-junkie.com/html/supernews/post_full.html"><img src="SuperNews_files/3-344x193.jpg" alt=""><h2 class="entry-title">Sailor's ship was hit by kamikaze (full width)</h2></a></li>
			        		<li><a href="http://dev.theme-junkie.com/html/supernews/post_video.html"><img src="SuperNews_files/5-344x193.jpg" alt=""><h2 class="entry-title">Tips for your house painting project (video)</h2></a></li>
			        		<li><a href="http://dev.theme-junkie.com/html/supernews/post_gallery.html"><img src="SuperNews_files/7-344x193.jpg" alt=""><h2 class="entry-title">Big plans for Seaview Marina (gallery)</h2></a></li>					        
			        	</ul>
			        </div> .related-posts 						-->

					<div class="clearfix"></div>

				</article>
				<!-- Article / End --> 
					

			</div>
<?php }else{echo 'Data not fount';} ?>
			<!-- Primary / End -->	