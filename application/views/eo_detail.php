<div id="eo_list" class="page_list" style="min-height: 500px">
    <div class="container">
        <div class="row">
            <h3>
							<?php 
							if(is_array($nama_tingkat_eo)){
								echo $nama_tingkat_eo['nama_fakultas'];
							}else{
								echo $nama_tingkat_eo;
							}
							?>
						</h3>
						<?php
							$count = 0;
							foreach($data_eo as $eo){
								$count++;
								if($count == 1){
									echo '<div class="col-md-4">
													<ul class="nav">';
								}

								
								echo '<li><a href='. base_url() . 'index.php/website/event_eo/'.$eo['id_eo'].'>'.$eo['nama_eo'].'</a></li>';

								if($count == 3){
									echo '</ul>
											</div>';
								}

								if($count == 3){
									$count = 0;
								}

							}
							
							if($count!=3){
								echo '</ul>
											</div>';
							}
			
					
						?>
						
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#navbar a:eq(1)').attr('class', 'active').css("color", "#ff6600");
</script>