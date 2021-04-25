<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php 
                if ($kullanicicek['kullanici_yetki']==5) {
                  echo "Yetki: Yönetici";
                }
                 ?></h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i>Anasayfa<span class="label label-success pull-right"></span></a></li>
                  <li><a href="hakkimizda.php"><i class="fa fa-book"></i>Hakkımızda<span class="label label-success pull-right"></span></a></li>
                  <li><a href="slider.php"><i class="fa fa-image"></i>Slider İşlemleri<span class="label label-success pull-right"></span></a></li>
                  <li><a href="vitrin.php"><i class="fa fa-image"></i>Vitrin İşlemleri<span class="label label-success pull-right"></span></a></li>
                  <li><a href="kuru.php"><i class="fa fa-image"></i>Kuruyemiş İşlemleri<span class="label label-success pull-right"></span></a></li>
                  <li><a href="meyve.php"><i class="fa fa-image"></i>Kuru Meyve İşlemleri<span class="label label-success pull-right"></span></a></li>
                  <!--<li><a href="isbirlikci.php"><i class="fa fa-image"></i>İş Birlikçi İşlemleri<span class="label label-success pull-right"></span></a></li>-->
                  <li><a href="sube.php"><i class="fa fa-image"></i>Şube İşlemleri<span class="label label-success pull-right"></span></a></li>
                  <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--<li><a href="genel-ayar.php">Genel Ayarlar</a></li>-->
                      <li><a href="iletisim-ayar.php">İletişim Ayarlar</a></li>
                      <!--<li><a href="api-ayar.php">Api Ayarları</a></li>-->
                      <li><a href="sosyal-ayar.php">Sosyal Medya Ayarları</a></li>
                     <!-- <li><a href="mail-ayar.php">Mail Ayarları</a></li>-->
                    </ul>
                  </li>

                </ul>

               
                  
                  
                  
                </ul>
              </div>
           

            </div>