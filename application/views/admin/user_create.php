
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-12">
								<h3>Add User</h3>
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
									<?php $attributes=array('class'=>'form-horizontal');echo form_open('admin/user/create',$attributes); ?>
										<div class="form-group">
											<label for="username" class="col-sm-2 control-label">Username</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
											</div>
											<div class="error"><?php echo form_error('username'); ?></div>
										</div>
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">Email</label>
											<div class="col-sm-3">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
											</div>
											<div class="error"><?php echo form_error('email'); ?></div>
										</div>
										<div class="form-group">
											<label for="password" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-6">
												<input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
											</div>
											<div class="error"><?php echo form_error('password'); ?></div>
										</div>
										<div class="form-group">
											<label for="confirm" class="col-sm-2 control-label">Confirm Password</label>
											<div class="col-sm-6">
												<input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm Password" required />
											</div>
											<div class="error"><?php echo form_error('confirm'); ?></div>
										</div>
										<div class="form-group">
											<label for="level" class="col-sm-2 control-label">Level</label>
											<div class="col-sm-6">
												<select name="level" id="level" class="form-control">
													<option value="1" selected>Event Organizer</option>
													<option value="2">Sponsor</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Create</button>
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
										</div>
									<?php echo form_close(); ?>
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
				