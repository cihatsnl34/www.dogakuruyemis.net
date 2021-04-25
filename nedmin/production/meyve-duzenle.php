<?php include 'header.php';
include '../netting/baglan.php';

$meyvesor=$db->prepare("SELECT * from meyve where meyve_id=:meyve_id");
$meyvesor->execute(array(
'meyve_id' => $_GET['meyve_id']
  ));
$meyvecek=$meyvesor->fetch(PDO::FETCH_ASSOC);


?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
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
                       if (isset($_GET['durum']) && $_GET['durum'] == 'ok') {?>

                      <b style="color: green;">İşlem başarılı...</b>

                    <?php }elseif(isset($_GET['durum']) && $_GET['durum'] == 'no') {?>
                       <b style="color: red;">İşlem başarısız...</b>
                    <?php  }?>

                      </small></h2>
                  </div>
                    <div align="right" class="col-md-6">
                      <a href="meyve.php"><button  class="btn btn-warning"><i class="fa fa-undo" aria-hidden="true"></i>Geri Dön
                      </button></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                  <div class="x_content">

                   <form action='../netting/islem.php' method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="meyve_id" value="<?php echo $meyvecek['meyve_id']; ?>">
                     <input type="hidden" name="meyve_resimyol" value="<?php echo $meyvecek['meyve_resimyol']; ?>">

                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yüklü Resim<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <img width="200" height="100" src="../../<?php echo $meyvecek['meyve_resimyol']; ?>">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Resim Seç<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="file" id="first-name" name="meyve_resimyol" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Ad<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="meyve_ad" value="<?php echo $meyvecek['meyve_ad']; ?>"  class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" name="meyve_link" value="<?php echo $meyvecek['meyve_link']; ?>" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Sıra<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="meyve_sira" value="<?php echo $meyvecek['meyve_sira']; ?>" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Durum<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                       <select id="heard" class="form-control" name="meyve_durum" required=>
                         <?php 
                         if ($meyvecek['meyve_durum']==1) {?>
                         <option value="1">Aktif</option>
                         <option value="0">Pasif</option>

                          <?php }else{?>
                            
                         <option value="0">Pasif</option>
                         <option value="1">Aktif</option>

                         <?php } ?>

                         
                       </select>
                      </div>
                    </div>

                    

                   
                    

                    <div align="right" class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" name="meyveduzenle" type="submit">Kaydet</button>
                        
                      </div>

                   </form>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>
