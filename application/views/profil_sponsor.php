<div id="profil_eo" style="min-height: 500px;margin-bottom:50px">
    <div class="container" style="padding-left:100px;">
        <h3>Profil Sponsor</h3><br>
        <div class="row">
            <div class="col-md-2">
                <div class="thumbnail">
                    <?php
											if (empty($sponsor['foto_sponsor'])){
												$foto = 'default_sponsor.png';
											}else{
												$foto = $sponsor['foto_sponsor'];
											}
										?>
                    <img src="<?php echo base_url('assets/admin/images/profile/sponsor/'.$foto.''); ?>" alt="<?php echo $sponsor['nama_sponsor'];?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <tr>
                        <td style="border:none;" width="120px">Nama</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['nama_sponsor'];?></td>
                    </tr>
                    <tr>
                        <td style="border:none;" width="120px">Alamat</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['alamat'];?></td>
                    </tr>
                    <tr>
                        <td style="border:none;" width="120px">Kontak</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['telp'];?></td>
                    </tr>
										<tr>
                        <td style="border:none;" width="120px">Prosedur </td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['prosedur'];?></td>
                    </tr>
										<tr>
                        <td style="border:none;" width="120px">Jenis</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['jenis_bantuan'];?></td>
                    </tr>
										<tr>
                        <td style="border:none;" width="120px">Jumlah</td><td style="border:none;">:&nbsp;&nbsp;</td><td style="border:none;"><?php echo $sponsor['jumlah_bantuan'];?></td>
                    </tr>
                </table>
              
            </div>
        </div>
        <div class="back_butt">
            <div class="col-sm-1" style="margin-top:50px">
                <a href="<?php echo base_url(); ?>index.php/website/sponsor"><img src='<?php echo base_url(); ?>assets/images/left_arrow.png' alt="icon"></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#navbar a:eq(2)').attr('class', 'active').css("color", "#ff6600");
</script>