<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Sistem Penilaian</h4>
            </div>
            <div class="card-body">
                <h3>Form Nilai Siswa</h3>
                <hr />

                <form method="GET" action="form_nilai.php">
                    <div class="row">
                        <div class="offset-2"></div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="" size="30" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mata Kuliah</label>
                                <div class="col-sm-9">
                                    <select name="matkul" id="matkul" class="form-control">
                                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                                        <option value="BDI">Basis Data I</option>
                                        <option value="WEB">Pemrograman Web</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UTS</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nilai_uts" id="nilai_uts" class="form-control" value="" size="6" placeholder="Nilai UTS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai UAS</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nilai_uas" id="nilai_uas" class="form-control" value="" size="6" placeholder="Nilai UAS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nilai Tugas Praktikum</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nilai_praktikum" id="nilai_praktikum" class="form-control" value="" size="6" placeholder="Nilai Tugas Praktikum">
                                </div>
                            </div>

                            <div class="offset-3 pl-2">
                                <input type="submit" class="btn btn-primary" value="SIMPAN" name="proses">
                            </div>
                        </div>
                    </div>
                </form>

                <br />

                <?php
                $proses = $_GET['proses'];
                $nama_lengkap = $_GET['nama_lengkap'];
                $matkul = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_praktikum = $_GET['nilai_praktikum'];

                echo 'Proses : ' . $proses;
                echo '<br/>Nama Lengkap : ' . $nama_lengkap;
                echo '<br/>Mata Kuliah : ' . $matkul;
                echo '<br/>Nilai UTS : ' . $nilai_uas;
                echo '<br/>Nilai UAS : ' . $nilai_uas;
                echo '<br/>Nilai Tugas Praktikum : ' . $nilai_praktikum;
                ?>
            </div>
            <div class="card-footer">
                <h4>Develop By Reza Prasetyo &copy;2021</h4>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>