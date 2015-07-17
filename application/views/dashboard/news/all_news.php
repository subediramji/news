<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All News</a></li>
			</ul>
    <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } ?>
 
    <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All News</h2>
						
					</div>
                                  
					<div class="box-content">
                                            <p id="renderingEngineFilter"></p>
<!--                                            <div class="dataTables_filter" id="DataTables_Table_0_filter">
<label>filter: 
<input type="text" aria-controls="DataTables_Table_1">
</label>
</div>-->
                                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							  <tr>
								  
								  <th>Title</th>
								  <th>Summary</th>
								  <th>Image</th>
                                                                  <th>Categories</th>
                                                                  <th>Page View</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                       <?php
    
    foreach($all_news as $news){?> 
    <tr>
        
        <td class="center"><?php echo $news->title;?></td>
        <td class="center"><?php echo $news->limit_summary;?></td>
        <td class="center"> <img src="<?php if($news->image==" "){}else{ echo base_url()."upload/thumb_".$news->image;}?>" alt="image" style="width: 150px;height: 100px;"/></td>
        <td class="center">
            <?php
            $category = explode(",",$news->c_id);
             //var_dump($category);
            
             foreach ($category as $cid)
             {
                 $cat_id = $this->db_model->all_cat_id($cid);
           
            foreach ($cat_id as $cname)
            {
                echo $cname->name."<br>";
            }
             }
            
            ?>
        </td>
        <td class="center">
            <?php $view = $this->db_model->find_page($news->id);
            if(!empty($view)){
                foreach ($view as $v)
                {
                    echo $v->count;
                }
            }else{echo '0';}?>
        </td>
        <td class="center">
             <a class="btn btn-inverse" href="<?php echo base_url()."view/post/".$news->id; ?>">
	<i class="halflings-icon white home"></i>  
	</a>
            <a class="btn btn-info" href="<?php echo base_url()."dashboard/editnews/".$news->id; ?>">
	<i class="halflings-icon white edit"></i>  
	</a>
            <a class="btn btn-danger" href="<?php echo base_url()."dashboard/deletenews/".$news->id; ?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
    </tr>
        <?php }?>							
							</tr>
                                                  </tbody>
                                                </table>
                                        </div>
                                </div>
    </div>


</div>
	</div><!--/#content.span10-->
		</div>