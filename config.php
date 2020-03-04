<?php
return [

  /**
   * ------------------------------------------------------------------------
   *  Pengaturan User
   * ------------------------------------------------------------------------
   *
   *  file hasil upload akan disimpan sesuai pengaturan berikut
   *  upload/{mapel}/{kelas}_{tugas}_{nama siswa}
   */

  /*
  |--------------------------------------------------------------------------
  | Mata Pelajaran
  |--------------------------------------------------------------------------
  | Mata Pelajaran untuk kirim file
  |
  */
  'mapel' => 'Desain Grafis Percetakan',

  /*
  |--------------------------------------------------------------------------
  | Kelas
  |--------------------------------------------------------------------------
  | rombongan belajar siswa
  |
  | misalnya 'X.1 Multimedia' atau 'XI.2 Pemasaran'
  */
  'kelas' => 'XI.1 Multimedia',

  /*
  |--------------------------------------------------------------------------
  | Tugas Ke
  |--------------------------------------------------------------------------
  |
  | format penulisan : 1 atau 'satu'
  */
  'tugas' => 'Photoshop 1',

  /*
  |--------------------------------------------------------------------------
  | Format File
  |--------------------------------------------------------------------------
  | format file yang diizinkan untuk dikirim
  |
  | misalnya 'mp4','zip','rar','pdf','docx','jpg','png'
  */
  'file' => 'css',

  /*
  |--------------------------------------------------------------------------
  | Ukuran Maksimal
  |--------------------------------------------------------------------------
  | Ukuran maksimal file yang dapat dikirim
  |
  | Pastikan sudah mengatur bagian berikut di file php.ini
  | upload_max_filesize, post_max_size,
  | max_input_time, max_execution_time
  |
  | ditulis dalam satuan Bytes, 1 MB = 1000000 Bytes
  */
  'ukuran' => 100000000,

  /*
  |--------------------------------------------------------------------------
  | Kirim Ulang
  |--------------------------------------------------------------------------
  | dapat digunakan untuk mencegah kecurangan siswa mengirim kembali file
  | tugas yang telah direvisi
  |
  | true atau false
  */
  'kirim_ulang' => false

];
