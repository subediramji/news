<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."index.php/dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Categories</a></li>
			</ul>
<h1>Add NEW Categories</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
<?php echo form_open('dashboard/insert_categories'); ?>
<input type="text" name="categories_name" />
<input type="submit" value="Add Category" />
<?php echo form_close(); ?>
</div>
	</div><!--/#content.span10-->
		</div>