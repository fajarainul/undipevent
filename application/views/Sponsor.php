<div id="sponsor_list" class="page_list" style="min-height: 500px">
    <div class="container">
        <div class="row">
            <h3>Sponsor</h3>
						<?php
							$count = 0;
							foreach($sponsors as $sponsor){
								$count++;
								if($count == 1){
									echo '<div class="col-md-4">
													<ul class="nav">';
								}

								
								echo '<li><a href='. base_url() . 'index.php/website/profil_sponsor/'.$sponsor['id_sponsor'].'>'.$sponsor['nama_sponsor'].'</a></li>';

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
    $('#navbar a:eq(2)').attr('class', 'active').css("color", "#ff6600");
</script>