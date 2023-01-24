<?php

include "includes/database.php";
include "includes/functions.php";
include "header.php";

if (isset($_GET['cottageID'])) {
    $huisjeID=$_GET['cottageID'];
}
    
    $sql="SELECT * FROM cottages WHERE cottage_ID=" .$huisjeID;
    $tblCottage=getData($sql, 'fetch');

    //echo "<pre>";
    //print_r($tblCottage);

?>

<section>
    <div class="container mt-4">
    <h1><?php echo $tblCottage['cottage_name']; ?></h1>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                    <img src= <?php echo 'images/'.$tblCottage['cottage_img']; ?> class="d-block w-100" alt="cottage_img"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item active">
                    <img src=<?php echo 'images/'.$tblCottage['cottage_img2']; ?> class="d-block w-100" alt="cottage_img2"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo 'images/'.$tblCottage['cottage_img3']; ?> class="d-block w-100" alt="cottage_img3"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo 'images/'.$tblCottage['cottage_img4']; ?> class="d-block w-100" alt="cottage_img4"><!--src en alt dynamisch maken -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            <div class="col">
            <h5><?= $tblCottage['cottage_excerpt']; ?></h5>
            <p><?= $tblCottage['cottage_descr']; ?><p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-4 bg-light">
        <div class="row  px-4 py-4">
            <div class="col">
            <?php
            include "includes/facilities.php";
            ?>
            </div>

            <div class="col">
                <h4>Prijzen (per persoon per nacht)</h4>
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item">Volwassenen: &euro; <?= $cottage['cottage_price_a']; ?></li>
                            <li class="list-group-item">Kinderen: &euro; <?= $cottage['cottage_price_c']; ?><li>
                    </ul>
            </div>

            <div class="col">
            <?php
            include "includes/additions.php";
            include "calculateprice.php";
            ?>
            </div>
        </div>
    </div>
</section>

