<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."index.php/dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add News</a></li>
			</ul>
<h1>Add News</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
               
                ?>
                </div>
                <?php }
                 if(isset($error)){ echo $error;}?>
<?php echo form_open_multipart('dashboard/insert_news'); ?>
<label>Title</label>
<?php echo form_error('title'); ?>
<input type="text" name="title" placeholder="Title" value="<?php echo set_value('title'); ?>" required/>
<?php echo form_error('summary'); ?>
<label>Summary</label>
<textarea name="summary" required><?php echo set_value('summary'); ?> </textarea>
<label>Select Categories</label>
<select name="category">
    <?php
    $all_cat = $this->db_model->all_cat();
    foreach ($all_cat as $category){ ?>
    <option value="<?php echo $category->id; ?>">
        <?php echo $category->name; ?></option>
    <?php }?>
</select>
<br>
<span class="label label-info"><b>Note :</b> Only image is allowed other files not uploaded !</span>
<label>Image</label>
<input type="file" name="userfile" />
<br>
<button type="submit" class="btn btn-success">Add News</button>
<?php echo form_close(); ?>
</div>
	</div><!--/#content.span10-->
		</div>