
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-12">
								<h3>Update Profile</h3>
							</div>
							<div id="create_button" class="col-md-10">
								<!--KOSONG-->
							</div>
						</div>
						
						<div id="page_content" class="container-fluid">	
							<div class="row">
								<div id="filter" class="col-md-9">
									<!--KOSONG-->
								</div>
								<div id="search" class="col-md-3">
									<!--KOSONG-->
								</div>
								
								<div id="form_create_event" class="col-md-12">
									<?php $attributes=array('class'=>'form-horizontal');echo  form_open_multipart('eo/profile/edit/',$attributes); ?>
										<div class="form-group">
											<label for="name" class="col-sm-2 control-label">Name</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?php echo $data_profile['nama_eo'];?>" />
											</div>
											<div class="error"><?php echo form_error('name'); ?></div>
										</div>
										
										<div class="form-group">
											<label for="address" class="col-sm-2 control-label">Address</label>
											<div class="col-sm-6">
												<textarea class="form-control" id="address" name="address" placeholder="Address" required ><?php echo $data_profile['alamat'];?></textarea>
											</div>
											<div class="error"><?php echo form_error('address'); ?></div>
										</div>
										<div class="form-group">
											<label for="contact" class="col-sm-2 control-label">Contact</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required value="<?php echo $data_profile['telp'];?>" />
											</div>
											<div class="error"><?php echo form_error('contact'); ?></div>
										</div>
										<div class="form-group">
											<label for="image" class="col-sm-2 control-label">Image</label>
											<div class="col-sm-6">
												<div class="col-sm-9"id="input_file"><input id="upload_file" placeholder="No file choosen" class="form-control" readonly="disabled" /></div>
                          <div class="file_upload btn btn-primary">
														<span>Choose File</span>
														<input type="file" class="upload" name="image" id="image" accept="image/*" required/>
													</div>
											</div>
											<div class="error"><?php echo $error; ?></div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Update</button>
												<button type="button" class="btn btn-primary">Cancel</button>
											</div>
										</div>
									</form>	
								</div>
								
								
							</div>
						
						</div>
					</div>
					
					<script>
						$('#image').on('change', function(){
                var file = $(this)[0].files[0];
                if(file != undefined){
                    $('#upload_file').val(file.name);
                }else{
                    $('#upload_file').val('');
                }
            });	
					</script>
				