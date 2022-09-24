

    <!-- CONTENT START -->
    <section class="py-5 bg-light">

        <!-- .container start -->
        <div class="container">
            
            <!-- .row start -->
            <div class="row">

                <!-- .col start -->
                <div class="col-lg-3">

                    <?php 
                        include __DIR__ . '../../layout/menu.php';
                    ?>

                </div>
                <!-- .col end -->

                <!-- .col start -->
                <div class="col-lg-9">
                    
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">

                            <h3>Read <span class="fw-bold"><i class="fa-solid fa-graduation-cap"></i> Ekskul</span></h3>

                            <div>
                                <a href="?menu=ekskul&page=read" class="btn btn-dark"><i class="fa-solid fa-left-long me-1"></i> Kembali</a>
                            </div>

                        </div>

                        <div class="card-body">

                            <?php echo siswa_read_detail(); ?>

                        </div>

                    </div>

                </div>
                <!-- .col end -->

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->

    </section>
    <!-- CONTENT END -->