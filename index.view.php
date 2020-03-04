<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kirim Tugas</title>

	    <link rel="stylesheet" href="bootstrap.css">

    </head>

    <body>
        <div class="container">
          <h1>Formulir Kirim Tugas <small>| SMK Plus Al-Farhan</small></h1>
          <hr>
          <?php echo $flashMessage; ?>

          <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" autofocus="autofocus" placeholder="Tulis semua nama lengkap kelompok bila tugas dikerjakan secara berkelompok" value="<?php echo $nama ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="kelas" class="col-sm-2 control-label">Kelas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" value="<?php echo $kelas ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="mapel" class="col-sm-2 control-label">Mata Pelajaran</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="mapel" value="<?php echo $mapel ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="tugas" class="col-sm-2 control-label">Tugas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tugas" value="<?php echo $tugas ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="file" class="col-sm-2 control-label">File Input</label>
              <div class="col-sm-10">
                <input type="file" name="file">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" value="submit"class="btn btn-default">Kirim</button>
              </div>
            </div>
          </form>
        </div>
    </body>
</html>
