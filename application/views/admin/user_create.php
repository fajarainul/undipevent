
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
											<label for="tingkat" class="col-sm-2 control-label">Scope</label>
											<div class="col-sm-6">
												<select name="tingkat" id="tingkat" class="form-control">
													<?
														foreach($data_tingkat as $tingkat){
															echo '<option value='.$tingkat['id_tingkat'].'>'.$tingkat['nama_tingkat'].'</option>';
														}
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="fakultas" class="col-sm-2 control-label">Faculty</label>
											<div class="col-sm-6">
												<select name="fakultas" id="fakultas" class="form-control">
													<?
														foreach($data_fakultas as $fakultas){
															echo '<option value='.$fakultas['id_fakultas'].'>'.$fakultas['nama_fakultas'].'</option>';
														}
													?>
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
						$(document).ready(function() {
							var $fakultas = $('#fakultas');
							var $tingkat = $('#tingkat');
							
							if($('#level').val() != 1){
								$tingkat.prop('disabled', true);
								$fakultas.prop('disabled', true);
   							// $element.attr('disabled', true); 
							}else{
								$tingkat.prop('disabled', false);
							}
							
							if($('#tingkat').val() == 1){
								$fakultas.prop('disabled', true);
   							// $element.attr('disabled', true); 
							}
							
							
						});
						
						$('#level').on('change',function(){
							var $fakultas = $('#fakultas');
							var $tingkat = $('#tingkat');
							
							if($('#level').val() != 1){
								$tingkat.prop('disabled', true);
								$fakultas.prop('disabled', true);	
   							// $element.attr('disabled', true); 
							}else{
								$tingkat.prop('disabled', false);
								if($('#tingkat').val() == 2){
									$fakultas.prop('disabled', false);
								}
							}	
						});
						
						$('#tingkat').on('change',function(){
							var $fakultas = $('#fakultas');
							if($('#tingkat').val() == 1){
								$fakultas.prop('disabled', true);
   							// $element.attr('disabled', true); 
							}else{
								$fakultas.prop('disabled', false);
							}	
						});
						
						$('form input').on('change', function(){
                $(this).val($.trim($(this).val()));
            	});
						
					</script>		
				
				