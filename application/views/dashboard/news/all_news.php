<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."index.php/dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All News</a></li>
			</ul>
    <h1>All NEWS</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } ?>
<table>
    <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Summary</th>
        <th>image</th>
        <th>Categories</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    foreach($all_news as $news){?> 
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $news->title;?></td>
        <td><?php echo $news->summary;?></td>
        <td><img src="<?php echo base_url()."/upload/thumb_".$news->image;?>" alt="image" /></td>
        <td>
            <?php
            $cat_id = $this->db_model->all_cat_id($news->c_id);
            foreach ($cat_id as $cname)
            {
                echo $cname->name;
            }
            ?>
        </td>
        <td><?php echo anchor('dashboard/editnews/'.$news->id,'Edit'); ?>||<?php echo anchor('dashboard/deletenews/'.$news->id,'Delete'); ?></td>
    </tr>
        <?php $i++; }?>
</table>
</div>
	</div><!--/#content.span10-->
		</div>