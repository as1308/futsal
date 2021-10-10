<div class="col-md-3 pinggir">
  <div class="widget">
    <div class="widget-content">
<?php
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
    $BulanIndo = array("Januari", "Februari", "Maret",
               "April", "Mei", "Juni",
               "Juli", "Agustus", "September",
               "Oktober", "November", "Desember");
  
    $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
    $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
    $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
    
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
    return($result);
}
?>
<div class="tanggals"><?php 
echo(DateToIndo( date("Y-m-d"))); ?></div>
<br>
<br>
    
    <!-----------Kode CSS-------------->
<style type="text/css">

 .tanggals{ border: 2px inset White; background: #2980b9 none repeat scroll 0 0; padding: 5px; font-size: 14px; font-family: "Courier"; color: #fff; margin: 2px; display: block; text-align: center; }


 #clock {
    position: relative;
    width: 250px;
    height: 250px;
    margin-left: 14px;
    background: url(gambar/jQuery_Clock.png)no-repeat;
    list-style: none
    }

#sec, #min, #hour {
    position: absolute;
    width: 12px;
    height: 250px;
    top: -17px;
    left: 97px
    }

#sec {
    background: url(gambar/jQuery_second.png);
    z-index: 3
    }

#min {
    background: url(gambar/jQuery_minute.png);
    z-index: 2
    }

#hour {
    background: url(gambar/jQuery_hour.png);
    z-index: 1
    }
    .pinggir{
    	float: right;
    }
</style>



    </div> <!-- /widget-content -->
  </div> <!-- /widget -->  
</div> <!-- /col-md-3 -->

