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

                    <h3>Create <span class="fw-bold"><i class="fa-solid fa-graduation-cap"></i> Ekskul</span></h3>

                    <div>
                        <a href="?menu=ekskul&page=read" class="btn btn-dark"><i class="fa-solid fa-left-long me-1"></i> Kembali</a>
                    </div>

                </div>

                <div class="card-body">

                    <?php 
                        if(isset($_GET['action']) && $_GET['action'] == 'proses'){

                            $judul = $_POST['judul'];
                            $keterangan = $_POST['keterangan'];

                            include __DIR__ . '../../../config/connection.php';

                            $sql = "INSERT INTO ekskul (judul, keterangan) VALUES ('$judul', '$keterangan')";

                            if($conn->query($sql) === TRUE){
                                // echo "Sukses!";
                                header('location: ?menu=ekskul&page=read');
                            } else {
                                echo "Gagal!";
                            }
                        }
                    ?>

                    <form action="?menu=ekskul&page=create&action=proses" method="post">

                        <ul class="list-group">
                            <li class="list-group-item">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control form-control-lg" placeholder="Tulis judul...">
                            </li>
                            <li class="list-group-item">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control form-control-lg" placeholder="Tulis keterangan...">
                                </span>
                            </li>
                            <li class="list-group-item">
                                <button type="submit" class="btn btn-lg btn-primary w-100"><i class="fa-solid fa-plus-square me-2"></i> Create</button>
                            </li>
                        </ul>

                    </form>

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