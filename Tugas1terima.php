<?php
if(isset($_POST["submit"])){
 $suhu=$_POST['suhu'];
 $konversi=$_POST['konversi'];

 if($konversi=="celcius ke fahrenhait"){
     $hasil=(9/5)*$suhu+32;
     echo "Hasil konversi celcius ke fahrenhait : <br>";
     echo "°F = (9/5) x °C + 32 <br>";
     echo "°F = (9/5) x $suhu + 32 <br>" ;
     echo "°F = $hasil";

 }else if($konversi=="fahrenhait ke celcius"){
     $hasil=(5/9)*($suhu-32);
     echo "Hasil Konversi Fahrenhait ke celcius : <br>";
     echo "°C = (5/9) x (°F - 32) <br>";
     echo "°C = (5/9) x ($suhu - 32) <br>" ;
     echo "°C = $hasil";
 }else{
     echo "Piih dulu konversinya";
 }
}
?> 