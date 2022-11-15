<?php include "admin_header.php"?>
<div id="page" style="padding: 30px;">
			<h2 class="title"><a href="#">Data Kriteria</a></h2><hr />
			<div style="clear: both;">&nbsp;
              <table border="1" align="center">
                <tr align="Left">
                  <td width="5"><strong>No </strong></td>
                  <td width="50"><strong>NIS</strong></td>
                  <td width="50"><strong>Nama</strong></td>
                  <td width="50"><strong>Absensi</strong></td>
                  <td width="50"><strong>Tugas dan Keaktifan</strong></td>
                  <td colspan="2"><strong>Action</strong></td>
                </tr>
                	<?php
					include "/connections/ron.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM tbtesting");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
                    
				<tr align="center">
                    <td><?php echo $kd_bahan; ?></td>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['absensi']; ?></td>
                    <td><?php echo $row['tugas']; ?></td>
                    <td width="33"><a href="editkriteria.php?no=<?php echo $row['idtesting']; ?>" ><img src="images/edit.gif" alt="" width="58" height="20" /></a></td>
                    <td width="32"><a href="deletekriteria.php?no=<?php echo $row['idtesting']; ?>"><img src="images/delete.gif" alt="" width="58" height="20" /></a></td>
                  </tr>
                  <?php }  ?>
              </table>
            </div>
	  </div>
		<div class="post">
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<p>&nbsp;</p>
			</div>
</div>
		<div class="post">
			<h2 class="title">&nbsp;</h2>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div> 
<!-- end #content --><!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>

<?php include "admin_footer.php"?>