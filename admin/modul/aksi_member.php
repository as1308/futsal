<?php 

//INPUT USER-------------------------------------------------------------------------
$passwordz=md5($_POST['password']);
  mysql_query("INSERT INTO pelanggan                      
                         VALUES('',
                                '$_POST[username]',
                                '$passwordz',
                                '$_POST[nama]',
                                '$_POST[nama_klub]',
                                '$_POST[email]',
                                '$_POST[alamat]',
                                '$_POST[no_telpon]')");
                                 
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Telah Ditambahkan')
    window.location.href='index.php';
    </SCRIPT>");

// UPDATE USER------------------------------------------------------------------------- 
 {
 
    mysql_query("UPDATE pelanggan 
                         SET    username      = '$_POST[username]',
                                nama          = '$_POST[nama]',
                                nama_klub     ='$_POST[nama_klub]',
                                email         ='$_POST[email]',
                                alamat         = '$_POST[alamat]',
                               no_telpon          = '$_POST[no_telpon]'
                                WHERE id_pelanggan = '$_POST[kode]'"); 
    
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Pelanggan Telah Diubah')
    window.location.href='index.php?modul=pengunjung';
    </SCRIPT>");

  }

 {
 mysql_query("DELETE FROM pelanggan WHERE id_pelanggan= '$_GET[id]'");

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Telah dihapus')
    window.location.href='index.php?modul=pengunjung';
    </SCRIPT>");

}

//update password pelanggan
{
  $id_pengunjung=$_POST['id_user'];
  $password=md5($_POST['password']);

  mysql_query("UPDATE pelanggan set password='$password' WHERE id_pelanggan='$id_pengunjung'");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Password Pelanggan ".$id_user." Telah Diubah')
    window.location.href='index.php?modul=pengunjung';
    </SCRIPT>");
}

 ?>