<?php 
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['loggin'])) {
	
	 $kullanici_ad=$_POST['kullanici_ad'];
	 $kullanici_password=md5($_POST['kullanici_password']);
	
	//$response = $_POST['g-recaptcha-response'];

	//if($response==""){
	//	header('Location:login.php?login=robot');
	//} else{
		if ($kullanici_ad&&$kullanici_password) {

			$kullanicisor=$db->prepare("SELECT * from kullanici WHERE kullanici_ad=:ad and kullanici_password=:password");
				$kullanicisor->execute(array(
				'ad'=>$kullanici_ad,
				'password'=>$kullanici_password
				));
				 $say=$kullanicisor->rowCount();
	
				if($say>0){
					$_SESSION['kullanici_ad']=$kullanici_ad;
					//$_SESSION['giris']=md5(time());

				header('Location:../production/index.php');
				}
				else{
					header("Location:../production/login.php?durum=no");
				}
		}

	}


if (isset($_POST['genelayarkaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_siteurl=:siteurl,
ayar_title=:title,
ayar_description=:description,
ayar_keywords=:keywords,
ayar_author=:author
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'siteurl'=> $_POST['ayar_siteurl'],
'title' => $_POST['ayar_title'],
'description' => $_POST['ayar_description'],
'keywords' => $_POST['ayar_keywords'],
'author' => $_POST['ayar_author']
	));

	if ($update) {
		Header("Location:../production/genel-ayar.php?durum=ok");
	}
	else {
		Header("Location:../production/genel-ayar.php?durum=no");
	}
	
}
if (isset($_POST['iletisimayarkaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_tel=:tel,
ayar_gsm=:gsm,
ayar_faks=:faks,
ayar_mail=:mail,
ayar_adres=:adres,
ayar_il=:il,
ayar_ilce=:ilce
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'tel'=> $_POST['ayar_tel'],
'gsm' => $_POST['ayar_gsm'],
'faks' => $_POST['ayar_faks'],
'mail' => $_POST['ayar_mail'],
'adres' => $_POST['ayar_adres'],
'il' => $_POST['ayar_il'],
'ilce' => $_POST['ayar_ilce']

	));

	if ($update) {
		Header("Location:../production/iletisim-ayar.php?durum=ok");
	}
	else {
		Header("Location:../production/iletisim-ayar.php?durum=no");
	}
	
}
if (isset($_POST['apiayarkaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_recapctha=:recapctha,
ayar_googlemap=:googlemap,
ayar_analystic=:analystic

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'recapctha'=> $_POST['ayar_recapctha'],
'googlemap' => $_POST['ayar_googlemap'],
'analystic' => $_POST['ayar_analystic']

	));

	if ($update) {
		Header("Location:../production/api-ayar.php?durum=ok");
	}
	else {
		Header("Location:../production/api-ayar.php?durum=no");
	}
	
}
if (isset($_POST['sosyalayarkaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_facebook=:facebook,
ayar_twitter=:twitter,
ayar_youtube=:youtube,
ayar_instagram=:instagram

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'facebook'=> $_POST['ayar_facebook'],
'twitter' => $_POST['ayar_twitter'],
'youtube' => $_POST['ayar_youtube'],
'instagram' => $_POST['ayar_instagram']

	));

	if ($update) {
		Header("Location:../production/sosyal-ayar.php?durum=ok");
	}
	else {
		Header("Location:../production/sosyal-ayar.php?durum=no");
	}
	
}
if (isset($_POST['mailayarkaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_smtphost=:smtphost,
ayar_smtpuser=:smtpuser,
ayar_smtpassword=:smtppassword,
ayar_smtpport=:smtpport

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'smtphost'=> $_POST['ayar_smtphost'],
'smtpuser' => $_POST['ayar_smtpuser'],
'smtppassword' => $_POST['ayar_smtpassword'],
'smtpport' => $_POST['ayar_smtpport']

	));

	if ($update) {
		Header("Location:../production/mail-ayar.php?durum=ok");
	}
	else {
		Header("Location:../production/mail-ayar.php?durum=no");
	}
	
}
if (isset($_POST['hakkimizdakaydet'])) {
	
$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
hakkimizda_baslik=:baslik,
hakkimizda_icerik=:icerik


WHERE hakkimizda_id=0");

$update=$ayarkaydet->execute(array(
'baslik'=> $_POST['hakkimizda_baslik'],
'icerik' => $_POST['hakkimizda_icerik']


	));

	if ($update) {
		Header("Location:../production/hakkimizda.php?durum=ok");
	}
	else {
		Header("Location:../production/hakkimizda.php?durum=no");
	}
	
}
if (isset($_POST['profilayarkaydet'])) {
	
$kullanici_password=md5($_POST['kullanici_password']);

$ayarkaydet=$db->prepare("UPDATE kullanici SET
kullanici_adsoyad=:adsoyad,
kullanici_password=:password

WHERE kullanici_id={$_POST['kullanici_id']}");

$update=$ayarkaydet->execute(array(
'adsoyad' => $_POST['kullanici_adsoyad'],
'password' => $kullanici_password

	));

	if ($update) {
		Header("Location:../production/kullanici-profil.php?durum=ok");
	}
	else {
		Header("Location:../production/kullanici-profil.php?durum=no");
	}
	
}



if (isset($_POST['sliderkaydet'])) {

 $uploads_dir = '../../dimg/slider';

 @$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
 @$name = $_FILES['slider_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO slider SET
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum,
slider_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['slider_ad'],
'link' => $_POST['slider_link'],
'sira' => $_POST['slider_sira'],
'durum' => $_POST['slider_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/slider.php?durum=ok");
	}
	else {
		Header("Location:../production/slider.php?durum=no");
	}
	
}

if (@$_GET['slidersil']=="ok") {
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
'slider_id' => $_GET['slider_id']
	));
	if ($kontrol) {
		Header("Location:../production/slider.php?durum=ok");
	}
	else {
		Header("Location:../production/slider.php?durum=no");
	}
}

