<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."index.php/dashboard" ?>">Home</a> 
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
    $category = $n->c_id;
}}else{
    $id = "";
    $title = "";
    $summary = "";
    $image = "";
    $category = "";
}
echo form_open_multipart('dashboard/news_update'); ?>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="text" name="title" value="<?php echo $title;?>" />
<textarea name="summary"><?php echo $summary; ?></textarea>
<input type="hidden" name="old_img" value="<?php echo $image; ?>" />
<img src="<?php echo base_url()."/upload/thumb_".$image; ?>" alt="img" />
<input type="file" name="userfile" />
<select name="category">
    <?php foreach ($all_cat as $a){ ?>
    <option value="<?php echo $a->id; ?>" <?php if(($a->id)==$category){ echo 'selected=selected';} ?>> <?php echo $a->name; ?></option>
    <?php }?>
</select>
<input type="submit" value="Update" />
<?php echo form_close(); ?>
</div>
	</div><!--/#content.span10-->
		</div>