
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<h3>All Posts <span class="badge">42</span></h3>
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
								
								<div id="admin_table_post" class="col-md-12">
									<table class="table table-striped table-hover col-md-12">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Event Organizer</th>
												<th>Category</th>
												<th>Last Update</th>
											</tr>
											
										</thead>
										<tbody>
											<?php
												$no=1;
												foreach($events as $event){
													$date = date('d F Y', strtotime($event['tanggal_update']));
													echo '<tr>';
													echo '<td>'.$no.'</td>';
													echo '<td><div class="item">'.$event['nama_kegiatan'].'</div><span class="action"><a class="action-preview" data-event_name="test">Preview</a> </span>| <span class="action_delete"> <a>Delete</a></span></td>';
													echo '<td>'.$event['nama_eo'].'</td>';
													echo '<td>'.$event['category_name'].'</td>';
													echo '<td>'.$date.'</td>';
													echo '</tr>';
												}
											?>
											<tr id="tr-view-event" class="td-view-event" style="display:none">
												<td></td>
												<td colspan="4">
													<div id="view-event" class="view-event collapse hidden-xs" section="view-event" style="background:b5b5b5;">
														<div class="row">
															<div class="col-md-12"><h3>Title 2</h3></div>
														</div>
														<div class="row">
															<div class="col-md-5 image"></div>
															<div class="col-md-7">
																<div class="detail">
																	<img src="" width="32px" height="32px"/>
																	25 April 2015
																</div>
																<div class="detail">
																	<img src="" width="32px" height="32px">
																	Dekanat Lantai 3 FSM
																</div>
																<div class="detail">
																	<p>Deskripsi:</p>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar condimentum nunc, et interdum est ornare eget. Aliquam et lobortis.</p>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
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
					
				