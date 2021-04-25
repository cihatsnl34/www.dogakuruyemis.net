<?php include '../../../../../../nedmin/netting/baglan.php';
$vitrinsor=$db->prepare("select * from vitrin order by vitrin_id DESC limit 50" );
$vitrinsor->execute();
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$slidersor=$db->prepare("select * from slider order by slider_id DESC limit 3" );
$slidersor->execute();
$kurusor=$db->prepare("select * from kuru order by kuru_id DESC limit 2" );
$kurusor->execute();
$meyvesor=$db->prepare("select * from meyve order by meyve_id DESC limit 2" );
$meyvesor->execute();
 ?>
<!DOCTYPE html>

<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Doğa Kuruyemiş</title>
    <link rel="icon" href="../../../../assets/images/logo.png" type="image/x-icon">
    <meta content="Doğa, Kuruyemiş, Doğa Kuruyemiş" name="keywords">
    <link href="../../../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <div class="row w-100 m-0">
        <?php include '../navbar/navbar.php'; ?>
    </div>
    <div class="row m-0">
        <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                
               
                <div class="carousel-item active">
                    <img src="../../../../assets/images/bgimg.jpg" class="d-block scr-img w-100" style="object-fit:cover;" alt="...">
                </div>
               <?php while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?> 
             <div class="carousel-item ">
                    <img src="../../../../../../<?php echo $slidercek['slider_resimyol'];?>" class="d-block scr-img w-100" alt="...">
                </div>
            <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row m-0 text-center m-5">
        <h1><b>VİTRİN ÜRÜNLERİ</b></h1>
    </div>
    
    <div class="row m-0 ">
        <div class="row row-cols-2 row-cols-lg-4 g-4">
              <?php 

while ($vitrincek=$vitrinsor->fetch(PDO::FETCH_ASSOC)) {
 ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $vitrincek['vitrin_resimyol']; ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $vitrincek['vitrin_ad']; ?></h5>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="row m-0 mt-5">
        <div class="btwimg">
            <div class="row m-0">
                <div class="col-md-6">
                    <div class="row m-0">
                        <img src="../../../../assets/images/logo.png" class="soc-logo mt-4 ml-5 mb-5">
                        <b>
                            <h1>Bizi Sosyal Medyadan Takip Edin,
                                Kampanyalardan Haberdar Olun!</h1>
                        </b>
                        <div class=" mt-5 mb-4 d-flex justify-content-start">
                            <a href="<?php echo $ayarcek['ayar_instagram'];  ?>"target=_blank><img class="icon-soc me-5"
                                    src="../../../../assets/icon/instagram.png"></a>
                            <a href="<?php echo $ayarcek['ayar_facebook'];  ?>"target=_blank><img class="icon-soc"
                                    src="../../../../assets/icon/facebook.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row m-0 mb-5">
        <div class="row row-cols-2 row-cols-lg-4 g-5">
           <?php while ($kurucek=$kurusor->fetch(PDO::FETCH_ASSOC)) {
 ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $kurucek['kuru_resimyol']; ?>"class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $kurucek['kuru_ad']; ?></h5>

                </div>

            </div>
           <?php } ?>
           <?php while ($meyvecek=$meyvesor->fetch(PDO::FETCH_ASSOC)) {
 ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $meyvecek['meyve_resimyol']; ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $meyvecek['meyve_ad']; ?></h5>

                </div>
                
            </div>
           <?php } ?>

        </div>
    </div>
    <?php include '../footer/footer.php' ?>


    <script src="../../../../assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="../../../../assets/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>