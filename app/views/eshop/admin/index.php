<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i><?= $data['page_title'] ?> </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <p>Place your content here.</p>
            </div>
        </div>

    </section>
    <! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->
<?php $this->view("admin/footer", $data); ?>