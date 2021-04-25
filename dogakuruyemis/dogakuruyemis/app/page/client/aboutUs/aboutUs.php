<?php 
include '../../../../../../nedmin/netting/baglan.php'; 
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
$subesor=$db->prepare("select * from sube order by sube_id DESC limit 25" );
$subesor->execute();
$referanssor=$db->prepare("select * from isbirlikci order by isbirlikci_id DESC limit 25" );
$referanssor->execute();
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
    <link rel="stylesheet" href="aboutUs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <div class="row w-100">
       <?php include '../navbar/navbar.php'; ?>
    </div>
    <div class="container">
        <div class="row text-center">
            <h1><b style="color:#00a54f;"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></b></h1>
        </div>
        <div class="row">
            <h5><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></h5>
        </div>
        <hr>
        <div class="row mb-5">
            <h2 id="sube">Şubelerimiz</h2>
        </div>
        <div class="row"></div>
        
        <div class="row row-cols-2 row-cols-lg-4 g-4">
            <?php 

while ($subecek=$subesor->fetch(PDO::FETCH_ASSOC)) {
 ?>  
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $subecek['sube_resimyol']; ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $subecek['sube_ad']; ?></h5>
                    <p class="card-text text-center"><small class="text-muted"><?php echo $subecek['sube_adres']; ?></small></p>
                </div>
            </div>
           <?php } ?> 
        </div>
    
        <hr>
<!--
        <div class="row mb-5">
            <h2 id="isbirlikcileri">Satış Noktalarımız</h2>
        </div>
        <div class="row"></div>
    
        <div class="row row-cols-2 row-cols-lg-4 g-4">
               <?php  while ($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC)) {
 ?> 
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $referanscek['isbirlikci_resimyol'];  ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $referanscek['isbirlikci_ad']; ?></h5>
                </div>
            </div>
            <?php } ?>
        </div>
    <hr>
    -->
        
    </div>
    <?php include '../footer/footer.php'; ?>



    <script src="../../../../assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="../../../../assets/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>