<div id="event-detail">
            <div class="container">
                <!-- Kiri -->
                <div class="col-md-9">
                    <div class="event-name">
                        <h2>Nama Event</h2>
                    </div>
                    <div id="event-attributes">
                        <div class="row">
                            <div class="col-sm-3">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/eo.png" /></span> <span>Event Organizer</span>
                            </div>
                            <div class="col-sm-3">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/calendar.png" /></span> <span>Tanggal Event</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="attribute-icon"><img src="<?php echo base_url()?>assets/images/location.png" /></span> <span>Jl. Prof. Soedarto Gedung E lantai 3 FSM</span>
                            </div>
                        </div>
                    </div>
                    <div id="event-content">
                        <div id="event-image">
                            <div class="thumbnail"><img src="<?php echo base_url()?>assets/images/sample2.jpeg" /></div>
                        </div>
                        <div id="event-description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </div>
                    </div>
                    <!-- Events terkait-->
                    <div id="other-events">
                        <div class="col-sm-4">
                            <div class="thumbnail"><img src="<?php echo base_url()?>assets/images/sample3.jpeg"></div>
                            <h4> Nama Event </h4>
                            <p>Tanggal Event</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail"><img src="<?php echo base_url()?>assets/images/sample4.jpeg"></div>
                            <h4> Nama Event </h4>
                            <p>Tanggal Event</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail"><img src="<?php echo base_url()?>assets/images/sample5.jpeg"></div>
                            <h4> Nama Event </h4>
                            <p>Tanggal Event</p>
                        </div>
                    </div>
                </div> <!-- End Kiri -->

                <!-- Kanan -->
                <div class="col-md-3">
                    <div id="recent_updates">
                        <div class="head_recent_updates">Recent Updates</div>
                        <?php
                        $i = 1;
                        for ($i == 1; $i <= 6; $i++) {
                            echo"<div class='item_recent_update'>
                                    <div class='item_recent_update_title'>
                                        <Strong>Nama Event " . $i . "</strong>
                                    </div>
                                    <div class='item_recent_update_note'>
                                        <small>Himpunan Mahasiswa Teknik Informatika </small>
                                    </div>
                                    <div class='item_recent_update_note'>
                                        <small>1 September 2015</small>
                                    </div>
                                </div>";
                        }
                        ?>
                    </div>
                </div> <!-- End Kanan -->
            </div> <!-- End Container -->
        </div>