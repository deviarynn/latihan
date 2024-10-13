<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title> <!--judul pada halaman login-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <div class="judul">
        <center><h1>DATA PENDUDUK KABUPATEN CILACAP</h1></center></div><!--judul yang muncul pada halaman login-->
</head>
<style> 
.judul{ 
    padding: 70px;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 2px;
    }

body{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/bg.jpg);
  background-size: cover;
}
.login1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 40px;
  background: rgba(0, 0, 0, 0.6);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}
.login1 h2{
  margin: 0 0 30px;
  padding: 0px;
  color: #fff;
  text-align: center;
}
.login1 .unamepw{
  position: relative;
}
.login1 .unamepw input{
  width: 100%;
  padding: 10px 0px;
  font-size: 16px;
  color: #fff;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  outline: none;
  background: transparent;
  border-bottom: 1px solid #fff;
}
.login1 .unamepw label{
  position: absolute;
  top: 0;
  left: 0;
  letter-spacing: 1px;
  padding: 1px 0px;
  font-size: 14px;
  color: #fff;
  transition: .4s;
}
.login1 .unamepw input:focus ~ label,
.login1 .unamepw input:valid ~ label{
  top: -18px;
  left: 0px;
  color: #03a9f4;
  font-size: 12px;
}
.login1 input[type="submit"]{
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: #227be3;
  padding: 10px 20px;
  border-radius: 5px;
  cursor:pointer;
}
</style>
<body>
<form method="POST" action="halaman-utama.php"> <!--hyperlink menuju halaman utama-->
  <div class="login1">
    <h2>LOGIN</h2>
      <div class="unamepw">
            <input type="text" name="user" required title="Silahkan Isi Nama User">
            <label>Username</label> <!--tabel user yang akan diisikan-->
      </div>
      <div class="unamepw">
            <input type="password" name="pass" minlength="1" required title="Minimal sandi 8 karakter">
            <label>Password</label> <!--tabel berisi pasword yang diinputkan-->
      </div> <!--tombol untuk mengirim pasword dan user-->
        <input type="submit" name="submit">
        </form>
    </form>
  </div>
</body>
</html>