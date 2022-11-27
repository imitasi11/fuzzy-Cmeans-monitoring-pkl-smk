<?php include "admin_header.php"?>
<script src="https://kit.fontawesome.com/3c29de4c0a.js" crossorigin="anonymous"></script>
<style type="text/css">
	#content{
		margin-bottom: 20px;
	}
	table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

	</style>
<?php 
//buat variabel & array untuk menampung data
$keepChecking=true;
$mark=array();
$mark1=array();
$random=array();
$count=1;
$data_siswa=array();
$random_uik_awal=array();
$random_uik_iter=array();
$random_uik=array();
$uikv2=array();
$tampung=array();
$tampung2=array();
$matrix=array();
$uikvxij=array();
$newcluster=array();
$cluster=array();
$totalcluster=array();
$ptotal=array();
$bowl=array();
$cluster_tampil=array();
$tampil_c1=0;
$tampil_c2=0;
$tampil_c3=0;
$iterfinale=0;
$tampilc=array();
//ambil data dari database untuk pembuatan matrix
$query_mysql =  mysqli_query($connect,"SELECT * FROM tbtesting")or die(mysql_error());
  while($data = mysqli_fetch_array($query_mysql)){
  	$data_siswa[$count][1]=$data['idtesting'];
  	$data_siswa[$count][2]=$data['nis'];
  	$data_siswa[$count][3]=$data['nama'];
  	$data_siswa[$count][4]=$data['absensi'];
  	$data_siswa[$count][5]=$data['tugas'];
  	$count=$count+1;
  }
//matrix data
  for ($i=1; $i <=count($data_siswa) ; $i++) { 
    $mark[$i]=$data_siswa[$i][4]+$data_siswa[$i][5];
  	$matrix[$i][1] = $data_siswa[$i][4];
  	$matrix[$i][2] = $data_siswa[$i][5];
  }
$top_mark = array_search(max($mark),$mark); 
$low_mark = array_search(min($mark),$mark); 
//rules
$error=1;
$cluster_count=3;
$max_iter=10000;
$min_error=0.00001;

