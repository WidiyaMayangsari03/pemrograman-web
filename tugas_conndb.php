<?php
$servername = "localhost";
$username = "root";
$password = "";
$nama_db = "web_date";

$conn = mysqli_connect($servername, $username, $password, $nama_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

$tgl = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$bln = isset($_POST['bln']) ? $_POST['bln'] : '';
$thn = isset($_POST['thn']) ? $_POST['thn'] : '';

$sql="INSERT INTO formdate SET date='$tgl-$bln-$tgl'";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
	}

$sql = "Select * FROM formdate";		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
	}

echo "<table border ='2px'><tr><th>Date</th></tr> <tbody>";			
while ($row = mysqli_fetch_assoc($query)){
	echo '<tr> <th>'.$row['date'].'</th></tr>';}
echo "<tr><th> <a href='tugas_formdate.php'><button type='submit' value='Kembali'>Kembali</button></a></th></tr></tbody></table>";
?>
