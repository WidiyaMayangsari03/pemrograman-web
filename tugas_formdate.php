<?php
$array_bulan = array(1=>"Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Dec");

echo "<form action='tugas_conndb.php' method='POST'>";
            echo "<table>";
                echo "<tr><th>Tanggal Lahir</th>"; 
	
				echo "<th>Tanggal</th>";
				echo "<th><select name='tgl'>";
					echo "<option value=1 selected>1</option>";
					for ($tgl=2; $tgl<=31; $tgl++){
					echo "<option value=\"".$tgl."\" selected>".$tgl."</option>";
					}
				echo "</select></th>";
				
				echo "<th>Bulan</th>";
				echo "<th><select name='bln'>";
					echo "<option value=Januari selected>Jan</option>";
					for($bln=2; $bln<=12; $bln++){
					echo "<option value=\"".$bln."\"selected>".$array_bulan[$bln]."</option>";
					}
				echo "</select></th>"; 
				
				echo "<th>Tahun</th>";
				echo "<th><select name='thn'>";
					echo "<option value=1990 selected>1990</option>";
					for ($thn=1991; $thn<=2017; $thn++){
					echo "<option value=\"".$thn."\" selected>".$thn."</option>";
					}
				echo "</select></th></tr>"; 
				
                echo "<tr><th><button type='submit' value='Simpan'>Simpan</button></th></tr>";
            echo "</table>";
        echo "</form>";	
?>