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
                        <a href="<?php echo base_url(); ?>index.php/website/detail">
                            <div class="poster_event">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/images/sample1.jpeg" alt="sample">
                                </div>
                            </div>
                            <h4>Nama Event</h4>
                        </a>
                        <div class="row">
                            <div class="eo">
                                <span class="attribute-icon"><img src="<?php echo base_url() ?>assets/images/eo.png" /></span>
                                <span>Event Organizer</span>
                            </div>
                            <div class="date">
                                <span class="attribute-icon"><img src="<?php echo base_url() ?>assets/images/calendar.png" /></span>
                                <span>Tanggal Event</span>
                            </div>
                        </div>
                        <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                            sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence... </p> <a href="<?php echo base_url(); ?>index.php/website/detail"> Read more <span class="glyphicon glyphicon-triangle-right"></span></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="<?php echo base_url(); ?>index.php/website/detail">
                            <div class="poster_event">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/images/sample2.jpeg" alt="sample">
                                </div>
                            </div>
                            <h4>Nama Event</h4>
                        </a>
                        <div class="row">
                            <div class="eo">
                                <span class="attribute-icon"><img src="<?php echo base_url() ?>assets/images/eo.png" /></span>
                                <span>Event Organizer</span>
                            </div>
                            <div class="date">
                                <span class="attribute-icon"><img src="<?php echo base_url() ?>assets/images/calendar.png" /></span>
                                <span>Tanggal Event</span>
                            </div>
                        </div>
                        <p>sample sentence sample sentence sample sentence sample sentence sample sentence sample sentence sample sentenced
                            sample sentencesample sentencesample sentencesample sentencesample sentencesample sentencesample sentence... </p> <a href="<?php echo base_url(); ?>index.php/website/detail"> Read more <span class="glyphicon glyphicon-triangle-right"></span>
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>