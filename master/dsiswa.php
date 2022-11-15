<?php include "admin_header.php"?>
<div id="main_content" style="padding: 30px;">
  <div id="content" class="site-content content-ch2 ">
    <div id="primary" class="content-area">
      <main id="main" class="site-main hc2-content-single" role="main">
      <div class="container">
        <div class="pub-info" itemprop="text">
          <!-- Section: intro -->
          <div id="page">
            <h2 class="title"><a href="#">Data Siswa</a></h2>
            <hr />
            <div style="clear: both;">&nbsp;
                <table border="1" align="center">
                  <tr align="Left">
                    <td width="5"><strong>No</strong></td>
                    <td width="5"><strong>NIS</strong></td>
                    <td width="50"><strong>NISN</strong></td>
                    <td width="50"><strong>Kelas</strong></td>
                    <td width="50"><strong>Nama</strong></td>
                    <td width="50"><strong>Jenis Kelamin</strong></td>
                    <td width="50"><strong>Jurusan</strong></td>
                    <td width="50"><strong>Nama DUDI</strong></td> 
                    <td width="50"><strong>Alamat DUDI</strong></td>
                    <td colspan="2"><strong> Action</strong></td>
                  </tr>
                  <?php
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM daftar");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
                  <tr align="center">
                    <td><?php echo $kd_bahan; ?></td>
                    <td><?php echo $row['NIS']; ?></td>
                    <td><?php echo $row['NISN']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['Jeniskelamin']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td><?php echo $row['namadudi']; ?></td>
                    <td><?php echo $row['alamatdudi']; ?></td>     
                    
                    
                    
                    <td width="33"><a href="editsiswa.php?no=<?php echo $row['NIS']; ?>" ><img src="images/edit.gif" alt="" width="58" height="20" /></a></td>
                    <td width="32"><a href="deletesiswa.php?no=<?php echo $row['NIS']; ?>"><img src="images/delete.gif" alt="" width="58" height="20" /></a></td>
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
        <!-- end #content -->
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>
      </div>
      <div id = "footer"> </div>
    </div>
  </div>
</div>


<?php include "admin_footer.php"?>