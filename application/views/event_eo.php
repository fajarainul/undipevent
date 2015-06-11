<div id="event_eo">
    <div class="container">
        <div id="eo_name">
            <h2>DIGIT</h2>
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
$i = 1;
for ($i == 1; $i <= 8; $i++) {
    echo"<div class='item_category'><a href='" . base_url() . "index.php/website/kategori'>Kategori " . $i . "</a></div>";
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
                    <div class="col-xs-6">
                        <div class="poster_event">
                            <div class="thumbnail">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/images/sample1.jpeg" alt="sample"></a>
                            </div>
                        </div>
                        <h4><a href='"<?php echo base_url()?>"index.php/website/detail'>Nama Event</a></h4>
                        <div class="row">
                            <div class="eo">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/eo.png" /></span>
                                <span>Event Organizer</span>
                            </div>
                            <div class="date">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/calendar.png" /></span>
                                <span>Tanggal Event</span>
                            </div>
                        </div>
                        <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                            sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence... </p> <a href="#"> Read more <span class="glyphicon glyphicon-triangle-right"></span></a>
                    </div>
                    <div class="col-xs-6">
                        <div class="poster_event">
                            <div class="thumbnail">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/images/sample2.jpeg" alt="sample"></a>
                            </div>
                        </div>
                        <h4><a href='"<?php echo base_url()?>"index.php/website/detail'>Nama Event</a></h4>
                        <div class="row">
                            <div class="eo">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/eo.png" /></span>
                                <span>Event Organizer</span>
                            </div>
                            <div class="date">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/calendar.png" /></span>
                                <span>Tanggal Event</span>
                            </div>
                        </div>
                        <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                            sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence... </p> <a href="#"> Read more <span class="glyphicon glyphicon-triangle-right"></span></a>
                    </div>
                </div>
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
					<td>DIGIT HMIF Undip</td>
				</tr>
				<tr>
					<td>Sekretariat</td>
					<td class="field_2">:</td>
					<td>Gedung E lantai 3, FSM</td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td class="field_2">:</td>
					<td>08xxxxxxx</td>
				</tr>
			</table>
			<br>
			<a href="#"> Profil Selengkapnya <span class="glyphicon glyphicon-triangle-right"></span></a>
			
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
				'width': '380px'
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