//generate random uik
for ($i=1; $i <= count($matrix) ; $i++) { 
  $keepChecking = true;
  while($keepChecking){
    $random[1] = rand(1, 60);
    $random[2] = rand(1, 80);
    $random[3] = rand(1, 60);
    $valuestotal = $random[1] + $random[2] + $random[3];
    if ($valuestotal === 100){
        $keepChecking = false;
    } 
}
	$random_uik[$i][1] = $random[1]/100;
	$random_uik[$i][2] = $random[2]/100;
	$random_uik[$i][3] = $random[3]/100;
	$random_uik_awal[$i][1] = $random_uik[$i][1];
	$random_uik_awal[$i][2] = $random_uik[$i][2];
	$random_uik_awal[$i][3] = $random_uik[$i][3];

}
for ($iter=1; $iter <=$max_iter ; $iter++) { 
 /////////////////////////////////////////

//pusat cluster
//hitung uik berpangkat
for ($i=1; $i <=count($random_uik) ; $i++) { 
	for ($j=1; $j <= count($random_uik[$i]) ; $j++) { 
    $random_uik_iter[$i][$j]=$random_uik[$i][$j];
		$uikv2[$i][$j]=pow($random_uik[$i][$j],2);
		//hitung total uik dengan transpose array uikv2, SUM
		//array_sum($tampung[]);
		$tampung[$j][$i]=$uikv2[$i][$j];
	}
}


//hitung uik * xij
for ($i=1; $i <=count($uikv2) ; $i++) { 
	for ($j=1; $j <= count($uikv2[$i]) ; $j++) { 
			$uikvxij[$i][$j][1] = $uikv2[$i][$j]*$matrix[$i][1];
			$uikvxij[$i][$j][2] = $uikv2[$i][$j]*$matrix[$i][2];
			//hitung total uik dengan transpose array uikvxij, SUM
			$tampung2[1][$j][$i] = $uikvxij[$i][$j][1];
			$tampung2[2][$j][$i] = $uikvxij[$i][$j][2];

	}
}

//new cluster
for ($i=1; $i <=3 ; $i++) { 
	for ($j=1; $j <=2 ; $j++) { 
		$newcluster[$i][$j]=(array_sum($tampung2[$j][$i]))/(array_sum($tampung[$i]));
	}
}
//fungsi objective
//cluster
for ($x=1; $x <= $cluster_count ; $x++) { 
	# code...

for ($i=1; $i <=count($matrix) ; $i++) { 
  	$cluster[$x][$i][1] = pow(($matrix[$i][1]-$newcluster[$x][1]),2);
  	$cluster[$x][$i][2] = pow(($matrix[$i][2]-$newcluster[$x][2]),2);
    $totalcluster[$x][$i]=array_sum($cluster[$x][$i]);
  }
}
//hitung p total
for ($i=1; $i <=count($matrix) ; $i++) { 
  $a=($totalcluster[1][$i]*$uikv2[$i][1]);
  $b=($totalcluster[2][$i]*$uikv2[$i][2]);
  $c=($totalcluster[3][$i]*$uikv2[$i][3]);
  $ptotal[$iter][$i]=$a+$b+$c;
}
//memperbaharui nilai Uik
for ($i=1; $i <=count($matrix) ; $i++) { 
  for($j=1; $j <=$cluster_count; $j++){
    $bowl[$i][$j]=array_sum($cluster[$j][$i]);
  }
  for($j=1; $j <=$cluster_count; $j++){
    $random_uik[$i][$j]=$totalcluster[$j][$i]/array_sum($bowl[$i]);
  }
  
}
////////////////////////////////////
if($iter>2){
 $error=array_sum($ptotal[$iter])-array_sum($ptotal[$iter-2]);
 $err=array_sum($ptotal[$iter])-array_sum($ptotal[$iter-1]);
 $error=sqrt(pow($error, 2)); 
  if($error<=$min_error){
    if($err<0){
    $iterfinale=$iter;
    $iter=$max_iter;
    //sort
   

    }
  }
 //if($iter % 2 == 0){
 //$error=array_sum($ptotal[$iter])-array_sum($ptotal[$iter-2]);
 //$error=sqrt(pow($error, 2)); 
 //if($error<=$min_error){
 //   $iter=$max_iter;
 // }
 //}
}elseif($iter==1){

}
}
for ($i=1; $i <=count($random_uik) ; $i++) { 
      if($i==$top_mark){
        for ($j=1; $j <= $cluster_count ; $j++) { 
          $mark1[$j]=$random_uik[$i][$j];
        }
        $tampil_c[1] = array_search(max($mark1),$mark1); 
      }elseif ($i==$low_mark) {
         for ($j=1; $j <= $cluster_count ; $j++) { 
          $mark1[$j]=$random_uik[$i][$j];
        }
        $tampil_c[3] = array_search(max($mark1),$mark1); 
      }
    }
    for ($i=1; $i <=3 ; $i++) { 
      if($i!=$tampil_c[1]&&$i!=$tampil_c[3]){
        $tampil_c[2]=$i;
      }
    }
    for ($i=1; $i <=count($random_uik) ; $i++) { 
      $cluster_tampil[$i][1]=$random_uik[$i][$tampil_c[1]];
      $cluster_tampil[$i][2]=$random_uik[$i][$tampil_c[2]];
      $cluster_tampil[$i][3]=$random_uik[$i][$tampil_c[3]];
    } 
  ?>
  <div id="main_content" style="padding: 21px;">
    <div id="page">
    <div id="content">
        <br>Data Awal<br>
      <table border="1">
        <tr>
          <td>NIM</td>
          <td>Nama</td>
          <td>Absensi</td>
          <td>Tugas</td>
        </tr>
          <?php 
        for ($i=1; $i <=count($data_siswa) ; $i++) { 
          echo "<tr>";?>
        <?php
      for ($j=1; $j <= count($data_siswa[$i]) ; $j++) { 
        ?>
        <td><?php echo $data_siswa[$i][$j];?></td>
        <?php
      }
      echo "</tr>";
    }
    ?>
        
        </table>
      </div>
      <div id="content">
        Iterasi Terakhir = <?php echo $iterfinale;?><br>Nilai Keanggotaan Pertama<br>
      <table border="1">
        <tr>
          <td>no</td>
          <td>c1 Baik</td>
          <td>c2 Cukup</td>
          <td>c3 Tidak Baik</td>
        </tr>
          <?php 
        for ($i=1; $i <=count($random_uik) ; $i++) { 
          echo "<tr>";?>
        <td><?php echo $i;?></td>
        <?php
      for ($j=1; $j <= count($random_uik[$i]) ; $j++) { 
        ?>
        <td><?php echo round($random_uik_awal[$i][$j],4);?></td>
        <?php
      }
      echo "</tr>";
    }
    ?>
        
        </table>
      </div>
      <div id="content">
        Nilai Keanggotaan iterasi ke <?php echo $iterfinale;?><br>
      <table border="1">
        <tr>
          <td>no</td>
          <td>c1 Baik</td>
          <td>c2 Cukup</td>
          <td>c3 Tidak Baik</td>
        </tr>
          <?php 
        for ($i=1; $i <=count($random_uik_iter) ; $i++) { 
          echo "<tr>";?>
        <td><?php echo $i;?></td>
        <?php
      for ($j=1; $j <= count($random_uik_iter[$i]) ; $j++) { 
        ?>
        <td><?php echo round($random_uik_iter[$i][$tampil_c[$j]],4);?></td>
        <?php
      }
      echo "</tr>";
    }
    ?>
        
        </table>
      </div>
      <div id="content">
    		MIU Kuadrat<br>
    		<table border="1">
      	<tr>
        	<td>no</td>
        	<td>c1 Baik</td>
        	<td>c2 Cukup</td>
        	<td>c3 Tidak Baik</td>
      	</tr>
      		<?php 
      	for ($i=1; $i <=count($uikv2) ; $i++) { 
      		echo "<tr>";?>
				<td><?php echo $i;?></td>
				<?php
			for ($j=1; $j <= count($uikv2[$i]) ; $j++) { 
				?>
				<td><?php echo round($uikv2[$i][$tampil_c[$j]],4);?></td>
				<?php
			}
			echo "</tr>";
		}
		?>
      	</table>
    	</div>
      <div id="content">
    		MIU Kuadrat X1 X2 X3<br>
    		<table border="1">
      	<tr>
        	<td>no</td>
        	<td>c1 Absen</td>
        	<td>c1 Tugas</td>
        	<td>c2 Absen</td>
        	<td>c2 Tugas</td>
        	<td>c3 Absen</td>
        	<td>c3 Tugas</td>
      	</tr>
      		<?php 
      	for ($i=1; $i <=count($uikvxij) ; $i++) { 
      		echo "<tr>";?>
				<td><?php echo $i;?></td>
				<?php
			for ($j=1; $j <= count($uikvxij[$i]) ; $j++) { 
				?>
				<td><?php echo round($uikvxij[$i][$tampil_c[$j]][1],4);?></td>
				<td><?php echo round($uikvxij[$i][$tampil_c[$j]][2],4);?></td>
				<?php
			}
			echo "</tr>";
		}
		?>
      	</table>
    	</div>
    	<div id="content">
    		Pusat Cluster<br>
    		<table border="1">
      	<tr>
        	<td>#</td>
        	<td>Absen</td>
        	<td>Tugas</td>
      	</tr>
      		<?php 
      	for ($i=1; $i <=count($newcluster) ; $i++) { 
      		echo "<tr>";?>
				<td>C<?php echo $i;?></td>
				<?php
			for ($j=1; $j <= count($newcluster[$i]) ; $j++) { 
				?>
				<td><?php echo round($newcluster[$tampil_c[$i]][$j],4);?></td>
				<?php
			}
			echo "</tr>";
		}
		?>
      	</table>
    	</div>
      <div id="content">
    		Nilai L<br>
    		<table border="1">
      	<tr>
        	<td>No</td>
        	<td>c1 Absen</td>
        	<td>c1 Tugas</td>
        	<td>c2 Absen</td>
        	<td>c2 Tugas</td>
        	<td>c3 Absen</td>
        	<td>c3 Tugas</td>
      	</tr>
      		<?php 
      	for ($i=1; $i <=count($matrix) ; $i++) { 
      		echo "<tr>";?>
				<td><?php echo $i;?></td>
				<?php
			for ($j=1; $j <= $cluster_count ; $j++) { 
				?>
				<td><?php echo round($cluster[$tampil_c[$j]][$i][1],4);?></td>
				<td><?php echo round($cluster[$tampil_c[$j]][$i][2],4);?></td>
				<?php
			}
			echo "</tr>";
		}
		?>
      	</table>
    	</div>
      <div id="content">
    		Nilai LT<br>
    		<table border="1">
      	<tr>
        	<td>No</td>
        	<td>c1</td>
        	<td>c2</td>
        	<td>c3</td>
        	<td>Total</td>
      	</tr>
      		<?php 
      	for ($i=1; $i <=count($matrix) ; $i++) { 
      		echo "<tr>";?>
				<td><?php echo $i;?></td>
				<?php
			for ($j=1; $j <= $cluster_count ; $j++) { 
				?>
				<td><?php echo round($totalcluster[$tampil_c[$j]][$i]*$uikv2[$i][$tampil_c[$j]],4);?></td>
				<?php
			}?>
				<td><?php echo round($ptotal[$iterfinale][$i],4);?></td>
				<?php
			echo "</tr>";
		}
		?>
      	</table>
    	</div>
      <div id="content">
    	Hasil Akhir<br>
     <table border="1" id="">
      <tr>
        <th>nama</th>
        <th>absensi</th>
        <th>tugas</th>
        <th>c1 Baik</th>
        <th>c2 Cukup</th>
        <th>c3 Tidak Baik</th>
        <th>konklusi</th>
      </tr>
      <?php for ($i=1; $i <=count($random_uik) ; $i++) { 
        echo "<tr>";
        $konklusi = array_search(max($cluster_tampil[$i]),$cluster_tampil[$i]);?>
        <td><?php echo $data_siswa[$i][3]?></td>
        <td><?php echo $data_siswa[$i][4]?></td>
        <td><?php echo $data_siswa[$i][5]?></td>
        <?php for ($j=1; $j <=$cluster_count ; $j++) { ?>
          <td><?php echo round($cluster_tampil[$i][$j],4);?></td>
        <?php }?>
        <td><?php echo $konklusi;?></td>
        <?php
        echo "<tr>";
      }?>
       
     </table>
    	</div>
      <div id="content" style="width:900px;">
      <?php 
