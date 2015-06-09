
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-2">
								<h3>All Posts <span class="badge">42</span></h3>
							</div>
							<div id="create_button" class="col-md-10">
								<button class="btn btn-primary" onclick="location.href='<?php echo site_url('eo/event/create')?>'">Create New</button>
							</div>
							
						</div>
						
						<div id="page_content" class="container-fluid">	
							<div class="row">
								<div id="filter" class="col-md-9">
									<form class="form-inline">
										<div class="form-group">
											<select class="form-control" name="date" id="date">
												<option value=" ">All Dates</option>
											</select>
										</div>
										<div class="form-group">	
											<select class="form-control" name="categories" id="categories">
												<option value=" ">All Categories</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary">Apply</button>
																	
									</form>
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
								
								<div id="admin_table_post" class="col-md-12">
									<table class="table table-striped table-hover col-md-12">
										<thead>
											<tr>
												<th>#</th>
												<th>Event Name</th>
												<th>Category</th>
												<th>Status</th>
												<th>Last Update</th>
											</tr>
											
										</thead>
										<tbody>
											<?php
												$no=1;
												foreach($events as $event){
													if($event['publish']==1){
														$status = 'Publish';
													}else{
														$status = 'Draft';
													}
													if($event['tanggal_update']=='0000-00-00'){
														$date = '-';
													}else{
														$date = date('d F Y', strtotime($event['tanggal_update']));
													}
													
													echo '<tr>';
													echo '<td>'.$no.'</td>';
													echo '<td><div class="item">'.$event['nama_kegiatan'].'</div><span class="action"><a>Preview</a> | <a>Edit</a> </span>| <span class="action_delete"> <a>Delete</a></span></td>';
													echo '<td>'.$event['category_name'].'</td>';
													echo '<td>'.$status.'</td>';
													echo '<td>'.$date.'</td>';
													echo '</tr>';
													$no++;
												}
											?>
											
										</tbody>
									</table>
								</div>
								
								<div id="pagination" class="col-md-12">
									<nav>
										<ul class="pagination">
											<li>
												<a href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
												</a>
											</li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
												<a href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						
						</div>
					</div>
				