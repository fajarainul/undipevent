
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
								<?php
									//kalau data edit belum bernilai maka ini add baru
									if(!isset($data_edit)){
										$action = 'admin/c_category/create';
									}else{
									//berarti ini edit
										$action = 'admin/c_category/edit/'.$data_edit['category_id'].'';
									}
								?>
								<div id="form_category" class="col-md-4">
									<?php echo form_open($action); ?>
										<div class="form-group">
											<label for="category_name">Category Name</label>
											<input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name" required <?php if(isset($data_edit)){echo 'value='.$data_edit['category_name'].''; }?> />
											<div class="error"><?php echo form_error('category_name'); ?></div>
										</div>
										<div class="form-group">
											<label for="slug">Slug</label>
											<input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" required <?php if(isset($data_edit)){echo 'value='.$data_edit['slug'].''; }?> />
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
													echo '<td><div class="item">'.$category['category_name'].'</div><span class="action"><a href='.site_url('admin/categories/edit/'.$category['category_id'].'').'>Edit</a> </span>| <span class="action_delete"> <a>Delete</a></span></td>';
													echo '<td>'.$category['slug'].'</td>';
													echo '<td>'.$date.'</td>';
													
													$no++;
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
					<script>
							$('form input').on('change', function(){
                $(this).val($.trim($(this).val()));
            	});
						</script>
				