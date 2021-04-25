<?php

 include 'header.php';

if(isset($_POST['arama'])){

  $aranan=$_POST['aranan'];

  $meyvesor=$db->prepare("select * from meyve where meyve_ad LIKE '%$aranan%' order by meyve_durum DESC, meyve_sira ASC limit 25");
   $meyvesor->execute();
   $say=$meyvesor->rowCount();


}
else{
   $meyvesor=$db->prepare("select * from meyve order by meyve_durum DESC, meyve_sira ASC limit 25");
   $meyvesor->execute();
   $say=$meyvesor->rowCount();
}


 ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Yönetim Paneli</h3>
              </div>
               
              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">

                  <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara</button>
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <div align="left" class="col-md-6">
                    <h2>Kuru Meyve İşlemleri
                    <small>
                      <?php 
                      echo $say." Kayıt listelendi.";
                       ?>
                      <?php
                       if (isset($_GET['durum']) && $_GET['durum'] == 'ok') {?>

                      <b style="color: green;">İşlem başarılı...</b>

                    <?php }elseif(isset($_GET['durum']) && $_GET['durum'] == 'no') {?>
                       <b style="color: red;">İşlem başarısız...</b>
                    <?php  }?>

                      </small></h2>
                  </div>
                    <div align="right" class="col-md-6">
                      <a href="meyve-ekle.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Ekle
                      </button></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Kuru Meyve Resim </th>
                            <th class="column-title text-center">Kuru Meyve Ad </th>
                            <th class="column-title text-center">Kuru Meyve Sıra </th>
                            <th class="column-title text-center">Kuru Meyve Durum </th>
                            <th class="column-title text-center"></th>
                            <th class="column-title text-center"></th>
                       
                          </tr>
                        </thead>

                        <tbody>

                          <?php 
                          

                          while ($meyvecek=$meyvesor->fetch(PDO::FETCH_ASSOC)) {
                          
                         
                           ?>
                          <tr>
                           
                            <td class=""><img width="200" height="100" src="../../<?php echo $meyvecek['meyve_resimyol']; ?>"></td>
                            <td class="text-center"><?php echo $meyvecek['meyve_ad']; ?></td>
                            <td class="text-center"><?php echo $meyvecek['meyve_sira']; ?></td>
                            <td class="text-center "><?php
                            if ($meyvecek['meyve_durum']=="1") {
                              echo "AKTİF";
                            }
                            else{
                              echo "PASİF";
                            }

                             

                              ?></td>


                            <td class="text-center "><a href="meyve-duzenle.php?meyve_id=<?php echo $meyvecek['meyve_id']; ?>"><button  class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i>Düzenle</button></td>
                            <td class="text-center "><a href="../netting/islem.php?meyvesil=ok&meyve_id=<?php echo $meyvecek['meyve_id']; ?>"><button style="width: 80px" class="btn btn-danger btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i>Sil</button></a></td>
                            
                           
                          </tr>
                         
                  <?php  } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>
