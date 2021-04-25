<<?php include 'header.php';
include '../netting/baglan.php';
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
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
                    <h2>Kuru Meyve İşlemleri<small>
                      <?php
                       if (isset($_GET['durum']) && $_GET['durum'] == 'ok') {?>

                      <b style="color: green;">Güncelleme başarılı...</b>

                    <?php }elseif(isset($_GET['durum']) && $_GET['durum'] == 'no') {?>
                       <b style="color: red;">Güncelleme yapılamadı...</b>
                    <?php  }?>

                      </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
               
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   <form action='../netting/islem.php' method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Resim Seç<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="file" id="first-name" required="required"name="meyve_resimyol" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Ad<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="meyve_ad" placeholder="Kuru Meyve adını giriniz..." class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" name="meyve_link" placeholder="Kuru Meyve link giriniz..." class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Sıra<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="meyve_sira" placeholder="Kuru Meyve sıra giriniz..." value="0" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuru Meyve Durum<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                       <select id="heard" class="form-control" name="meyve_durum" required=>
                         <option value="1">Aktif</option>
                         <option value="0">Pasif</option>
                       </select>
                      </div>
                    </div>

                     <!--<div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Resim yol<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required"name="meyve_resimyol" placeholder="Kuru Meyve sıra giriniz..." value="0" class="form-control ">
                      </div>
                    </div>-->
                    

                   
                    

                    <div align="right" class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" name="meyvekaydet" type="submit">Kaydet</button>
                        
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