if (isset($_POST['sliderduzenle'])) {


if($_FILES['slider_resimyol']['size'] > 0){

	$uploads_dir = '../../dimg/slider';

 @$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
 @$name = $_FILES['slider_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE slider SET
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum,
slider_resimyol=:resimyol

WHERE slider_id={$_POST['slider_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['slider_ad'],
'link' => $_POST['slider_link'],
'sira' => $_POST['slider_sira'],
'durum' => $_POST['slider_durum'],
'resimyol' => $refimgyol
	));

$slider_id=$_POST['slider_id'];

	if ($update) {

		$resimsilunlink=$_POST['slider_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
	}
	else {
		Header("Location:../production/slider-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE slider SET
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum

WHERE slider_id={$_POST['slider_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['slider_ad'],
'link' => $_POST['slider_link'],
'sira' => $_POST['slider_sira'],
'durum' => $_POST['slider_durum']

	));

$slider_id=$_POST['slider_id'];

	if ($update) {
		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
	}
	else {
		Header("Location:../production/slider-duzenle.php?durum=no");
	}
	}
	
	
}

if (isset($_POST['vitrinkaydet'])) {

 $uploads_dir = '../../vimg/vitrin';

 @$tmp_name = $_FILES['vitrin_resimyol']['tmp_name'];
 @$name = $_FILES['vitrin_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO vitrin SET
vitrin_ad=:ad,
vitrin_link=:link,
vitrin_sira=:sira,
vitrin_durum=:durum,
vitrin_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['vitrin_ad'],
'link' => $_POST['vitrin_link'],
'sira' => $_POST['vitrin_sira'],
'durum' => $_POST['vitrin_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/vitrin.php?durum=ok");
	}
	else {
		Header("Location:../production/vitrin.php?durum=no");
	}
	
}

if (@$_GET['vitrinsil']=="ok") {
	$sil=$db->prepare("DELETE from vitrin where vitrin_id=:vitrin_id");
	$kontrol=$sil->execute(array(
'vitrin_id' => $_GET['vitrin_id']
	));

	$vitrin_id=$_POST['vitrin_id'];
	if ($kontrol) {
		
		$resimsilunlink=$_POST['vitrin_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/vitrin.php?durum=ok");
	}
	else {
		Header("Location:../production/vitrin.php?durum=no");
	}
	}


if (isset($_POST['vitrinduzenle'])) {


if($_FILES['vitrin_resimyol']['size'] > 0){

	$uploads_dir = '../../vimg/vitrin';

 @$tmp_name = $_FILES['vitrin_resimyol']['tmp_name'];
 @$name = $_FILES['vitrin_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE vitrin SET
vitrin_ad=:ad,
vitrin_link=:link,
vitrin_sira=:sira,
vitrin_durum=:durum,
vitrin_resimyol=:resimyol

WHERE vitrin_id={$_POST['vitrin_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['vitrin_ad'],
'link' => $_POST['vitrin_link'],
'sira' => $_POST['vitrin_sira'],
'durum' => $_POST['vitrin_durum'],
'resimyol' => $refimgyol
	));

$vitrin_id=$_POST['vitrin_id'];

	if ($update) {

		$resimsilunlink=$_POST['vitrin_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/vitrin-duzenle.php?vitrin_id=$vitrin_id&durum=ok");
	}
	else {
		Header("Location:../production/vitrin-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE vitrin SET
vitrin_ad=:ad,
vitrin_link=:link,
vitrin_sira=:sira,
vitrin_durum=:durum

WHERE vitrin_id={$_POST['vitrin_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['vitrin_ad'],
'link' => $_POST['vitrin_link'],
'sira' => $_POST['vitrin_sira'],
'durum' => $_POST['vitrin_durum']

	));

$vitrin_id=$_POST['vitrin_id'];

	if ($update) {
		Header("Location:../production/vitrin-duzenle.php?vitrin_id=$vitrin_id&durum=ok");
	}
	else {
		Header("Location:../production/vitrin-duzenle.php?durum=no");
	}
	}
	
	
}
if (isset($_POST['kurukaydet'])) {

 $uploads_dir = '../../kimg/kuru';

 @$tmp_name = $_FILES['kuru_resimyol']['tmp_name'];
 @$name = $_FILES['kuru_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO kuru SET
kuru_ad=:ad,
kuru_link=:link,
kuru_sira=:sira,
kuru_durum=:durum,
kuru_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['kuru_ad'],
'link' => $_POST['kuru_link'],
'sira' => $_POST['kuru_sira'],
'durum' => $_POST['kuru_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/kuru.php?durum=ok");
	}
	else {
		Header("Location:../production/kuru.php?durum=no");
	}
	
}

if (@$_GET['kurusil']=="ok") {
	$sil=$db->prepare("DELETE from kuru where kuru_id=:kuru_id");
	$kontrol=$sil->execute(array(
'kuru_id' => $_GET['kuru_id']
	));
	if ($kontrol) {
		Header("Location:../production/kuru.php?durum=ok");
	}
	else {
		Header("Location:../production/kuru.php?durum=no");
	}
}

if (isset($_POST['kuruduzenle'])) {


if($_FILES['kuru_resimyol']['size'] > 0){

	$uploads_dir = '../../kimg/kuru';

 @$tmp_name = $_FILES['kuru_resimyol']['tmp_name'];
 @$name = $_FILES['kuru_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE kuru SET
kuru_ad=:ad,
kuru_link=:link,
kuru_sira=:sira,
kuru_durum=:durum,
kuru_resimyol=:resimyol

WHERE kuru_id={$_POST['kuru_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['kuru_ad'],
'link' => $_POST['kuru_link'],
'sira' => $_POST['kuru_sira'],
'durum' => $_POST['kuru_durum'],
'resimyol' => $refimgyol
	));

$kuru_id=$_POST['kuru_id'];

	if ($update) {

		$resimsilunlink=$_POST['kuru_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/kuru-duzenle.php?kuru_id=$kuru_id&durum=ok");
	}
	else {
		Header("Location:../production/kuru-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE kuru SET
kuru_ad=:ad,
kuru_link=:link,
kuru_sira=:sira,
kuru_durum=:durum

WHERE kuru_id={$_POST['kuru_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['kuru_ad'],
'link' => $_POST['kuru_link'],
'sira' => $_POST['kuru_sira'],
'durum' => $_POST['kuru_durum']

	));

$kuru_id=$_POST['kuru_id'];

	if ($update) {
		Header("Location:../production/kuru-duzenle.php?kuru_id=$kuru_id&durum=ok");
	}
	else {
		Header("Location:../production/kuru-duzenle.php?durum=no");
	}
	}
	
	
}
if (isset($_POST['meyvekaydet'])) {

 $uploads_dir = '../../mimg/meyve';

 @$tmp_name = $_FILES['meyve_resimyol']['tmp_name'];
 @$name = $_FILES['meyve_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO meyve SET
meyve_ad=:ad,
meyve_link=:link,
meyve_sira=:sira,
meyve_durum=:durum,
meyve_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['meyve_ad'],
'link' => $_POST['meyve_link'],
'sira' => $_POST['meyve_sira'],
'durum' => $_POST['meyve_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/meyve.php?durum=ok");
	}
	else {
		Header("Location:../production/meyve.php?durum=no");
	}
	
}

if (@$_GET['meyvesil']=="ok") {
	$sil=$db->prepare("DELETE from meyve where meyve_id=:meyve_id");
	$kontrol=$sil->execute(array(
'meyve_id' => $_GET['meyve_id']

	));
	if ($kontrol) {
		
		Header("Location:../production/meyve.php?durum=ok");
	}
	else {
		Header("Location:../production/meyve.php?durum=no");
	}
}

if (isset($_POST['meyveduzenle'])) {


if($_FILES['meyve_resimyol']['size'] > 0){

	$uploads_dir = '../../mimg/meyve';

 @$tmp_name = $_FILES['meyve_resimyol']['tmp_name'];
 @$name = $_FILES['meyve_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE meyve SET
meyve_ad=:ad,
meyve_link=:link,
meyve_sira=:sira,
meyve_durum=:durum,
meyve_resimyol=:resimyol

WHERE meyve_id={$_POST['meyve_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['meyve_ad'],
'link' => $_POST['meyve_link'],
'sira' => $_POST['meyve_sira'],
'durum' => $_POST['meyve_durum'],
'resimyol' => $refimgyol
	));

$meyve_id=$_POST['meyve_id'];

	if ($update) {

		$resimsilunlink=$_POST['meyve_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/meyve-duzenle.php?meyve_id=$meyve_id&durum=ok");
	}
	else {
		Header("Location:../production/meyve-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE meyve SET
meyve_ad=:ad,
meyve_link=:link,
meyve_sira=:sira,
meyve_durum=:durum

WHERE meyve_id={$_POST['meyve_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['meyve_ad'],
'link' => $_POST['meyve_link'],
'sira' => $_POST['meyve_sira'],
'durum' => $_POST['meyve_durum']

	));

$meyve_id=$_POST['meyve_id'];

	if ($update) {
		Header("Location:../production/meyve-duzenle.php?meyve_id=$meyve_id&durum=ok");
	}
	else {
		Header("Location:../production/meyve-duzenle.php?durum=no");
	}
	}
	
	
}
if (isset($_POST['isbirlikcikaydet'])) {

 $uploads_dir = '../../rimg/isbirlikci';

 @$tmp_name = $_FILES['isbirlikci_resimyol']['tmp_name'];
 @$name = $_FILES['isbirlikci_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO isbirlikci SET
isbirlikci_ad=:ad,
isbirlikci_durum=:durum,
isbirlikci_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['isbirlikci_ad'],
'durum' => $_POST['isbirlikci_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/isbirlikci.php?durum=ok");
	}
	else {
		Header("Location:../production/isbirlikci.php?durum=no");
	}
	
}

if (@$_GET['isbirlikcisil']=="ok") {
	$sil=$db->prepare("DELETE from isbirlikci where isbirlikci_id=:isbirlikci_id");
	$kontrol=$sil->execute(array(
'isbirlikci_id' => $_GET['isbirlikci_id']

	));
	if ($kontrol) {
		
		Header("Location:../production/isbirlikci.php?durum=ok");
	}
	else {
		Header("Location:../production/isbirlikci.php?durum=no");
	}
}

if (isset($_POST['isbirlikciduzenle'])) {


if($_FILES['isbirlikci_resimyol']['size'] > 0){

	$uploads_dir = '../../rimg/isbirlikci';

 @$tmp_name = $_FILES['isbirlikci_resimyol']['tmp_name'];
 @$name = $_FILES['isbirlikci_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE isbirlikci SET
isbirlikci_ad=:ad,
isbirlikci_durum=:durum,
isbirlikci_resimyol=:resimyol

WHERE isbirlikci_id={$_POST['isbirlikci_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['isbirlikci_ad'],
'durum' => $_POST['isbirlikci_durum'],
'resimyol' => $refimgyol
	));

$isbirlikci_id=$_POST['isbirlikci_id'];

	if ($update) {

		$resimsilunlink=$_POST['isbirlikci_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/isbirlikci-duzenle.php?isbirlikci_id=$isbirlikci_id&durum=ok");
	}
	else {
		Header("Location:../production/isbirlikci-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE isbirlikci SET
isbirlikci_ad=:ad,
isbirlikci_durum=:durum

WHERE isbirlikci_id={$_POST['isbirlikci_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['isbirlikci_ad'],
'durum' => $_POST['isbirlikci_durum']

	));

$isbirlikci_id=$_POST['isbirlikci_id'];

	if ($update) {
		Header("Location:../production/isbirlikci-duzenle.php?isbirlikci_id=$isbirlikci_id&durum=ok");
	}
	else {
		Header("Location:../production/isbirlikci-duzenle.php?durum=no");
	}
	}
	
	
}
if (isset($_POST['subekaydet'])) {

 $uploads_dir = '../../simg/sube';

 @$tmp_name = $_FILES['sube_resimyol']['tmp_name'];
 @$name = $_FILES['sube_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$kaydet=$db->prepare("INSERT INTO sube SET
sube_ad=:ad,
sube_adres=:adres,
sube_durum=:durum,
sube_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=> $_POST['sube_ad'],
'adres' => $_POST['sube_adres'],
'durum' => $_POST['sube_durum'],
'resimyol' => $refimgyol

	));

	if ($insert) {
		Header("Location:../production/sube.php?durum=ok");
	}
	else {
		Header("Location:../production/sube.php?durum=no");
	}
	
}

if (@$_GET['subesil']=="ok") {
	$sil=$db->prepare("DELETE from sube where sube_id=:sube_id");
	$kontrol=$sil->execute(array(
'sube_id' => $_GET['sube_id']

	));
	if ($kontrol) {
		
		Header("Location:../production/sube.php?durum=ok");
	}
	else {
		Header("Location:../production/sube.php?durum=no");
	}
}

if (isset($_POST['subeduzenle'])) {


if($_FILES['sube_resimyol']['size'] > 0){

	$uploads_dir = '../../simg/sube';

 @$tmp_name = $_FILES['sube_resimyol']['tmp_name'];
 @$name = $_FILES['sube_resimyol']['name'];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $duzenle=$db->prepare("UPDATE sube SET
sube_ad=:ad,
sube_adres=:adres,
sube_durum=:durum,
sube_resimyol=:resimyol

WHERE sube_id={$_POST['sube_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['sube_ad'],
'adres' => $_POST['sube_adres'],
'durum' => $_POST['sube_durum'],
'resimyol' => $refimgyol
	));

$sube_id=$_POST['sube_id'];

	if ($update) {

		$resimsilunlink=$_POST['sube_resimyol'];
		unlink("../../$resimsilunlink");
		Header("Location:../production/sube-duzenle.php?sube_id=$sube_id&durum=ok");
	}
	else {
		Header("Location:../production/sube-duzenle.php?durum=no");
	}

	}else{
$duzenle=$db->prepare("UPDATE sube SET
sube_ad=:ad,
sube_adres=:adres,
sube_durum=:durum

WHERE sube_id={$_POST['sube_id']}");

$update=$duzenle->execute(array(
'ad'=> $_POST['sube_ad'],
'adres' => $_POST['sube_adres'],
'durum' => $_POST['sube_durum']

	));

$sube_id=$_POST['sube_id'];

	if ($update) {
		Header("Location:../production/sube-duzenle.php?sube_id=$sube_id&durum=ok");
	}
	else {
		Header("Location:../production/sube-duzenle.php?durum=no");
	}
	}
	
	
}

 ?>
