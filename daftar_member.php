<html>
<head>
    <title>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL - Tutorial</title>   
	<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts --> 
<style type="text/css">
<!--
body {
	background-image: url(Gambar/bg.jpg);
	background-repeat: repeat;
}
.style3 {color: #00FF00}
.style4 {color: #FF0000}
-->
</style></head>
<body>
<h2 align="center" class="style3">Form Pendaftaran Registrasi Total Futsal </h2>
    <h4 align="center" class="style3">Silahkan Isi Data Pada Kolom Tersedia!</h4>
	<div class="jumbotron">
    <form action="registrasi.php" method="post" name="form1">        
        <table width="667" align="center">
            <tr>
				 <div class="form-group">
                <td width="138">Username</td>
                <td width="517"><input type="text" name="username" class="form-control" required="required"></td></div>
            </tr>
            <tr>
				<div class="form-group">
                <td width="138">Password</td>
                <td><input name="password" type="password" id="password" class="form-control" required="required"></td></div>
            </tr>
            <tr>
				<div class="form-group">
                <td>Nama</td>
                <td><input name="nama" type="text" id="nama" class="form-control" required="required"></td></div>
            </tr>
            </tr>
            <tr>
				<div class="form-group">
                <td>Nama Klub </td>
                <td><input name="nama_klub" type="text" id="nama_klub" class="form-control" required="required"></td></div>
            </tr>
            <tr>
				<div class="form-group">
                <td>Email</td>
                <td><input name="email" type="text" id="email" class="form-control" required="required"></td></div>
            </tr>
            <tr>
				<div class="form-group">
                <td>Alamat</td>
                <td><input name="alamat" type="text" id="alamat" class="form-control" required="required"></td></div>
            </tr>
            <tr>
				<div class="form-group">
              <td>No Telpon </td>
              <td><input name="no_telpon" type="text" id="no_telpon" class="form-control" required="required"></td></div>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"><div align="center">
                  <input type="submit" name="submit" value="Submit">
                  <a href="index.php"><span class="style4">BACK</span></a></div></td>
            </tr>
      </table>
    </form>
</body>
</html>