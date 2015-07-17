<div id="content" class="span10">
   
    <div class="message_box">
            <?php
            if (isset($success) && strlen($success)) {
                echo '<div class="success">';
                echo '<p>' . $success . '</p>';
                echo '</div>';
            }

            if (isset($errors) && strlen($errors)) {
                echo '<div class="error">';
                echo '<p>' . $errors . '</p>';
                echo '</div>';
            }

            if (validation_errors()) {
                echo validation_errors('<div class="error">', '</div>');
            }
            ?>
        </div>
        <div>
            <?php
           // die($this->uri->uri_string());
            echo form_open_multipart('uploadfiles', array('id' => 'upload-file-form'));
            ?>
            <fieldset>
                <legend>Upload Multiple File(s)</legend>
                <section>
                    <strong>Note : File size width not larger then 610 pixel </strong>
                    <label>Browse a file</label>
                    <label>
                        <input type="file" name="upload_file1" class="btn btn-default" id="upload_file1" readonly="true"/>
                    </label>
                    <div id="moreImageUpload"></div>
                    <div style="clear:both;"></div>
                    <div id="moreImageUploadLink" style="display:none;margin-left: 10px;">
                        <a href="javascript:void(0);" class="btn btn-success"id="attachMore">Attach another file</a>
                    </div>
                </section>
            </fieldset>
            <footer>
                <input type="submit" name="file_upload" class="btn btn-primary" value="Upload"/>
            </footer>
           <form>
        </div>        
    
<script type="text/javascript">
    $(document).ready(function() {
        $("input[id^='upload_file']").each(function() {

            var id = parseInt(this.id.replace("upload_file", ""));
            
            $("#upload_file" + id).change(function() {
                if ($("#upload_file" + id).val() !== "") {
                    $("#moreImageUploadLink").show();
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var upload_number = 2;
        $('#attachMore').click(function() {
            //add more file
            var moreUploadTag = '';
            moreUploadTag += '<div class="element"><label for="upload_file"' + upload_number + '>Upload File ' + upload_number + '</label>';
            moreUploadTag += '<input type="file" id="upload_file' + upload_number + '" name="upload_file' + upload_number + '"/>';
            moreUploadTag += '&nbsp;<a href="javascript:del_file(' + upload_number + ')" style="cursor:pointer;" onclick="return confirm(\"Are you really want to delete ?\")">Delete ' + upload_number + '</a></div>';
            $('<dl id="delete_file' + upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow').appendTo('#moreImageUpload');
            upload_number++;
        });
    });
</script>
<script type="text/javascript">
    function del_file(eleId) {
        var ele = document.getElementById("delete_file" + eleId);
        ele.parentNode.removeChild(ele);
    }
</script>
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Media Files</a></li>
			</ul>
                               <div>
   <?php foreach ($files as $file){ ?>
                                   <img src="<?php echo base_url()."upload/". $file->file_name; ?>" class="img-rounded" alt="Image" style="width: 200px; height: 150px; margin: 5px; border: #444 solid 1px;">
                                   <a style="margin: 185px 10px 0 -210px; width: 175px; border-radius: 5px !important;" class="btn btn-danger delete_img" href="<?php echo base_url()."dashboard/delimg/".$file->file_id; ?>" id="<?php echo $file->file_id; ?>">Delete</a>
   <?php }?>
                               </div>

</div>
	</div><!--/#content.span10-->
		</div>
                <div class="imgdiv" style="background: #fff;display: none; width: 400px; height: 120px; border: #006633 solid 5px; position: fixed; top:220px; left:520px;">
                    <div style="background: #096;">  <strong>Copy this link and paste where you want this image</strong><a id="close"  class="btn btn-danger"style="margin-left: 12px;color: #fff;padding: 5px;border-radius:5px !important;">X </a><br><br> </div>
                     <textarea rows="2" style="width: 385px !important;font-size: 16px;"><img src="" /></textarea>
                </div>
              <script>
                     $(document).ready(function() {
                         $('img').click(function(){
                            var a = ($(this).attr('src'));
                            var image = a;
                            $('#content').css('opacity','.5');
                            $('.imgdiv').css('display','block');
                            $('.imgdiv').css('opacity','1');
                            $('textarea').html(image);
                           // alert(image);
                         });
                         $('#close').click(function(){
                              $('#content').css('opacity','1');
                            $('.imgdiv').css('display','none');
                            //$('.imgdiv').css('opacity','1');
                         });
                     });                    </script>