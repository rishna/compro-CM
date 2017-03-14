<?php
 
$server = "localhost" ;
$username = "procodecg" ;
$password = "procodecg" ;
$database = "procodecgware";
 
//Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");
 
echo '<h3>Data Visitor</h3>
<table>
<tr>
<th>No</th>
<th>ID</th>
<th>NAMA</th>
<th>EMAIL</th>
<th>NO.TELP</th>
<th>MESSAGE</th>
</tr>
<tr>';
 
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
$tampil = "SELECT * from Visitors";
//perintah menampilkan data dikerjakan
$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel user
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <td>".$i."</td>
 <td>".$data['id_visitors']."</td>
 <td>".$data['nama']."</td>
 <td>".$data['email']."</td>
 <td>".$data['no_telp']."</td>
 <td>".$data['message']."</td>
 </tr>";
 }
echo '</table>';
 
?>