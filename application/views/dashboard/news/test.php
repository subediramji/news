  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.js" datatables=""></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<style>
          #myFilter{float: left; margin: 0px 25px}
          #example_length{float: left; margin: -1px;}
          </style>
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
 var table;
    $(document).ready(function () {
        table = $('#example').dataTable({
            "dom": "l<'#myFilter'>frtip"
        });
        var myFilter = '<select id="mySelect">'
          + '<option value="*">Select Category</option>'
         <?php foreach ($all_cat as $cat){ ?>
            + '<option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>' <?php
         } ?>         
          + '</select>';
        $("#myFilter").html(myFilter);
        table.fnDraw();        
    });
    $.fn.dataTable.ext.search.push(
        function (settings, data) { 
            var statusData = data[6] || "";
            var filterVal = $("#mySelect").val();
            if(filterVal != "*")
            {
                if(statusData == filterVal)
                    return true;
                else
                    return false;
            }
            else
                return true;
        });

    $("#mainContainer").on("change", "#mySelect", function () {
        table.fnDraw();
    });

});//]]>  

</script>
    <div id="content" class="span10">
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
                                        <a href="<?php echo base_url()."dashboard" ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All News</a></li>
			</ul>
    <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); 
                ?>
                </div>
                <?php } ?> 
    <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All News</h2>
					</div>
					<div class="box-content">
  <div id="mainContainer">
    <table aria-describedby="example_info" role="grid" class="dataTable table table-striped table-bordered" id="example">
        <thead>
            <tr role="row">
                <th aria-sort="ascending" aria-label="Title: activate to sort column ascending" style="width: 175px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting_asc">Title</th>
                <th aria-label="Summary: activate to sort column ascending" style="width: 280px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Summary</th>
                <th aria-label="Image: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Image</th>
                <th style="display:none" aria-label="Statuss: activate to sort column ascending" style="width: 0px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting"></th>
                <th style="display:none" aria-label="Statusss: activate to sort column ascending" style="width: 0px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting"></th>
                <th aria-label="Page View: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Page View</th>
                <th aria-label="Categories: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Categories</th>                
                <th aria-label="Actions: activate to sort column ascending" style="width: 180px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" class="sorting">Actions</th>
            </tr>
            </thead>     
            <tbody>                
             <?php
    foreach($all_news as $news){?> 
                <tr role="row"  >
        <td style="" class="sorting_1"><?php echo $news->title;?></td>
        <td style="" ><?php echo $news->limit_summary;?></td>
        <td style="" > <img src="<?php if($news->image==" "){}else{ echo base_url()."upload/thumb_".$news->image;}?>" alt="image" style="width: 75px;height: 50px;" /></td>
        <td style="display:none"></td>
        <td style="display:none"></td>
        <td style="">
            <?php $view = $this->db_model->find_page($news->id);
            if(!empty($view)){
                foreach ($view as $v)
                {
                    echo $v->count;
                }
            }else{echo '0';}?>
        </td>
        <td >
            <?php
            $category = explode(",",$news->c_id);
             //var_dump($category);
             foreach ($category as $cid)
             {
                 $cat_id = $this->db_model->all_cat_id($cid);
            foreach ($cat_id as $cname)
            {
                echo $cname->name."<br>";
            }
             }
            ?>
        </td>
        <td >
             <a class="btn btn-inverse" href="<?php echo base_url()."view/post/".$news->id; ?>">
	<i class="halflings-icon white home"></i>  
	</a>
            <a class="btn btn-info" href="<?php echo base_url()."dashboard/editnews/".$news->id; ?>">
	<i class="halflings-icon white edit"></i>  
	</a>
            <a class="btn btn-danger" href="<?php echo base_url()."dashboard/deletenews/".$news->id; ?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
    </tr>
        <?php }?>
             <tr role="row" style="display:none">
                    <td class="sorting_1"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
             </tbody></table>
  </div>
</div>
</div>
    </div>
    </div>
	</div><!--/#content.span10-->
		</div>