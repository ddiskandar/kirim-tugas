<?php

/**
 * Formulir Kirim Tugas | SMK Plus Al-Farhan
 *
 *
 * @author   Dede Iskandar ( kobeuu@gmail.com )
 */

// Ambil pengaturan dari user
$config = require 'config.php';

// Alias
$kelas = $config['kelas'];
$mapel = $config['mapel'];
$tugas = $config['tugas'];
$file = $config['file'];
$ukuran_file = $config['ukuran'];
$kirim_ulang = $config['kirim_ulang'];
// $flash = $config['flash'];
$nama = '';

// Function
function flash($status, $message) {
  return "<div class=\"alert alert-$status role=\"alert\"> $message </div>";
}

if (!$kirim_ulang) {  $flashMessage = flash('info', "<strong>Head up!</strong> Kamu hanya diberikan satu kali kesempatan, pastikan file sudah siap untuk dikirim"); }


/* Upload File */
if(isset($_POST['submit'])){

  $nama = $_POST['nama'];
  $ext = explode(".", $_FILES['file']['name']);
  $extension = end($ext);
  $asal = $_FILES['file']['tmp_name'];
  $tujuan = "upload/$mapel";
  $tujuan_file = $tujuan.'/'.$kelas.'_'.$tugas.'_'.$nama.'.'.$extension;

  if ( $_FILES["file"]["error"] <= 0 ) {

    if ( $_FILES['file']['size'] < $ukuran_file ) {

      if ( $extension === $file ) {

        if ( $kirim_ulang  OR ! file_exists($tujuan_file)) {

          if(!is_dir($tujuan)) {
              mkdir($tujuan);
              chmod($tujuan, 0777);
          }

          move_uploaded_file($asal, $tujuan_file);

          $flashMessage = flash('success', "<strong>Yeayy!</strong> Selamat $nama, file tugas $tugas kamu sudah berhasil terkirim!" );

        } else { $flashMessage = flash('danger', "<strong>Hey!</strong> $nama sudah pernah kirim file, izin dulu ke guru supaya bisa kirim ulang lagi" );}
      } else { $flashMessage = flash('warning', "<strong>Warning!</strong> Format file tidak sesuai, kamu ngirim file .$extension, padahal harusnya .$file");}
    } else {$flashMessage = flash('warning', "<strong>Warning!</strong> Ukuran file terlalu besar!");}
  } else {$flashMessage = flash('danger', "<strong>Whoops!</strong> Ada yang salah, sepertinya kamu belum memilih file yang akan kirim, klik tombol browse dibawah");}
}


require_once 'index.view.php';
