
					<div id="page" class="row">
						<div id="page_title" class="col-md-12">
							<div id="title" class="col-md-2">
								<h3>View Profile</h3>
							</div>
							<div id="create_button" class="col-md-10">
								
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
								<div id="profile_image" class="col-md-12">
									<?
										if(empty($data_profile['foto_sponsor'])){
											$url = 'profile/sponsor/default_sponsor.png';
										}else{
											$url = 'profile/sponsor/'.$data_profile['foto_sponsor'];
										}
									?>
									<img src="<?php echo base_url('assets/admin/images/'.$url.'')?>"/>
								</div>
								<div id="profile_detail" class="col-md-6">
									<table class="table borderless">
										<tr>
											<td class="text_right col-md-2">Name</td>
											<td><?php echo $data_profile['nama_sponsor'];?></td>
										</tr>
										<tr>
											<td class="text_right">Address</td>
											<td><?php echo $data_profile['alamat'];?></td>
										</tr>
										<tr>
											<td class="text_right">Contact</td>
											<td><?php echo $data_profile['telp'];?></td>
										</tr>
										<tr>
											<td class="text_right">Procedure</td>
											<td><?php echo $data_profile['prosedur'];?></td>
										</tr>
										<tr>
											<td class="text_right">Type</td>
											<td><?php echo $data_profile['jenis_bantuan'];?></td>
										</tr>
										<tr>
											<td class="text_right">Amount</td>
											<td><?php echo $data_profile['jumlah_bantuan'];?></td>
										</tr>
										
										<tr>
											<td colspan="2"><button class="btn btn-primary" onclick="location.href='<?php echo site_url('sponsor/profile/edit')?>'">Edit Profile</button></td>
										</tr>
									</table>	
									
								</div>
								
							</div>
						
						</div>
					</div>
				