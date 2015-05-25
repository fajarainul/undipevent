<div id="slider_area">
    <div class="row" style='border:solid salmon 1px;height: 100%;background: orange'>
        <center>silder-nya belom jadi</center>
    </div>
    
</div>
<div id="main_content">
    <div class="row">
        <h4>Event Terdekat</h4>
        <div id="thumbnail_area">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/sample.jpeg" alt="sample">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/sample1.jpeg" alt="sample">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/sample2.jpeg" alt="sample">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/images/sample3.jpeg" alt="sample">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel_search">
            <div style="float:right;margin: 0px 0px 10px 10px;padding-right: 0px"class="col-lg-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="clear">
            <!-- menampilkan pemilihan kategori-->
            <div id="filter">
                <div id="filter_left">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;All Categories</h4>
                    <hr>
                    <?php
                    $i = 1;
                    for ($i == 1; $i <= 8; $i++) {
                        echo"<div class='item_category'><a href='" . base_url() . "index.php/website/kategori'>Kategori " . $i . "</div>";
                    }
                    ?>
                </div>
                <div id="filter_right">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;All Months</h4>
                    <hr>
                    <div class="month_area">
                        <?php
                        $month = array();
                        $month[1] = 'Jan';
                        $month[2] = 'Feb';
                        $month[3] = 'Mar';
                        $month[4] = 'Apr';
                        $month[5] = 'Mei';
                        $month[6] = 'Jun';
                        $month[7] = 'Jul';
                        $month[8] = 'Agu';
                        $month[9] = 'Sep';
                        $month[10] = 'Okt';
                        $month[11] = 'Nov';
                        $month[12] = 'Des';
                        $i = 1;
                        for ($i == 1; $i < 12; $i++) {
                            echo"<div class='item_month'><a href='" . base_url() . "index.php/website/kategori'>" . $month[$i] . "</a></div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- menampilkan pemilihan isi-->
            <div id="content_area">
                <div id="content_left">
                    <h4>About</h4>
                    <div class="desc_left">
                        <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/logodcs.jpg" alt="sample">
                            </div>
                        </div>
                    </div>
                    <div class="desc_right">
                        <p>Internet (kependekan dari interconnection-networking) adalah seluruh jaringan komputer yang saling terhubung menggunakan standar sistem global Transmission Control Protocol/Internet Protocol Suite (TCP/IP) sebagai protokol pertukaran paket (packet switching communication protocol) untuk melayani miliaran pengguna di seluruh dunia.Rangkaian internet yang terbesar dinamakan Internet. Cara menghubungkan rangkaian dengan kaidah ini dinamakan internetworking ("antarjaringan").</p>
                    </div>
                    <div class="clear"></div>
                    <h4>Contact</h4>
                    <div class="desc_left">
                        <ul>
                            <li>Jalan Prof.Soedarto Tembalang, Semarang</li>
                            <li>024-xxxxxxx</li>
                            <li>undipevent$undipa.ac.id</li>
                        </ul>
                    </div>
                    <div class="desc_right">
                        <div class="map_area">
                            <iframe  width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCR90FYVWUK09b034TjWqbY2QvUqVre0KA &q=perumda+tembalang+semarang"></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="content_right">
                    <div id="recent_event">
                        <div class="head_recent_event">Recent Event</div>
                        <?php
                        $i = 1;
                        for ($i == 1; $i <= 7; $i++) {
                            echo"<div class='item_recent_event'>
                                    <div class='item_recent_event_title'>
                                        <Strong>Nama Event " . $i . "</strong>
                                    </div>
                                    <div class='item_recent_event_note'>
                                        <small>Himpunan Mahasiswa Teknik Informatika </small>
                                    </div>
                                    <div class='item_recent_event_note'>
                                        <small>1 September 2015</small>
                                    </div>
                                </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>