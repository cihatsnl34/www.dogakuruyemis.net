<?php include '../../../../../../nedmin/netting/baglan.php'; 
$kurusor=$db->prepare("select * from kuru order by kuru_id DESC limit 50" );
$kurusor->execute();
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
    <link rel="stylesheet" href="kuruyemis.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <div class="row m-0 w-100">
       <?php include '../navbar/navbar.php'; ?>
    </div>
    <div class="row m-0 text-center mt-5">
        <h1><b>Kuruyemişler</b></h1>
    </div>
 
    <div class="row m-0 mb-5">
        <div class="row row-cols-2 row-cols-lg-4 g-4 mt-3">
              <?php   while ($kurucek=$kurusor->fetch(PDO::FETCH_ASSOC)) {
 ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../../../../../<?php echo $kurucek['kuru_resimyol']; ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mx-auto mt-3"><?php echo $kurucek['kuru_ad']; ?></h5>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

   <?php include '../footer/footer.php'; ?>
    <script src="../../../../assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="../../../../assets/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>