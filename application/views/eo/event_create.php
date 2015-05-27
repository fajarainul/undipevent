
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-12">
								<h3>Create New Post</h3>
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
									<form class="form-horizontal">
										<div class="form-group">
											<label for="event_name" class="col-sm-2 control-label">Event Name</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name" required />
											</div>
										</div>
										<div class="form-group">
											<label for="category" class="col-sm-2 control-label">Category</label>
											<div class="col-sm-3">
												<select class="form-control" name="category" id="category" required />
													<option value="0">Category</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="date" class="col-sm-2 control-label">Date</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="date" name="date" placeholder="Date" required />
											</div>
										</div>
										<div class="form-group">
											<label for="location" class="col-sm-2 control-label">Location</label>
											<div class="col-sm-6">
												<textarea class="form-control" id="location" name="location" placeholder="Location" required ></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="description" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-6">
												<textarea class="form-control" id="description" name="description" placeholder="Description" required ></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="image" class="col-sm-2 control-label">Image</label>
											<div class="col-sm-6">
												<div class="col-sm-9"id="input_file"><input id="upload_file" placeholder="No file choosen" class="form-control" readonly="disabled" /></div>
                          <div class="file_upload btn btn-primary">
														<span>Browse</span>
														<input type="file" class="upload" name="image" id="image" accept="image/*" required/>
													</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Publish</button>
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
				