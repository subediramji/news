<!-- Site Main / Start -->
<?php if(!empty($idnews)){ ?>
		<main id="main" class="site-main container" role="main" style="display:block">
			<div style="height: 900px;" id="primary" class="content-area column">
                             <div id="featured-content" class="category-box clearfix">
		        <div style="height: 27px;" class="sticky-wrapper" id="breadcrumbs-sticky-wrapper"><div style="" id="breadcrumbs">
                                <strong>You are here:</strong> <span class="home-link"><a href="<?php echo base_url(); ?>">Home</a></span> <span class="sep">→</span> <span class="category-link"><a href=""><?php echo $idnews[0]->title; ?></a></span>
		        	<span class="post-nav"><a href="" title="Previous Post"><i class="fa fa-angle-left"></i></a> <a href="" class="Next Post"><i class="fa fa-angle-right"></i></a></span>
		        </div></div> 
				<!-- Article / Start -->
				<article class="hentry post">
					<h1 class="entry-title"><?php echo $idnews[0]->title; ?></h1>
                                        <img class="entry-thumbnail" src="<?php echo base_url()."upload/".$idnews[0]->image; ?>" style="width: 100%;" alt="image">
                                        <span class="entry-date" style="color: black;"><i class="fa fa-clock-o"></i> <?php echo $idnews[0]->time; ?> </span>
					<div class="entry-content">
                                            <p><h5><?php echo $idnews[0]->summary; ?></h5></p>																		
					<div class="clearfix"></div>
				</article>
				<!-- Article / End --> 
			</div>
                                        
                                        <section class="content-block category-box clearfix">
                        <h3 class="section-title" ><a href="">Related Post</a><span class="see-all"><a href="<?php echo base_url()."view/categories/14"; ?>">More</a></span></h3>
                        <ul class="clearfix">
                            <?php foreach ($pnews as $p) {?>
                            <li style="height: 308px;">
                                <a href="<?php echo base_url()."view/post/".$p->id; ?>"><img class="entry-thumbnail" src="<?php echo base_url()."upload/thumb_".$p->image; ?>" alt=""></a>
                                <h2 class="entry-title"><a href="<?php echo base_url()."view/post/".$p->id; ?>"><?php echo $p->title; ?></a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date" style="color:#ccc;"><?php echo $p->time; ?></span>
                                    
                                </div><!-- .entry-meta -->
                                <div class="entry-summary">
                                   <?php echo $p->limit_summary; ?>
                                </div><!-- .entry-summary -->
                                <div class="more-link">
                                    <a href="<?php echo base_url()."view/post/".$p->id; ?>">More</a>
                                </div><!-- .more-link -->
                            </li>
                            <?php } ?>
                        </ul>
                                        </section></div>
                                        
<?php }else{echo 'Data not fount';} ?>
			<!-- Primary / End -->	