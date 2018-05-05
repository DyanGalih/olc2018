<?php
/**
 * Tugas buat database ktp, table profile, field = properti class profile
 */
include_once "profile.php";

$objProfile = new Profile;
$objProfile->setNama($_POST['nama']);

echo $objProfile->getNama();