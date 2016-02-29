<?php
include ('asset/html/head.html');

$page = isset($_GET['page']);
if(!$page) {
	include ('asset/html/header1.html');
		include ('asset/html/content-home.html');
	include ('asset/html/home-sub-footer.html');
	include ('asset/html/footer.html');
	include ('asset/html/end.html');
}else {
	$pager = ($_GET['page']);
	if ($pager == 'list' || $pager == 'detail' || $pager == 'terimakasih' || $pager == 'panelakun' || $pager == 'informasiakun' || $pager == 'informasialamat') {
		include ('asset/html/header1.html');
		include ('asset/html/navbar.html');
		if ($pager == 'list') {
			include ('asset/html/content-list.html');
		}elseif ($pager == 'detail') {
			include ('asset/html/content-detail.html');
		}elseif ($pager == 'element') {
			include ('asset/html/element.html');
		}elseif ($pager == 'terimakasih') {
			include ('asset/html/content-success.html');
		}elseif ($pager == 'panelakun') {
			include ('asset/html/panel-akun.html');
		}elseif ($pager == 'informasiakun') {
			include ('asset/html/informasi-akun.html');
		}elseif ($pager == 'informasialamat') {
			include ('asset/html/informasi-alamat.html');
		}else{
			include ('asset/html/blank.html');
		}
	}elseif ($pager == 'login' || $pager == 'payment' || $pager == 'signup' || $pager == 'cart') {
		include ('asset/html/header2.html');
		if ($pager == 'login') {
			include ('asset/html/content-loginsignup.html');
		}elseif ($pager == 'payment') {
			include ('asset/html/content-payment.html');
		}elseif ($pager == 'signup') {
			include ('asset/html/content-signup.html');
		}elseif ($pager == 'cart') {
			include ('asset/html/content-cart.html');
		}else{}
	}else{}
	include ('asset/html/home-sub-footer.html');
	include ('asset/html/footer.html');
	include ('asset/html/end.html');
}


?>