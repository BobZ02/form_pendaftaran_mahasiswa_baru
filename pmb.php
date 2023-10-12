<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prananda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .fakeimg {
            height: 200px;         
            background: #aaa;
        }
    </style>
</head>
<body>
    <div class="bg-primary container-fluid text-white p-3 text-center">
        <h1>Universitas Pembangunan Jaya</h1>
    <header>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <p><a href = "https://pmb.upj.ac.id/"><img src="sifupj.png" alt="sifupj" width="150" height="150"></a></p>
        <p>Seleksi Penerimaan Mahasiswa Baru</p>
        <p> Universitas Pembangunan Jaya<p> 
    </header>
    </div>
    <nav class="container-fluid navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" 
                data-bs-toggle="collapse" 
                data-bs-target="#menuutama"
                type="button"
                >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuutama">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jalur Seleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi</a>
                </li>
            </ul>
        </div>
    </nav>

    <body>
        <div>
        <img src= "upj.png" alt="sifupj" width="1473" height="500">
    </div>
    </body>

    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nik=input($_POST["nik"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $jk=input($_POST["jk"]);
        $kewarganegaraan=input($_POST["kewarganegaraan"]);
        $agama=input($_POST["agama"]);
        $nama_ibu=input($_POST["nama_ibu"]);
        $email=input($_POST["email"]);
        $no_telp=input($_POST["no_telp"]);
        $alamat=input($_POST["alamat"]);
        $kode_pos=input($_POST["kode_pos"]);
        $provinsi=input($_POST["provinsi"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["kecamatan"]);
        $pendidikan=input($_POST["pendidikan"]);
        $sekolah=input($_POST["sekolah"]);
        $nilai_raport=input($_POST["nilai_raport"]);
        $prog1=input($_POST["prog1"]);
        $prog2=input($_POST["prog2"]);

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (nama,nik,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,prog2) values
		('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$prog2')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
    }
    ?>
        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
                            $sql="select * from provinsi";
                            $hasil=mysqli_query($kon,$sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
                            <?php
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
            <script>
            $("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "konfirmasipmb.php",
                    data: "provinsi=" + id_provinsi,
                    success: function(data) {
                        $("#kabupaten").html(data);
                    }
                });
            });

            $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "konfirmasipmb.php",
                    data: "kabupaten=" + id_kabupaten,
                    success: function(data) {
                        $("#kecamatan").html(data);
                    }
                });
            });
            </script>
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan">
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport" class="form-control"
                            placeholder="Masukan Rata-rata nilai raport">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:</label>
                        <select class="form-control" name="prog1">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 2:</label>
                        <select class="form-control" name="prog2">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>