<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output form - husni mubarok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="container mt-5">
            <center><h1>Data Siswa</h1></center>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Nama Lengkap Siswa</td>
                        <td><?php echo $_POST['name'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo date('d-F-Y', strtotime($_POST['tgl']));?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $_POST['gen'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat Rumah</td>
                        <td><?php echo $_POST['amt'];?></td>
                    </tr>
                    <tr>
                        <td>Email Siswa</td>
                        <td><?php echo $_POST['email'];?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td><?php echo $_POST['telps'];?></td>
                    </tr>
                    <tr>
                        <td>Jurusan yang diminati</td>
                        <td><?php echo $_POST['jrs'];?></td>
                    </tr>
                </tbody>
            </table>
    </section>
    <section class="container mt-5">
        <center><h1>Data Orangtua</h1></center>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Nama Orangtua</td>
                    <td><?php echo $_POST['nameo'];?></td>
                </tr>
                <tr>
                    <td>Hubungan</td>
                    <td><?php echo $_POST['hub'];?></td>
                </tr>
                <tr>
                    <td>Pekerjaan Orangtua</td>
                    <td><?php echo $_POST['job'];?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><?php echo $_POST['telpo'];?></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>