<?php 
include 'header.php';
include '../netting/baglan.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımızda</h3>
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
                    <h2>Hakkımızda Düzenleme<small>
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

                   <form action='../netting/islem.php' method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Başlık<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">İçerik<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></textarea>
                        <!--
                        <input type="text" id="first-name" required="required" name="hakkimizda_icerik" value="<?php echo $hakkimizdacek['hakkimizda_icerik'] ?>" class="form-control ">-->
                      </div>
                    </div>
                    <script type="text/javascript">
                      
                      CKEDITOR.replace('editor1',
                      {
                        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: '/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                        forcePastePlainText:true
                 //    filebrowserWindowWidth: '1000',
                //  filebrowserWindowHeight: '700'
                        } );
                    </script>
                      

                    <div align="right" class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" name="hakkimizdakaydet" type="submit">Güncelle</button>
                        
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
