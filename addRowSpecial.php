<?php

	session_start();
	if (is_null($_SESSION['prijavljen'])) {
		header('Location: ../narudzbenica/login.php');
	}

	require_once 'connection.php';

	$conn = OpenCon();

	$korisnik = $_SESSION['prijavljen'];
	$ar = explode("#", $korisnik, 2);
	$ar[1] = rtrim($ar[1], "#");
	$idKorisnika = $ar[0];
	$imeKorisnika = $ar[1];

	$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
	$arS = explode("###", $stavka, 18);
	$arS[17] = rtrim($arS[17], "###");

	$odOsOu = $arS[0];
	$vrstaSociva = $arS[1];
	$dizajn = $arS[2];
	$visina = $arS[3];
	$baza = $arS[4];
	$indeks = $arS[5];
	$materijal = $arS[6];
	$precnik1 = $arS[7];
	$precnik2 = $arS[8];
	$sph = $arS[9];
	$cyl = $arS[10];
	$ugao = $arS[11];
	$add = $arS[12];
	$jm = $arS[13];
	$kolicina = $arS[14];
	$tretman1 = $arS[15];
	$tretman2 = $arS[16];
	$napomena = $arS[17];

	if ($precnik2 == "") {
		$precnik = $precnik1;
	} else if ($precnik1 == "") {
		$precnik = $precnik2;
	} else {
		$precnik = $precnik1 . "/" . $precnik2;
	}


	$upit = "insert into narudzbenica (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,napomena) values ('$idKorisnika','Specijala','$odOsOu', '$vrstaSociva','$dizajn','$visina','$baza','$indeks','$materijal','$precnik','$sph','$cyl','$ugao','$add','$jm','$kolicina','$tretman1','$tretman2','$napomena')";

	$rezultat = mysqli_query($conn, $upit);
	if (mysqli_error($conn)) {
		die(mysqli_error($conn));
	}
	header('Location: ../narudzbenica/specijala.php');
	CloseCon($conn);
