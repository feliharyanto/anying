<?php

$page=$_GET['hal'];
switch($page){
	case 'login':
		$page="include 'includes/p_login.php';";
		break;
	case 'data_alternatif':
		$page="include 'admin/p_alternatif.php';";
		break;
	case 'update_alternatif':
		$page="include 'admin/p_alternatif_update.php';";
		break;
	case 'data_kriteria':
		$page="include 'admin/p_kriteria.php';";
		break;
	case 'update_kriteria':
		$page="include 'admin/p_kriteria_update.php';";
		break;
	case 'data_himpunan':
		$page="include 'admin/p_himpunan.php';";
		break;
	case 'update_himpunan':
		$page="include 'admin/p_himpunan_update.php';";
		break;
	case 'data_klasifikasi':
		$page="include 'admin/p_klasifikasi.php';";
		break;

	case 'print':
		$page="include 'admin/print.php';";
		break;

	case 'hasil':
		$page="include 'admin/p_hasil.php';";
		break;
	case 'analisa':
		$page="include 'admin/p_analisa.php';";
		break;
			case 'catatan':
		$page="include 'admin/p_catatan.php';";
		break;

	default:
		$page="include 'includes/front.php';";
		break;
}
$CONTENT_["main"]=$page;
?>