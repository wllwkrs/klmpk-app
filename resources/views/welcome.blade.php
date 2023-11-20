<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #219EBC; height: 100px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
            <img src="https://s3-alpha-sig.figma.com/img/fec1/ede2/1075ddce049087a9c1928f591319ba88?Expires=1700438400&Signature=al-CBcRIeBEJm4tmyJSpyfeyJN-qllWaSGpL8V-tefehj3T-kKGx5JSfxDx87zlqFdgYsvbZySY~azVGcB~NNSrjklywtL47eA8VNIk~CN-1l8282ymxEvx~UUE0q2w-WAEbbZcsUIpGIOVEEcRutfqq4ZrkLvjN5pOx~59CEg3HGJIjAuXfxZSa-6Z9mb5fzlKsUtlcGRxL3MP5aTRdA9BqG59H4hrjSEqBRBWDSRJVT1j7DzouZ7U054Dhr9PGLTn1~CIVG~zAcFUlt75Zn1tU4TgxU1FgRLltgsNad9ruGE1pywZG0~VokejMKhJ5MUnD0TyZAw2eicrA-HjNXQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="UPK Logo" style="width: 65px; height: 65px; margin-left: 0.05px; margin-right: 15px;">
            <div>
                <p style="color: white; font-size: 20px; font-weight: bold; margin: 0;">UPK Poliwangi</p>
                <p style="color: white; font-size: 16px; margin: 0;">Administrator</p>
            </div>
        </a>
    </div>
</nav>



    <!-- Sidebar -->
    <aside style="width: 250px; background-color: #219EBC; color: #fff; padding: 50px; position: fixed; height: 100%;">
        <ul style="list-style-type: none; padding: 0;">
            <li style="margin-bottom: 10px;">
                <img src="https://cdn-icons-png.flaticon.com/128/3917/3917014.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;"> 
                <a href="/dashboard" style="text-decoration: none; color: #fff;">Dashboard</a>
            </li>
            <li style="margin-bottom: 10px;">
                <img src="https://cdn-icons-png.flaticon.com/128/4862/4862473.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;">
                <a href="/inventaris" style="text-decoration: none; color: #fff;">Inventaris</a>
            </li>
            <li style="margin-bottom: 10px;">
                <img src="https://cdn-icons-png.flaticon.com/128/9217/9217313.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;">
                <a href="/laporan" style="text-decoration: none; color: #fff;">Laporan</a>
            </li>
            <li style="margin-bottom: 10px;">
                <img src="https://cdn-icons-png.flaticon.com/128/3524/3524659.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;"> 
                <a href="/pengaturan" style="text-decoration: none; color: #fff;">Pengaturan</a>
            </li>
        </ul>
    </aside>

            <!-- Main Content -->
            <main role="main" class="col-md-40 ml-sm-auto col-lg-50 px-1">
                <div class="container">
                    <div class="row">
                    <div style="padding-left: 185px;">
                        <h3 class="text-left" style="font-weight: bold;">Pengisian Data</h3>

                        <h5 class="text-left">Identitas Diri</h5>
                        
                        <form action="/simpandata" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="Nama" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Masukkan Nama" autofocus required>
                        </div>

                        <div class="form-group">
                            <label for="NIM">NIM (Nomor Induk Mahasiswa)</label>
                            <input type="text" class="form-control" id="nim" name="NIM" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="Nomor Telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="Nomor Telepon" name="Nomor_Telepon"style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="Kelas/Prodi">Kelas/Prodi</label>
                            <input type="text" class="form-control" id="Kelas/Prodi" name="Kelas/Prodi" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Kelas/Prodi" required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="Email" name="Email" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" id="Password" name="Password" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan
                            </button>
                        </div>
                        <small> Sudah punya akun? <a href="/login">Login</a> sekarang</small>
                        </form>
                        </div>
                    </div>
                    </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
