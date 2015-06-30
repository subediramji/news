<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url() . "dashboard" ?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Add News</a></li>
    </ul>
    <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } ?>

    <?php echo form_open_multipart('dashboard/insert_news'); ?>
    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content" style="display: block;">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">News Title</label>
                            <div class="controls">
                                <?php echo form_error('title'); ?>
                                <input type="text" class="span6 typeahead" name="title" value="<?php echo set_value('title'); ?>" required/>

                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="textarea2">Content Area</label>
                            <?php echo form_error('summary'); ?>
                            <div  class="controls" style="height:300px;">


                                <textarea class="cleditor" id="textarea2" rows="3" style="display: none; width: 500px; height: 297px;" name="summary" required><?php echo set_value('summary'); ?> </textarea>

                                <iframe frameborder="0" src="javascript:'';" style="width: 498px; height: 197px;"></iframe>

                            </div>
                        </div>

                        <div class="control-group cate">
                            <label class="control-label" for="selectError1">Select Category</label>
                                <?php echo form_error('category[]'); ?>
                            <div data-spy="scroll" data-offset="2" class="controls">
                                <?php
                                $all_cat = $this->db_model->all_cat();
                                foreach ($all_cat as $category) {
                                    ?>
                                <input type="checkbox" name="category[]" value="<?php echo $category->id; ?>"/>
                                    <?php echo $category->name; ?> <br>
                                <?php } ?>

                            </div>
                        </div>

                        <input type="file" name="userfile" />
                        <div class="form-actions">
                            <input type="submit" class="btn btn-primary" value="Add News"/>

                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div>
</div>
</div><!--/#content.span10-->
</div>

