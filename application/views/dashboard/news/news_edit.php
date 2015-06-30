<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Edit News</a></li>
			</ul>
<h1>Edit News</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
               
                ?>
                </div>
                <?php }
                 if(isset($error)){ echo $error;}?>
<?php
if(!empty($news_id)){
foreach ($news_id as $n)
{
    $id = $n->id;
    $title = $n->title;
    $summary = $n->summary;
    $image = $n->image;
    $cate = $n->c_id;
}
$category = explode(",",$cate);
echo form_open_multipart('dashboard/news_update'); ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<label>Title</label>
<?php echo form_error('title'); ?>
<input type="text" name="title" value="<?php echo $title;?>" />
<label>Summary</label>
<?php echo form_error('summary'); ?>
<div  class="controls" style="height:300px;">
<textarea class="cleditor" id="textarea2" rows="3" style="display: none; width: 500px; height: 297px;" name="summary" required><?php echo $summary; ?> </textarea>
<iframe frameborder="0" src="javascript:'';" style="width: 498px; height: 197px;"></iframe>
</div>
<label>Current Image</label>
<input type="hidden" name="old_img" value="<?php echo $image; ?>" />
<img src="<?php echo base_url()."/upload/thumb_".$image; ?>" alt="Image not set" />
<br>
<span class="label label-info"><b>Note :</b> Only image is allowed other files not uploaded !</span>
<label>Image</label>
<input type="file" name="userfile" />
<label>Select Categories</label>
<?php echo form_error('category[]'); ?>
<?php
                                $all_cat = $this->db_model->all_cat();
                                foreach ($all_cat as $a) {
                                if (in_array($a->id, $category)){?>
	  			<input type="checkbox" name="category[]" value="<?php echo $a->id; ?>" checked="checked"><?php echo $a->name; ?><br>
	  			<?php }else {?>
				<input type="checkbox" name="category[]" value="<?php echo $a->id; ?>" ><?php echo $a->name; ?><br>
                                <?php }}                               ?>
<br>-->
<button type="submit" class="btn btn-primary" >Update</button>
<?php echo form_close(); 
}else{
    echo '<div class="alert alert-error"> Sorry Page Note Found!</div>';
}
?>
</div>
	</div><!--/#content.span10-->
		</div>