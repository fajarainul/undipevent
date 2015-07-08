<div id="page" class="row">
    <div id="page_title" class="col-md-12">
        <div id="title" class="col-md-2">
            <h3>All User <span class="badge">42</span></h3>
        </div>
        <div id="create_button" class="col-md-10">
            <button class="btn btn-primary" onclick="location.href = '<?php echo site_url('admin/user/create'); ?>'">Create New</button>
        </div>

    </div>

    <div id="page_content" class="container-fluid">	
        <div class="row">
            <div id="filter" class="col-md-8">
                <form class="form-inline" action="<?php echo site_url('admin/user/filter'); ?>" method="post">
                    <div class="form-group">
                        <select class="form-control" name="filter_level" id="filter_level">
                            <option value="0">Level</option>
                            <option value="1">Event Organizer</option>
                            <option value="2">Sponsor</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply</button>							
                </form>
            </div>
            <div id="search" class="col-md-4">
                    <form class="form-inline" method="POST" action="<?php echo base_url() ?>index.php/admin/c_user/search_user">
                    <div class="form-group">
                        <input type="text" class="form-control" id="date" name="key" placeholder="Type  the key..." required/>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Search">
                </form>
            </div>
            <div id="message" class="col-md-12">
                <?php
                if (isset($message)) {
                    //cek apakah message sudah di assign
                    if ($message != '') {
                        if ($message) {
                            echo '<div class="alert alert-success" role="alert">' . $message . '</div>';
                        }
                    }
                }
                ?>
            </div>
            <div id="admin_table_post" class="col-md-12">
                <table class="table table-striped table-hover col-md-12">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <!--<th>Name</th>-->
                            <th>Email</th>
                            <th>Level</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($users as $user) {
                            if ($user->level == 1) {
                                $level = 'Event Organizer';
                            } else {
                                $level = 'Sponsor';
                            }
                            echo '<tr>';
                            echo '<td>' . $no . '</td>';
                            echo '<td><div class="item">' . $user->username . '</div><span class="action"><a href=' . site_url('admin/user/edit/' . $user->id_user . '') . '>Edit</a> </span>| <span class="action_delete"> <a href="#" data-toggle="modal" data-target="#modal_delete" data-name="' . $user->username . '" data-id=' . $user->id_user . '>Delete</a></span></td>';
                            echo '<td>' . $user->email . '</td>';
                            echo '<td>' . $level . '</td>';
                            echo '</tr>';
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <center>
                    <?php
                    if (empty($users)) {
                        echo 'Data User is Empty';
                    }
                    ?>
                </center>
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
                echo 'Are you sure to delete this user?<br><br>';
                echo 'All data about this user will be deleted...';
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
        modal.find('.modal-title').text('Delete User  ' + name);

    });

    $('#confirm').on('click', function (event) {
        var vid = id;

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/user/delete'); ?>",
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
</script>