			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
                            <h1><strong>Welcome to News Portal Dashboard</strong></h1>
			</div>		

			<div class="row-fluid">
                            <h1></h1>

			</div>
			
			<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox yellow">
						<div class="header">Total News</div>
<!--						<span class="percent">percent</span>-->
						<div class="circleStat">
                    		<input type="text" value="<?php echo $count_news; ?>" class="whiteCircle" />
						</div>		
						
                	</div>
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	<div class="circleStatsItemBox green">
						<div class="header">Total Categories</div>
<!--						<span class="percent">percent</span>-->
						<div class="circleStat">
                    		<input type="text" value="<?php echo $count_cat; ?>" class="whiteCircle" />
						</div>
						
                	</div>
				</div>
                        </div>	
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->	
	