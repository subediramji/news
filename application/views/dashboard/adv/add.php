<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
                <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
            <i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Advertisement</a></li>
    </ul>
<h1>Add NEW Advertisement</h1>
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } 
                if (isset($errors) && strlen($errors)) {
                echo '<div class="alert-error alert">';
                echo '<a href="#" class="close" data-dismiss="alert">&times;</a><p>' . $errors . '</p>';
                echo '</div>';
            }?>
<?php echo form_open_multipart('dashboard/insert_adv'); ?>
<br>

<label>Image</label>
<input type="file" name="userfile" />
<br>
<lable>Advertisement Location</lable>
<br>
<?php echo form_error('location'); ?>
<input type="checkbox" name="location[]" value="1" /><span>Top Right</span>&nbsp; &nbsp; <strong>Note :Make Sure Width is 620 px and Height 90 px For better Result</strong><br>
<input type="checkbox" name="location[]" value="2" /><span>Right Side</span>&nbsp; &nbsp; <strong>Note :Make Sure Width is 310 px and Height not more than 500 px For better Result</strong><br>
<lable>Advertisement Link</lable><br>
<input type="url" name="url" placeholder="advertisment url" /><br>
<button type="submit" class="btn btn-success" value="Add Advertisement" >Add Advertisement </button>
<?php echo form_close(); ?>
</div>
	</div><!--/#content.span10-->
		</div>