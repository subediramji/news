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
								
                                                                  <th>Image</th>
								  <th>Location</th>
                                                                  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                       <?php
   // $i = 1;
    foreach($adv as $ad){?> 
    <tr>
        
        <td class="center"><img src="<?php echo base_url()."upload/thumb_".$ad->image;?>" /></td>
        <td class="center"><?php $location = explode(",",$ad->location);
        if(in_array("1",$location)){echo "Top right <br>";}if(in_array("2", $location)){ echo "Side right <br>";} ?></td>
        <td class="center">
             <a class="btn btn-inverse" href="<?php //echo base_url()."view/categories/".$cat->id; ?>">
	<i class="halflings-icon white home"></i>  
	</a>
            <a class="btn btn-info" href="<?php //echo base_url()."dashboard/edit_adv/".$ad->id; ?>">
	<i class="halflings-icon white edit"></i>  
	</a>
            <a class="btn btn-danger" href="<?php echo base_url()."dashboard/delete_adv/".$ad->id; ?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
    </tr>
        <?php  }?>							
							</tr>
                                                  </tbody>
                                                </table>
                                        </div>
                                </div>
    </div>

</div>
	</div><!--/#content.span10-->
		</div>