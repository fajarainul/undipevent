<div id="eo_list" class="page_list" style="min-height: 500px">
    <div class="row">
       <h3></h3>
			<?php
				$undip = false;
				$count = 0;
				foreach($data_faculty as $faculty){
					$count++;
					if($count == 1){
						echo '<div class="col-md-4">
										<ul class="nav">';
					}
					
					if(!$undip){
						echo '<li><a href='. base_url() . 'index.php/website/eo_detail/0>Universitas Diponegoro</a></li>';
						echo '<li><a href='. base_url() . 'index.php/website/eo_detail/'.$faculty['id_fakultas'].'>'.$faculty['nama_fakultas'].'</a></li>';
						$count = 2;
						$undip = true;
					}else{
						echo '<li><a href='. base_url() . 'index.php/website/eo_detail/'.$faculty['id_fakultas'].'>'.$faculty['nama_fakultas'].'</a></li>';
					}
					
					if($count == 3){
						echo '</ul>
        				</div>';
					}
					
					if($count == 3){
						$count = 0;
					}
					
				}
			
			?>
        
    </div>
</div>

<script type="text/javascript">
    $('#navbar a:eq(1)').attr('class', 'active').css("color", "#ff6600");
</script>