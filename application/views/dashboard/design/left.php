		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
                                            <li><a href="<?php echo base_url() ?>dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> News</span></a>
							<ul>
                                                            <li><a class="submenu" href="<?php echo base_url().'dashboard/all_news';?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> All News</span></a></li>
								<li><a class="submenu" href="<?php echo base_url().'dashboard/add_news';?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add New News</span></a></li>
								
							</ul>	
						</li>
                                                <li>
							<a class="dropmenu" href="#"><i class="icon-file"></i><span class="hidden-tablet"> Categories</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url().'dashboard/all_categories'; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Categories</span></a></li>
								<li><a class="submenu" href="<?php echo base_url().'dashboard/add_categories';?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add New Categories</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->					
