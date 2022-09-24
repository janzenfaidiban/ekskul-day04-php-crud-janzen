<?php 
    
    include __DIR__ . './view/layout/header.php';

    if(isset($_GET['menu']) && $_GET['menu'] == 'dasbor'){
        include __DIR__ . './view/dasbor.php';
    }

    elseif(isset($_GET['menu']) && $_GET['menu'] == 'ekskul'){

        if(isset($_GET['page']) && $_GET['page'] == 'read'){

            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/read.php';

        } elseif(isset($_GET['page']) && $_GET['page'] == 'read-detail') {

            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/read-detail.php';

        } elseif(isset($_GET['page']) && $_GET['page'] == 'update') {

            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/update.php';

        } elseif(isset($_GET['page']) && $_GET['page'] == 'create') {

            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/create.php';

        } elseif(isset($_GET['page']) && $_GET['page'] == 'delete') {

            include __DIR__ . './config/functions.php';
            include __DIR__ . './view/ekskul/delete.php';

        } else {
            include __DIR__ . './view/404.php';
        }

        
    }

    else{
        include __DIR__ . './view/404.php';
    }

    include __DIR__ . './view/layout/footer.php';