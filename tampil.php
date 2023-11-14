<?php
   include_once('config.php'); 
   ///hapus kelas
   $id = isset($_GET['id'])?$_GET['id']:"";
   if($id !=""){
       $id = isset($_GET['id'])?$_GET['id']:"";
       $hapus = mysqli_query($conn,"delete from tbsiswa where id=$id");
       if($hapus){
           echo "<script>alert('hapus berhasil');location.href='?hal=tampil';</script>";
       
       }
   }

   $sql = mysqli_query($conn, "select * from tbsiswa order by nama_siswa ASC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP dan MYSQL</title>
</head>
<body>
    <a href="?hal=tambah">Tambah Data</a><br><br>

    <table border=1 width="80%" cellspacing=0>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>NISN</th>
            <th>NAMA SISWA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>AGAMA</th>
            <th>JENIS KELAMIN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        <?php
            $no = 1;
            while($baris=mysqli_fetch_array($sql)){
       ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$baris['nis']?></td>
            <td><?=$baris['nisn']?></td>
            <td><?=$baris['nama_siswa']?></td>
            <td><?=$baris['alamat']?></td>
            <td><?=$baris['hp']?></td>
            <td><?=$baris['agama']?></td>
            <td><?=$baris['jk']?></td>
            <td><a href="?hal=edit&id=<?=$baris['id']?>">Edit</a></td>
            <td><a href="?hal=tampil&id=<?=$baris['id']?>" onclick="return confirm('yakin akan dihapus?')">Hapus</a></td>
        </tr>
        <?php
            }
            ?>
            </table>
            </body>
            </html>