$mark=array();
$value=1;
for ($i=1; $i <=count($random_uik) ; $i++) { 
  $mark[$i][1]=$data_siswa[$i][2];
  $mark[$i][2]=$data_siswa[$i][3];
  $mark[$i][3]=$data_siswa[$i][4];
  $mark[$i][4]=$data_siswa[$i][5];
  for ($j=1; $j <=$cluster_count ; $j++) {
    $value=4+$j;
  $mark[$i][$value]=round($cluster_tampil[$i][$j],4);
  }
  $mark[$i][8]=array_search(max($cluster_tampil[$i]),$cluster_tampil[$i]);
  
}

?>
<table id="myTable">
  <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
   <th onclick="sortTable(0)">NIM <i class="fas fa-sort"></i></th>
   <th onclick="sortTable(1)">Name <i class="fas fa-sort"></i></th>
    <th>absensi</th>
        <th>tugas</th>
        <th>c1 Baik</th>
        <th>c2 Cukup</th>
        <th>c3 Tidak Baik</th>
        <th  onclick="sortTable(7)">konklusi<i class="fas fa-sort"></i></th>
  </tr>
  <?php 
  for($i=1;$i<=count($mark);$i++){
    echo "<tr>";
    for($j=1;$j<=count($mark[$i]);$j++){?>
       <td><?php echo $mark[$i][$j]?></td>
<?php } 
echo "</tr>";
 } ?>    
</table>
        
  </div>
  </div>
  </div>


<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
function sortTableN() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (Number(x.innerHTML) > Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>