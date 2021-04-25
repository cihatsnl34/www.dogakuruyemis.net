<?php include 'header.php';
include '../netting/baglan.php';

$vitrinsor=$db->prepare("SELECT * from vitrin where vitrin_id=:vitrin_id");
$vitrinsor->execute(array(
'vitrin_id' => $_GET['vitrin_id']
  ));
$vitrincek=$vitrinsor->fetch(PDO::FETCH_ASSOC);


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
                    <h2>Vitrin İşlemleri
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
                      <a href="vitrin.php"><button  class="btn btn-warning"><i class="fa fa-undo" aria-hidden="true"></i>Geri Dön
                      </button></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                  <div class="x_content">

                   <form action='../netting/islem.php' method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="vitrin_id" value="<?php echo $vitrincek['vitrin_id']; ?>">
                     <input type="hidden" name="vitrin_resimyol" value="<?php echo $vitrincek['vitrin_resimyol']; ?>">

                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yüklü Resim<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <img width="200" height="100" src="../../<?php echo $vitrincek['vitrin_resimyol']; ?>">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Resim Seç<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="file" id="first-name" name="vitrin_resimyol" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vitrin Ad<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="vitrin_ad" value="<?php echo $vitrincek['vitrin_ad']; ?>"  class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vitrin Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" name="vitrin_link" value="<?php echo $vitrincek['vitrin_link']; ?>" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vitrin Sıra<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="vitrin_sira" value="<?php echo $vitrincek['vitrin_sira']; ?>" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vitrin Durum<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                       <select id="heard" class="form-control" name="vitrin_durum" required=>
                         <?php 
                         if ($vitrincek['vitrin_durum']==1) {?>
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
                        <button class="btn btn-primary" name="vitrinduzenle" type="submit">Kaydet</button>
                        
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
