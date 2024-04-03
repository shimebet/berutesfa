<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Add Parent');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/parent/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('Value Required');?>"  autofocus
                            	value="">
						</div>
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Email');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" 
                            	value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Password');?></label>
                        
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Profession');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="profession" value="">
						</div>
					</div>
                    <div class="form-group">
    <label for="field-1" class="col-sm-3 control-label"><?php echo ('Photo');?></label>
    <div class="col-sm-5">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <!-- Display a default image if no photo is selected -->
            <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                <img src="http://placehold.it/200x200" alt="...">
            </div>
            <!-- Display the selected photo (if any) -->
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px">
                <!-- Display the selected image here -->
            </div>
            <div>
                <span class="btn btn-white btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <!-- Input for uploading the photo -->
                    <input type="file" name="userfile" accept="image/*">
                </span>
                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    </div>
</div> 
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary"><?php echo ('Add Parent');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>