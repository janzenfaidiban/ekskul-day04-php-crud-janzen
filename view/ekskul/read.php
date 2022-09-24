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
                        <a href="?menu=ekskul&page=create" class="btn btn-primary"><i class="fa-solid fa-plus-square me-1"></i> Create</a>
                    </div>

                </div>

                <div class="card-body">

                    

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php echo siswa_read(); ?>

                        </tbody>
                    </table>

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