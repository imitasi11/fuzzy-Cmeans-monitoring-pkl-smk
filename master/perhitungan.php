<?php include "admin_header.php"?>
<style type="text/css">
	#content{
		margin-bottom: 20px;
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
  <form class="form-horizontal" enctype="multipart/form-data" action="../ron/perhitungan_disp.php" method="post">
    <div id="page">
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
     <table border="1">
      <tr>
        <td>nama</td>
        <td>absensi</td>
        <td>tugas</td>
        <td>c1 Baik</td>
        <td>c2 Cukup</td>
        <td>c3 Tidak Baik</td>
        <td>konklusi</td>
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
    </div>
</form>
</div>
<?php include "admin_footer.php"?>