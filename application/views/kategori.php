<div id="categories">
    <div class="container">
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
                            foreach ($categories as $category) {
                                echo"<div class='item_category'><a href='" . base_url() . "index.php/website/kategori/".$category['category_id']."'>" . $category['category_name'] . "</a></div>";
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
    echo"<div class='item_month'><a href='" . base_url() . "index.php/website/date/".$i."'>" . $month[$i] . "</a></div>";
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
                    <?php foreach($event_kategori as $event){	
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
									if(empty($event_kategori)){
										echo '<center><h4>Tidak ada event pada kategori ini..</h4></center>';
									}
									?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>