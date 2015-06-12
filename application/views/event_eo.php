<div id="event_eo">
    <div class="container">
        <div id="eo_name">
            <h2><?php echo $profile_eo['nama_eo'];?></h2>
        </div>
        <div id="panel_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
        <div class="clear">
            <!-- menampilkan pemilihan kategori-->
            <div id="filter" class="row">
                <div class="col-sm-9">
                    <div id="filter_left">
                        <div class="filter_header">
                            <a href=""><h4>All Categories</h4></a>
                        </div>
                        <div class="filter_content">
                        	<?php
														foreach($categories as $category){
															echo"<div class='item_category'><a href='" . base_url() . "index.php/website/kategori'>".$category['category_name']."</a></div>";
														}
													?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="filter_right">
                        <div class="filter_header">
                            <a href=""><h4>All Months</h4></a>
                        </div>
                        <div class="filter_content">
                            <div class="month_area">
                                <?php
$month = array();
$month[0] = 'Jan';
$month[1] = 'Feb';
$month[2] = 'Mar';
$month[3] = 'Apr';
$month[4] = 'Mei';
$month[5] = 'Jun';
$month[6] = 'Jul';
$month[7] = 'Agu';
$month[8] = 'Sep';
$month[9] = 'Okt';
$month[10] = 'Nov';
$month[11] = 'Des';
$i = 0;
while ($i <= 11) {
    echo"<div class='item_month'><a href='" . base_url() . "index.php/website/kategori'>" . $month[$i] . "</a></div>";
    $i++;
}
                                ?>
                            </div> <!-- End month_area -->
                        </div>
                    </div> <!-- End filter_right -->
                </div>
            </div>
            <div class="clear"></div>
            <!-- menampilkan pemilihan isi-->
            <div id="content_area">
                <div class="row">
									<?php foreach($events as $event){	
										$date = date('d F Y H:m', strtotime($event['tanggal_acara']));
										$deskripsi = substr((strip_tags($event['deskripsi_kegiatan'])),0,500);
										
										echo	'<div class="col-xs-6">';
										echo		'<a href='.site_url('website/detail/'.$event['id_kegiatan'].'').'>';
										echo 			'<div class="poster_event">';
										echo 				'<div class="thumbnail">';
										echo					'<img src='.base_url().'assets/images/sample1.jpeg alt="sample">';
										echo 				'</div>';
										echo 			'</div>';
										echo		'<h4>'.$event['nama_kegiatan'].'</h4>';
										echo		'</a>';
										echo 		'<div class="row">';	
										echo			'<div class="eo">';
										echo				'<span class="attribute-icon"><img src='.base_url().'assets/images/eo.png /></span>';
										echo 				'<span>'.$event['nama_eo'].'</span>';
										echo 			'</div>';
										echo			'<div class="date">';
										echo				'<span class="attribute-icon"><img src='.base_url().'assets/images/calendar.png /></span>';
										echo        '<span>'.$date.'</span>';
										echo			'</div>';
										echo		'</div>';
										echo		'<p>'.$deskripsi.'</p>'; 
										if(strlen($deskripsi)>500){
											echo '<a href='.site_url('website/detail/'.$event['id_kegiatan'].'').'> Read more <span class="glyphicon glyphicon-triangle-right"></span></a>';
										}
										
										echo	'</div>';									
									}
		
									?>
                </div><!--here-->
                <div class="clear"></div>
            </div>
        </div>
    </div>
	
	<!-- Tombol Profil -->
	<div id="sidebar">
		<div id="sidebar_btn_left">
			<img src="<?php echo base_url(); ?>assets/images/event-eo/arrow-left.png">
		</div>
		
		<!-- Sidebar Profil -->
		<div id="sidebar_profil">
			<div class="row">
				<div class="thumbnail">
					<div class="image_profil_bg">
						<img src="<?php echo base_url(); ?>assets/images/eo/digit.png" alt="Logo"/>
					</div>
				</div>
				<h4>Profil Singkat</h4>
			</div>
			<table>
				<tr>
					<td>Nama</td>
					<td class="field_2">:</td>
					<td><?php echo $profile_eo['nama_eo'];?></td>
				</tr>
				<tr>
					<td>Sekretariat</td>
					<td class="field_2">:</td>
					<td><?php echo $profile_eo['alamat'];?></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td class="field_2">:</td>
					<td><?php echo $profile_eo['telp'];?></td>
				</tr>
			</table>
			<br>
			<a href="<?php echo site_url('website/profil_eo/'.$profile_eo['id_eo']);?>"> Profil Selengkapnya <span class="glyphicon glyphicon-triangle-right"></span></a>
			
			<div id="sidebar_btn_right">
				<img src="<?php echo base_url(); ?>assets/images/event-eo/arrow-right.png">
			</div>
		</div>	<!-- end sidebar profil -->
	</div>	<!-- end sidebar -->
	
</div>

<script>
	$(document).on('ready', function(){
		$('#sidebar_btn_left img').on('click', function(){
			$('#sidebar_profil').animate({
				'width': '290px'
			}, 500);
			$('#sidebar_btn_right').css('display', 'inline-block');
		});
		$('#sidebar_btn_right img').on('click', function(){
			$('#sidebar_profil').animate({
				'width': '0'
			}, 500);
			$('#sidebar_btn_right').css('display', 'none');
		});
	});
</script>