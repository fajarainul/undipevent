<div id="main_content">
    <div class="row">
        <div id="panel_search">
            <div style="float:right;margin: 10px 0px 10px 10px;padding-right: 0px"class="col-lg-4">
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
                        echo"<div class='item_category'><a href='".  base_url()."index.php/website/kategori'>Kategori " . $i . "</div>";
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
                            echo"<div class='item_month'><a href='".  base_url()."index.php/website/kategori'>" . $month[$i] . "</a></div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- menampilkan pemilihan isi-->
            <div id="content_area">
                <div class="col-xs-5">
                   <div class="poster_event">
                       <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/sample1.jpeg" alt="sample">
                            </div>
                        </div>
                   </div>
                    <h4><a href='"<?php echo base_url()?>"index.php/website/detail'>Nama Event</a></h4>
                   <div style='float:left;color:blue'><b>Event Organizer</b></div>
                   <div style='float:right;color:orangered'><b>Tanggal Event</b></div><br>
                   <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                      sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence</p>
                </div>
                <div style='float:right'class="col-xs-5">
                   <div class="poster_event">
                       <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/sample2.jpeg" alt="sample">
                            </div>
                        </div>
                   </div>
                   <h4><a href='"<?php echo base_url()?>"index.php/website/detail'>Nama Event</a></h4>
                   <div style='float:left;color:blue'><b>Event Organizer</b></div>
                   <div style='float:right;color:orangered'><b>Tanggal Event</b></div>
                   <br>
                   <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                      sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence</p>
                </div>
                <div class="clear"></div>
                <div style='float:left'class="col-xs-5">
                   <div class="poster_event">
                       <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/sample3.jpeg" alt="sample">
                            </div>
                        </div>
                   </div>
                  <h4><a href='"<?php echo base_url();?>"index.php/website/detail'>Nama Event</a></h4>
                   <div style='float:left;color:blue'><b>Event Organizer</b></div>
                   <div style='float:right;color:orangered'><b>Tanggal Event</b></div>
                   <br>
                   <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                      sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence</p>
                </div>
                <div style='float:right'class="col-xs-5">
                   <div class="poster_event">
                       <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/sample4.jpeg" alt="sample">
                            </div>
                        </div>
                   </div>
                   <h4><a href='"<?php echo base_url();?>"index.php/website/detail'>Nama Event</a></h4>
                   <div style='float:left;color:blue'><b>Event Organizer</b></div>
                   <div style='float:right;color:orangered'><b>Tanggal Event</b></div>
                   <br>
                   <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                      sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence</p>
                </div>
                <div class="clear"></div>
                <div style='float:left'class="col-xs-5">
                   <div class="poster_event">
                       <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/sample5.jpeg" alt="sample">
                            </div>
                        </div>
                   </div>
                   <h4>Nama Event</h4>
                   <div style='float:left;color:blue'><b>Event Organizer</b></div>
                   <div style='float:right;color:orangered'><b>Tanggal Event</b></div>
                   <br>
                   <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                      sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence</p>
                </div>
            </div>
        </div>
    </div>