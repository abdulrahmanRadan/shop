<link href="<?= ASSETS . THEME ?>admin/css/style.css" rel="stylesheet">
<link href="<?= ASSETS . THEME ?>admin/css/style-responsive.css" rel="stylesheet">
<?php $this->view("/header", $data); ?>



<script src="<?= ASSETS . THEME ?>admin/js/chart-master/Chart.js"></script>
<section id="main-content">
    <section class="wrapper">
        <div style="min-height: 300px; max-height: 1000px; ">
            <style type="text/css">
                .col-md-6,
                .mbr {
                    text-align: center;
                    /* background: #b7e4db; */
                    color: #4c6c9f;
                }

                #user_text {
                    color: #4f7abe;
                    /* background: #747795; */
                }

                p {
                    color: #367113;
                }

                .white-panel,
                .pn {
                    background: #bcc7c8;
                }

                .mb {
                    background: #bcc7c8;
                }

                h5 {
                    font-size: 20px;
                }
            </style>
            <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                    <div class="white-header">
                        <h5>MY Account</h5>
                    </div>
                    <p><img src="<?= ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
                    <p><b><?= $data['user_data']->name ?></b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="user_text" class="small mt" style="color: red required;">MEMBER SINCE</p>
                            <p><?= date("jS M Y", strtotime($data['user_data']->date)) ?></p>
                        </div>
                        <div class="col-md-6">
                            <p id="user_text" class="small mt">TOTAL SPEND</p>
                            <p>$ 47,60</p>
                        </div>
                    </div>
                    <!-- <hr style="color:red"> -->
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="user_text" class="small mt" style="cursor:pointer; color: #13b8ea;"><i class="fa fa-edit"></i>EDITE</p>
                        </div>
                        <div class=" col-md-6">
                            <p id="user_text" class="small mt" style="cursor:pointer; color: #713535;">DELETE</p>
                        </div>
                    </div>
                </div>
            </div><!-- /col-md-4 -->
        </div>
    </section>
</section>
<?php $this->view("/footer", $data); ?>