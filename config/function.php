<?php
function uploadFoto($file)
{
  // ambil nama file dan ekstensinya
  $nama_file = $file['name'];
  $ekstensi_file = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

  // lokasi file sementara pada server
  $tmp_file = $file['tmp_name'];

  // generate nama baru untuk file yang akan diupload
  $nama_baru = uniqid() . '.' . $ekstensi_file;

  // lokasi folder untuk menyimpan file yang diupload
  $folder_upload = "../../../image/";

  // pindahkan file yang diupload ke folder yang telah ditentukan
  move_uploaded_file($tmp_file, $folder_upload . $nama_baru);

  // return nama file yang telah diupload
  return $nama_baru;
}
