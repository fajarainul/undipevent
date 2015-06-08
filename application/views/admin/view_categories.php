
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<h3>Categories</h3>
						</div>
						<div id="page_content" class="container-fluid">	
							<div class="row">
								<div id="form" class="col-md-9">
									
								</div>
								<div id="search" class="col-md-3">
									<div class="form-group">
										<input type="text" placeholder="search" class="form-control" />
									</div>	
								</div>
								<div id="message" class="col-md-12">
									<?php
										if(isset($message)){
											//cek apakah message sudah di assign
											if($message != ''){
												if($message){
													
													echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
												}
											}
										}
									?>
								</div>
								
								<div id="form_category" class="col-md-4">
									<?php
										//kalau data edit belum bernilai maka ini add baru
										if(!isset($data_edit)){
											$action = 'admin/categories/create';
										}else{
										//berarti ini edit
											$action = 'admin/categories/edit/'.$data_edit['category_id'].'';
											echo '<h2>Edit <i>'.$data_edit['category_name'].'</i></h2>';
										}
									?>
									<?php echo form_open($action); ?>
										<div class="form-group">
											<label for="category_name">Category Name</label>
											<input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name"  <?php if(isset($data_edit)){echo 'value='.$data_edit['category_name'].''; }?> />
											<div class="error"><?php echo form_error('category_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="slug">Slug</label>
											<input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"  <?php if(isset($data_edit)){echo 'value='.$data_edit['slug'].''; }?> />
											<div class="error"><?php echo form_error('slug'); ?></div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary" id="submit" id="submit" />Save</button>
										</div>
									<?php echo form_close(); ?>
								</div>
								<div id="admin_table_post" class="col-md-8">
									<table class="table table-striped table-hover col-md-12">
										<thead>
											<tr>
												<th>#</th>
												<th>Category</th>
												<th>Slug</th>
												<th>Last Update</th>
											</tr>
											
										</thead>
										<tbody>
											<?php
												
												$no =1;
												foreach($categories as $category){
													$date = date('d F Y', strtotime($category['last_update']));
													
													echo '<tr>';
													echo '<td>'.$no.'</td>';
													echo '<td><div class="item">'.$category['category_name'].'</div><span class="action"><a href='.site_url('admin/categories/edit/'.$category['category_id'].'').'>Edit</a> </span>| <span class="action_delete"> <a href="#" data-toggle="modal" data-target="#modal_delete" data-name='.$category['category_name'].' data-id='.$category['category_id'].'>Delete</a></span></td>';
													echo '<td>'.$category['slug'].'</td>';
													echo '<td>'.$date.'</td>';
													echo '</tr>';
													$no++;
												}
											?>
										</tbody>
									</table>
									<center>
									<?php
										if(empty($categories)){
													echo 'Data Category is Empty';
										}
									?>
									</center>
								</div>
							</div>
						
						</div>
					</div>
					<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title"></h4>
								</div>
								<div class="modal-body">
									<?php
										echo 'There are XX events with this category';
										echo '<br>';
										echo 'If you delete this category, those event will be set as draft<br>';
										echo 'This system will notify the Event Organizers and let them to choose a new category for their events';
									?>									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm">Delete</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
					<script>
							var name;
							var id;
					
							$('#modal_delete').on('show.bs.modal', function (event) {
								var trigger = $(event.relatedTarget); 
								name = trigger.data('name'); 
								id = trigger.data('id'); 
								var modal = $(this);
								modal.find('.modal-title').text('Delete Category  ' + name);
								
							});
							
							$('#confirm').on('click', function(event){
								var vid		= id;
								
								$.ajax({
									type:"POST",
									url : "<?php echo site_url('admin/categories/delete');?>", 
									data :{id: vid} ,
									success :function(data) {
										if (data=="oke"){
											location.reload();
										}else{
											alert('Delete failed!');
										}

									}});

								return false;		
							});
						
						$('form input').on('change', function(){
                $(this).val($.trim($(this).val()));
            	});
						
						</script>
				