<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-MoniWP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts6/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="images/pky.jpg">
    <!-- Main css -->
    <link rel="stylesheet" href="daftarakun.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST"  action="proses-tambah-akun.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Buat Akun</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama_objek" id="nama_objek" placeholder="Masukkan Nama Rumah Makan/ Cafe"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="npwpd" id="npwpd" placeholder="Masukkan NPWPD"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Masukkan Alamat"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="pemasangan" id="pemasangan" placeholder="Masukkan Periode Pemasangan"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="user" id="user" placeholder="Password"/>
                            <span toggle="#user" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_user" id="re_user" placeholder="Repeat your password"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Sudah Memiliki Akun ? <a href="login.php" class="loginhere-link">Login Disini</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor6/jquery/jquery.min.js"></script>
    <script src="js6/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
