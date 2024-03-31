<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input form - husni mubarok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/tugas_coding/input_form/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="form_hasil.php" method="post">
        <header>
            <section class="subheader">
                <h1>Pendaftaran SMKN 46 Jakarta</h1>
            </section> 
        </header>
        <br><br>
        <!--DATA PRIBADI-->
        <section class="subheader">
            <h2>Informasi Siswa</h2>
        </section>
        <p>
            <section class="container">
                <section class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                    <label for="name">Nama Lengkap Siswa</label>
                </section>
            </section>
            <br>
            <section class="container">
                <section class="form-floating">
                    <input type="date" class="form-control" id="tngl" name="tgl" placeholder="Masukkan Tanggal">
                    <label for="tgl">Tanggal Lahir</label>
                </section>
            </section>
            <br>
            <section class="container">
                <label for="gen">Jenis Kelamin :</label>
                <select class="form-select" id="gen" name="gen" aria-label="Large select example" aria-placeholder="Pilih jurusan" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </section>
            <br>
            <section class="container">
                <section class="form-floating">
                    <input type="text" class="form-control" id="amt" name="amt" placeholder="Masukkan Alamat">
                    <label for="amt">Alamat Rumah</label>
                </section>
            </section>
            <br></br>
            <section class="container">
                <section class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                    <label for="amt">Email Siswa</label>
                </section>
            </section>
            <br>
            <section class="container">
                <section class="form-floating">
                    <input type="telps" class="form-control" id="telps" name="telps" placeholder="Masukkan Nomor">
                    <label for="telps">No. Telepon</label>
                </section>
            </section>
            <br>
            <section class="container">
                <label for="jrs">Jurusan yang diminati : </label>
                <select class="form-select" aria-label="Default select example" id="jrs" name="jrs" aria-placeholder="Pilih jurusan" required>
                <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                <option value="Bisnis Retail">Bisnis Retail</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Manajemen Perkantoran Lembaga Bisnis">Manajemen Perkantoran Lembaga Bisnis</option>
                <option value="Pengembangan Perangkat Lunak dan Game">Pengembangan Perangkat Lunak dan Game</option>
                </select>
            </section>
        </p>
        <br><br>

        <!--DATA ORANGTUA-->
        <center><h2>Informasi Orangtua</h2></center>
        <p>
            <section class="container">
                <section class="form-floating">
                    <input type="text" class="form-control" id="nameo" name="nameo" placeholder="Masukkan Nama">
                    <label for="nameo">Nama Orangtua</label>
                </section>
            </section>
            <br>
            <section class="container">
                <label for="hub">Hubungan</label>
                <select class="form-select" aria-label="Default select example" id="hub" name="hub" aria-placeholder="Pilih jurusan" required>
                <option value="Ayah">Ayah</option>
                <option value="Ibu">Ibu</option>
                <option value="Kakek">Kakek</option>
                <option value="Nenek">Nenek</option>
                <option value="Paman/Bibi">Paman/Bibi</option>
                </select>
            </section>
            <br>
            <section class="container">
                <section class="form-floating">
                    <input type="text" class="form-control" id="job" name="job" placeholder="Masukkan Pekerjaan">
                    <label for="job">Pekerjaan Oranguta</label>
                </section>
            </section>
            <br>
            <section class="container">
                <section class="form-floating">
                    <input type="text" class="form-control" id="telpo" name="telpo" placeholder="Masukkan Telepon">
                    <label for="telpo">No. Telepon</label>
                </section>
            </section>
            <br>
            <section class="container">
                <button type="submit" class="btn btn-primary" >Kirim</button>
                <button type="reset" class="btn btn-outline-warning">Kosongkan Formulir</button>
            </section>
        </p>
    </form>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

