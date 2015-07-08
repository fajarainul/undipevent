
<div id="page" class="row">
    <div id="page_title" class="col-md-12">
        <h3><?php echo 'Search result for "' . $key . '"' ?></h3>
    </div>
    <div id="page_content" class="container-fluid">	
        <div class="row">
            <div id="filter" class="col-md-8">
                <form class="form-inline" method="POST" action="<?php echo base_url() ?>index.php/admin/c_home/filter">
                    <div class="form-group">
                        <input type="text" class="form-control" id="date" name="date" placeholder="All Dates" />
                    </div>
                    <div class="form-group">	
                        <select class="form-control" name="category" id="categories">
                            <option value="">All Categories</option>
                            <?php
                            foreach ($categories as $data)
                                echo "<option value='" . $data->category_id . "'>" . $data->category_name . "</option>";
                            ?>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Apply">
                </form>
            </div>
            <div id="search" class="col-md-4">
                    <form class="form-inline" method="POST" action="<?php echo base_url() ?>index.php/admin/c_home/search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="date" name="key" placeholder="Type  the key..." required/>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Search">
                </form>
            </div>

            <div id="admin_table_post" class="col-md-12">
                <table class="table table-striped table-hover col-md-12">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Event Organizer</th>
                            <th>Category</th>
                            <th>Last Update</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($events as $event) {
                            $date = date('d F Y', strtotime($event->tanggal_update));
                            echo '<tr>';
                            echo '<td>' . $no . '</td>';
                            echo '<td><div class="item">' . $event->nama_kegiatan . '</div><span class="action"><a class="action-preview" onclick="preview(' . $event->id_kegiatan . ')">Preview</a> </span>| <span class="action_delete"> <a href="#" data-toggle="modal" data-target="#modal_delete" data-name="' . $event->nama_kegiatan . '" data-id=' . $event->id_kegiatan . '>Delete</a></span></td>';
                            echo '<td>' . $event->nama_eo . '</td>';
                            echo '<td>' . $event->category_name . '</td>';
                            echo '<td>' . $date . '</td>';
                            echo '</tr>';
                        }
                        ?>
                        <tr id="tr-view-event" class="td-view-event" style="display:none">
                            <td></td>
                            <td colspan="4">
                                <div id="view-event" class="view-event collapse hidden-xs" section="view-event" style="background:b5b5b5;">
                                    <div class="row">
                                        <div class="col-md-12"><h3 id="preview_title"></h3></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 image">
                                            <img src="" />
                                        </div>
                                        <div class="col-md-7">
                                            <div class="detail">
                                                <img src="<?php echo base_url('assets/admin/images/calendar.png'); ?>" width="16px" height="auto"/>
                                                <span id="preview_date"></span>
                                            </div>
                                            <div class="detail">
                                                <img src="<?php echo base_url('assets/admin/images/location.png'); ?>" width="16px" height="auto">
                                                <span id="preview_location"></span>
                                            </div>
                                            <div class="detail">
                                                <p>Deskripsi:</p>
                                                <p id="preview_deskripsi"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <?php
                echo 'Are you sure to delete this Event?<br><br>This Event Organizer will get the notification';
                ?>									
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    var name;
    var id;

    $('#modal_delete').on('show.bs.modal', function (event) {
        var trigger = $(event.relatedTarget);
        name = trigger.data('name');
        id = trigger.data('id');
        var modal = $(this);
        modal.find('.modal-title').text('Delete Event  ' + name);

    });

    $('#confirm').on('click', function (event) {
        var vid = id;

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/event/delete'); ?>",
            data: {id: vid},
            success: function (data) {
                if (data == "oke") {
                    location.reload();
                } else {
                    alert('Delete failed!');
                }

            }});

        return false;
    });


    function preview(id) {
        var vid = id;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/event_detail'); ?>",
            data: {id: vid},
            dataType: 'json',
            success: function (data) {
                if (data) {
                    document.getElementById("preview_title").innerHTML = data['nama_kegiatan'];
                    document.getElementById("preview_date").innerHTML = data['tanggal_acara'];
                    document.getElementById("preview_location").innerHTML = data['lokasi'];
                    document.getElementById("preview_deskripsi").innerHTML = data['deskripsi_kegiatan'];

                    var images = "<?php echo base_url('assets/admin/images/event') . '/'; ?>" + data['foto_kegiatan'];

                    $(".image img").attr('src', images);
                }

            }});
    }

    $(document).ready(function () {
        jQuery('#date').datetimepicker();
        $('#date').datetimepicker({
            lang: 'id',
            format: 'Y-m-d H:i:00',
        });
        $('#date').datetimepicker({step: 30});
    });
</script>

