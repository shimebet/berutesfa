<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Add Home Form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
				
                <div class="container">
    <!-- Row 1 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-1" class="control-label">Upload Image</label>
                <input type="file" name="image_1" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-2" class="control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_1" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-3" class="control-label">Upload Image</label>
                <input type="file" name="image_2" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-4" class "control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_2" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>

    <!-- Row 3 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-5" class="control-label">Upload Image</label>
                <input type="file" name="image_3" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-4" class="control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_3" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>

    <!-- Row 4 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-7" class="control-label">Upload Image</label>
                <input type="file" name="image_4" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-8" class="control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_4" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>

    <!-- Row 5 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-9" class="control-label">Upload Image</label>
                <input type="file" name="image_5" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-10" class="control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_5" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>

    <!-- Row 4 -->
    <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-11" class="control-label">Upload Image</label>
                <input type="file" name="image_4" accept="image/*">
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-sm-4">
            <div class="form-group">
                <label for="field-12" class="control-label"><b style="color: black;">School Classes</b></label>
                <input type="text" class="form-control narrow-input" name="text_input_4" value="" placeholder="Enter School Classes">
            </div>
        </div>
    </div>
</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Save');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>