<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."index.php/dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Categories</a></li>
			</ul>
<h1>All Categories</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
<table>
    <tr>
        <th>S.No</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>
    <?php 
    $id = 1;
    foreach($all_cat as $cat) {?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $cat->name; ?></td>
        <td><?php echo anchor('dashboard/editcate/'.$cat->id,'Edit'); ?> | <?php echo anchor('dashboard/deletecat/'.$cat->id,'Delete') ?></td>
    </tr>
    <?php $id ++ ;}?>
</table>
</div>
	</div><!--/#content.span10-->
		</div>