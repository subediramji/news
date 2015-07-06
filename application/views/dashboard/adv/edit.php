<div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Edit Advertisement</a></li>
			</ul>
<h1>Edit Categories</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } 

if(!empty($adv_id)){
foreach ($adv_id as $a)
{
    $id = $a->id;
    $image = $a->image;
    $loc = $a->location;
    }
    $location = explode(',', $loc);
}
echo form_open_multipart('dashboard/update_adv'); ?>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<label>Image</label>
<input type="hidden" name="image" value="<?php echo $image ?>" />
<img src="<?php echo base_url()."upload/thumb_".$image; ?>" />
<br>
<label>Change Image</label>
<input type="file" name="userfile" /><br>
<?php if(in_array('1', $location)){ ?>
<input type="checkbox" name="location[]" value="1" checked /><span>Top Right</span><br>
<?php }else{ ?><input type="checkbox" name="location[]" value="1" /><span>Top Right</span><br> <?php } ?>
<?php if(in_array('2', $location)){ ?>
<input type="checkbox" name="location[]" value="2" checked /><span>Side Right</span><br>
<?php }else{ ?><input type="checkbox" name="location[]" value="2" /><span>Side Right</span><br> <?php } ?>
<button type="submit" class="btn btn-primary" >Update</button>
<?php echo form_close(); ?> 
</div>
	</div><!--/#content.span10-->
		</div>