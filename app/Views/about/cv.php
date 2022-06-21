<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>

    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Curriculum Vitae</h1>
                <p class="lead">Santa Friska Manurung</p>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-md-8 py-5">
                <h1>Riwayat Hidup</h1>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data['nama']?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?=$data ['tempat_lahir'] ?></td>
                        
                    </tr>
                    <tr>
                        <td>tanggal_lahir</td>
                        <td>:</td>
                        <td><?=$data ['tanggal_lahir'] ?></td>
                        
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$data ['alamat'] ?></td>
                        
                    </tr>
                    <tr>
                        <td>No_Hp</td>
                        <td>:</td>
                        <td><?=$data ['nohp'] ?></td>
                        
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?=$data ['email'] ?></td>
                        
                    </tr>

            </div>
            <div class="col-md-4 py-5">
                <img src="/assets/img/img1.jpeg" widht="180" height="250">
            </div>
        </div>
    </main>

</body>

</html>