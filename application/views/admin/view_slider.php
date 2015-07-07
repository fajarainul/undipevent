<script>
    $("#add_slider_modal").on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);  // Button that triggered the modal
        $(this).find('.modal-title').text(titleData);
    });
</script>
<div id="page" class="row">
    <div id="page_title" class="col-md-12">
        <h3>Slider</h3>
    </div>
    <div id="page_content" class="container-fluid">	

        <div class="row">
            <div id="duration" class="col-md-10">
                <?php
                if (isset($infos)) {
                    echo '<div class="alert alert-success" role="alert"><strong>' . $infos . '</strong></div>';
                } else if (isset($errors)) {
                    echo '<div class="alert alert-danger" role="alert"><strong>' . $errors . '</strong></div>';
                }
                ?>
                <button class="btn btn-primary" type='button' data-toggle='modal' data-target='#add_slider_modal'>Add Picture</button>
                
            </div>
            <div style="clear:both"></div>
            <div id="search" class="col-sm-12">
                <!--<form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="slide_duration" placeholder="duration">
                        <label for="slideduration">Slide Duration</label>
                    </div>
                </form>-->
            </div>
            <div class="col-sm-12">
                <!--<p><i><small>Pastikan file gambar bertipe JPEG,PNG,JPG<br>
                            Ukuran maksimal gambar 2 MB <br>
                            Dimensi minimal .....</small></i>
                </p>-->
            </div>
        </div>
        <div class="row">
            <div id="slider_preview" style="margin-bottom: 50px" class="col-md-10">
                <?php foreach ($slider as $row) { ?>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <form action="<?php echo base_url() ?>index.php/admin/c_slider/delete" method="POST"/>
                            <input  type="hidden" name="name" value="<?php echo $row->name; ?>"/>
                            <input  type="hidden" name="id_picture" value="<?php echo $row->id_picture; ?>"/>
                            <input class="close_corner btn" type="submit" value="" name="submit"/>
                            </form>
                            <img class='col-sm-12' src="<?php echo base_url() . $row->url; ?>">
                            <center><p><?php echo $row->name; ?></p></center>

                        </div>
                    </div>
                <?php } ?>
            </div>  
        </div>
        <!-- MODAL ADD SLIDER-->
        <div id="add_slider_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>index.php/admin/c_slider/create"/>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Picture</h4>
                    </div>
                    <div class="modal-body">
                        <input  type="file" class="upload" name="slider" id="slider" />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_penerimaan" class="btn btn-primary"/>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>
</div>
</div>
