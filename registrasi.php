<?php 
	include "db/config.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM pelanggan WHERE username='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
    }
    else {
      
        mysql_query("INSERT INTO pelanggan (id_pelanggan, username, password, nama, nama_klub, email, alamat, no_telpon)
        VALUES ('$_POST[id_pelanggan]', '$_POST[username]', '$_POST[password]', '$_POST[nama]', '$_POST[nama_klub]', '$_POST[email]', '$_POST[alamat]', '$_POST[no_telpon]')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
    }
?>