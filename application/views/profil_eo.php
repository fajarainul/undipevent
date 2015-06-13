<div id="profil_eo" style="min-height: 500px;margin-bottom:50px">
    <div class="container" style="padding-left:100px;">
        <h3>Profil</h3><br>
        <div class="row">
            <div class="col-md-2">
                <div class="thumbnail">
										<?php
											if (empty($profile_eo['foto_eo'])){
												$foto = 'default_eo.png';
											}else{
												$foto = $profile_eo['foto_eo'];
											}
										?>
                    <img src="<?php echo base_url('assets/admin/images/profile/eo/'.$foto.''); ?>" alt="<?php echo $profile_eo['nama_eo'];?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td style="border:none;" width="120px">Nama</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $profile_eo['nama_eo'];?></td>
                    </tr>
                    <tr>
                        <td style="border:none;" width="120px">Alamat</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $profile_eo['alamat'];?></td>
                    </tr>
                    <tr>
                        <td style="border:none;" width="120px">Kontak</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $profile_eo['telp'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='row'>
              <hr>
            <div class="col-md-10">
                <h4>Event terakhir :</h4><br>
                <ul class="ten_event_list" style="padding-left:0px">
									<?php
										foreach($data_last_event as $last_event){
											echo '<li class="ten_event_list_item">';
											echo 	'<div class="col-sm-1 icon_list_event"></div>';
											echo 	'<div class="col-sm-11"><a href="'.site_url('website/detail/'.$last_event['id_kegiatan'].'').'">'.$last_event['nama_kegiatan'].'</a></p></div>';
											echo '</li>';
										}
									
										if(empty($data_last_event)){
											echo 'Belum ada event';
										}
									?>
                </ul>
            </div>
        </div>
        <hr>
        <div class="back_butt">
            <div class="col-sm-1" style="margin-top:50px">
                <a href="<?php echo base_url(); ?>index.php/website/eo"><img src='<?php echo base_url(); ?>assets/images/left_arrow.png' alt="icon"></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#navbar a:eq(1)').attr('class', 'active').css("color", "#ff6600");
</script>