<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard/home" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Edit Categories</a></li>
			</ul>
<h1>Edit Categories</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } 

if(!empty($cat_id)){
foreach ($cat_id as $a)
{
    $id = $a->id;
    $name = $a->name;
    }
}else
{
    $id = "";
    $name = "";
}
echo form_open('dashboard/update_cat'); ?>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<label>Categories Name</label>
<?php echo form_error('title'); ?>
<input type="text" name="title" value="<?php echo $name; ?>" />
<br>
<button type="submit" class="btn btn-primary" >Update</button>
<?php echo form_close(); ?> 
</div>
	</div><!--/#content.span10-->
		</div>