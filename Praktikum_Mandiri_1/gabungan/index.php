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
    <div class="row mx-1">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>Sistem Penilaian</h4>
                </div>
                <div class="card-body">
                    <h3>Form Nilai Siswa</h3>
                    <hr />

                    <form method="POST" action="index.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" id="nama" class="form-control" value="" size="30" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIM</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nim" id="nim" class="form-control" value="" size="10" placeholder="NIM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Mata Kuliah</label>
                                    <div class="col-sm-8">
                                        <select name="matkul" id="matkul" class="form-control">
                                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                                            <option value="BDI">Basis Data I</option>
                                            <option value="WEB">Pemrograman Web</option>
                                            <option value="UI/UX">User Interface / User Experience</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai UTS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="uts" id="uts" class="form-control" value="" size="6" placeholder="Nilai UTS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai UAS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="uas" id="uas" class="form-control" value="" size="6" placeholder="Nilai UAS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai Tugas Praktikum</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="tugas" id="tugas" class="form-control" value="" size="6" placeholder="Nilai Tugas Praktikum">
                                    </div>
                                </div>

                                <div class="offset-4 pl-2">
                                    <input type="submit" class="btn btn-info" value="SIMPAN" name="proses">
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                    $proses = $_POST['proses'];
                    $nama = $_POST['nama'];
                    $nim = $_POST['nim'];
                    $matkul = $_POST['matkul'];
                    $uts = $_POST['uts'];
                    $uas = $_POST['uas'];
                    $tugas = $_POST['tugas'];

                    $ns1 = ['id' => 1, 'nama' => 'Ahmad Zihan Gibran', 'nim' => '01101', 'matkul' => 'DDP', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
                    $ns2 = ['id' => 2, 'nama' => 'Neng Vinka Anindhita', 'nim' => '01121', 'matkul' => 'WEB', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
                    $ns3 = ['id' => 3, 'nama' => 'Andrean Bagus Saputra', 'nim' => '01130', 'matkul' => 'BDI', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
                    $ns4 = ['id' => 4, 'nama' => 'Yhudi Pradana', 'nim' => '01134', 'matkul' => 'UI/UX', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

                    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                    if (isset($_POST['proses'])) {
                        $ns5 = ['id' => 5, 'nama' => $_POST['nama'], 'nim' => $_POST['nim'], 'matkul' => $_POST['matkul'], 'uts' => $_POST['uts'], 'uas' => $_POST['uas'], 'tugas' => $_POST['tugas']];

                        array_push($ar_nilai, $ns5);
                    }
                    ?>
                </div>
                <div class="card-footer">
                    <h6 class="text-center">Develop By Reza Prasetyo &copy;2021</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr class="text-center text-white bg-info">
                        <th style="width: 10px;">No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Mata Kuliah</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($ar_nilai as $ns) {
                        echo '<tr class="text-center"> <td>' . $nomor . '</td>';
                        echo '<td class="text-left">' . $ns['nama'] . '</td>';
                        echo '<td>' . $ns['nim'] . '</td>';
                        echo '<td>' . $ns['matkul'] . '</td>';
                        echo '<td>' . $ns['uts'] . '</td>';
                        echo '<td>' . $ns['uas'] . '</td>';
                        echo '<td>' . $ns['tugas'] . '</td>';

                        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                        echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                        echo '</tr>';
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>