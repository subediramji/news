<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Categories</a></li>
			</ul>
    <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
    <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All News</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								
                                                                  <th>Categories</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                       <?php
    $i = 1;
    foreach($all_cat as $cat){?> 
    <tr>
        
        <td class="center"><?php echo $cat->name;?></td>
        <td class="center">
             <a class="btn btn-inverse" href="<?php echo base_url()."view/categories/".$cat->id; ?>">
	<i class="halflings-icon white home"></i>  
	</a>
            <a class="btn btn-info" href="<?php echo base_url()."dashboard/editcate/".$cat->id; ?>">
	<i class="halflings-icon white edit"></i>  
	</a>
            <a class="btn btn-danger" href="<?php echo base_url()."dashboard/deletenews/".$cat->id; ?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
    </tr>
        <?php $i++; }?>							
							</tr>
                                                  </tbody>
                                                </table>
                                        </div>
                                </div>
    </div>

</div>
	</div><!--/#content.span10-->
		</div>