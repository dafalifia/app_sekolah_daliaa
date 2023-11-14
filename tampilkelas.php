<?php
    include_once('config.php');
    ///hapus kelas
    $id = isset($_GET['id'])?$_GET['id']:"";
    if($id !=""){
        $id = isset($_GET['id'])?$_GET['id']:"";
        $hapus = mysqli_query($conn,"delete from tbkelas where idkelas=$id");
        if($hapus){
            echo "<script>alert('hapus berhasil');location.href='?hal=tampilkelas';</script>";
        
        }
    }
    $sql = mysqli_query($conn,"select * from tbkelas order by nama_kelas ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MYSQL</title>
</head>
<body>
    <a href="?hal=tambahkelas">Tambah Data</a><br><br>
    <table border=1 width="80%" cellspacing=0>
        <tr>
            <th>No</th>
            <th>NAMA KELAS</th>
            <th>JURUSAN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        <?php
            $no = 1;
            while($baris=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$baris['nama_kelas']?></td>
                    <td><?=$baris['jurusan']?></td>
                    <td><a href="?hal=editkelas&id=<?=$baris['idkelas']?>">Edit</a></td>
                    <td><a href="?hal=tampilkelas&id=<?=$baris['idkelas']?>"onclick="return confirm('yakin akan dihapus')">hapus</a></td>
            </tr>
            <?php
            }
        ?>
        </table>
        </body>
        </html>