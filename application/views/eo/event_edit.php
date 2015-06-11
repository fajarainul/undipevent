
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-12">
								<h3>Update Post</h3>
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
									<?php $attributes=array('class'=>'form-horizontal');echo  form_open_multipart('eo/event/edit/'.$data_edit['id_kegiatan'].'',$attributes); ?>
										<div class="form-group">
											<label for="event_name" class="col-sm-2 control-label">Event Name</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name" required value="<?php echo $data_edit['nama_kegiatan'];?>"/>
											</div>
											<div class="error"><?php echo form_error('event_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="category" class="col-sm-2 control-label">Category</label>
											<div class="col-sm-3">
												<select class="form-control" name="category" id="category" required />
												<?php
													foreach($categories as $category){
														if($category['category_id']==$data_edit['category_id']){
															$selected = 'selected';
														}else{
															$selected = ' ';
														}
														echo '<option value='.$category['category_id'].' '.$selected.'>'.$category['category_name'].'</option>';
													}	
												?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="date" class="col-sm-2 control-label">Date</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="date" name="date" placeholder="Date" required value="<?php echo $data_edit['tanggal_acara'];?>" />
											</div>
											<div class="error"><?php echo form_error('event_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="location" class="col-sm-2 control-label">Location</label>
											<div class="col-sm-6">
												<textarea class="form-control" id="location" name="location" placeholder="Location" required ><?php echo $data_edit['lokasi'];?></textarea>
											</div>
											<div class="error"><?php echo form_error('event_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="description" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-6">
												<textarea class="form-control" id="description" name="description" placeholder="Description" required  ><?php echo $data_edit['deskripsi_kegiatan'];?></textarea>
											</div>
											<div class="error"><?php echo form_error('event_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="image" class="col-sm-2 control-label">Image</label>
											<div class="col-sm-6">
												<div class="col-sm-9"id="input_file"><input type="text" id="upload_file" name="upload file" placeholder="No file choosen" class="form-control" readonly="disabled" value="" /></div>
                          <div class="file_upload btn btn-primary">
														<span>Browse</span>
														<input type="file" class="upload" name="image" id="image" accept="image/*" required/>
													</div>
											</div>
											<div class="error"><?php echo $error; ?></div>
										</div>
										<?php
											if($data_edit['publish']==1){
												$check = 'Checked';
											}else{
												$check = ' ';
											}
										?>
										<div class="form-group">
											<label for="publish" class="col-sm-2 control-label">Status</label>
											<div class="col-sm-6">
												<input type="checkbox" name="publish" style="margin-top:10px;" value="1" <?php echo $check;?>> Publish </input>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Update</button>
												<button type="button" class="btn btn-primary">Cancel</button>
											</div>
										</div>
									<?php echo form_close();?>
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
						
						
						$( document ).ready(function() {
							jQuery('#date').datetimepicker();	
							
							$('#date').datetimepicker({
								lang:'id',
								format:'Y-m-d H:i',
							});
							$('#date').datetimepicker({step:30});
						});
						
					</script>
