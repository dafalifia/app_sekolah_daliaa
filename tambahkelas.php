<?php
    require_once('config.php');
    if(isset($_POST['simpan'])){
        extract($_POST);
        $insert = mysqli_query($conn,"insert into tbkelas values(null,'$nama_kelas','$jurusan')");
        if($insert){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href='?hal=tampilkelas';
                </script>
            <?php
        }
    }
?>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <a href="?hal=tampilkelas">Lihat Data</a>
        <br>
        <br>
        <form action="?hal=tambahkelas" method="post">
            <table>
                <tr>
                    <td>Nama Kelas</td>
                    <td><input type="text" name="nama_kelas" placehlder="nama_kelas" maxlength="10"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan">
                            <option value="">==pilih jurusan==</option>
                            <option value="AK">AK</option>
                            <option value="MP">MP</option>
                            <option value="BD">BD</option>
                            <option value="MM">MM</option>
                            <option value="RPL">RPL</option>
                        </select>
                    </td>
                    <tr>
                        <td><button type="submit" name="simpan" value="simpan">Simpan</button></td>
                        <td><button type="reset" name="reset">Reset</button></td>
                    </tr>
                </tr>
                </tr>
            </table>
        </form>
    </body>
</html>