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
<input type="text" name="title" value="<?php echo set_value('title'); ?>" required/><br/>
<textarea name="summary" required><?php echo set_value('summary'); ?> </textarea>
<select name="category">
    <?php
    $all_cat = $this->db_model->all_cat();
    foreach ($all_cat as $category){ ?>
    <option value="<?php echo $category->id; ?>">
        <?php echo $category->name; ?></option>
    <?php }?>
</select>
<input type="file" name="userfile" />
<input type="submit" value="Add News"/>
<?php echo form_close(); ?>
</div>
	</div><!--/#content.span10-->
		</div>
