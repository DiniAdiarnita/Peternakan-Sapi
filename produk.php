<?php include ("koneksi.php")?>
<html>
    <head>
        <title>Produk</title>
    </head>
    <body>

    Input Data Sapi
    <form method=POST action=produk.php>
    <table>
        <tr>
            <td>ID Sapi</td>
            <td> : </td>
            <td><input type=text name=id></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><input type=text name=nama></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td> : </td>
            <td><input type=text name=warna></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td> : </td>
            <td><input type=text name=jenis></td>
        </tr>
   <!--     <tr>
            <td>Ciri</td>
            <td> : </td>
            <td><input type=textarea name=ciri></td>
        </tr>-->
        <tr>
            <td>Ciri-Ciri</td>
            <td> : </td>
            <td><textarea name=ciri></textarea></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type=submit name='oke' value=Tambah>
            </td>
        </tr>

    </table>
    </form>
        <?php
       /* echo "Insert Data <br><br>";
        echo "<form method=POST action=produk.php>
                    ID Sapi : <input type=text name=id> <br> <br>
                    Nama : <input type=text name=nama> <br> <br>
                    Warna : <input type=text name=warna> <br> <br>
                    Jenis : <input type=text name=jenis> <br> <br>
                    Ciri-Ciri : <input type=textarea name=ciri> <br> <br>
                    <input type=submit name='oke' value=Tambah>
        </form>";*/

    if (isset($_POST['oke'])=='Tambah'){
        /*echo "Nama Anda adalah <b>$_POST[nama]</b><br>";
        echo "Usia Anda adalah <b>$_POST[usia]</b>";*/

        @$id_sapi=$_POST[id];
        @$nama=$_POST[nama];
        @$warna=$_POST[warna];
        @$jenis=$_POST[jenis];
        @$ciri=$_POST[ciri];

        if(isset($id_sapi)){
            $query="INSERT INTO `sapi`(`id_sapi`,`nama_sapi`,`warna`,`jenis_sapi`,`ciri_ciri`) VALUES ('$id_sapi','$nama','$warna','$jenis','$ciri')";

            mysqli_query($con,$query);
             //echo $query;
            //echo "Proses Insert .....";
            echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=produk.php\">");
            }
    }
    ?>

<h4>Lihat Data Tabel Produk</h4>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Sapi</th>
        <th>Nama</th>
        <th>Warna</th>
        <th>Jenis</th>
        <th>Ciri-ciri</th>
        <th>Action</th>
    </tr>


<?php
  @$no=1;
  echo $tampil="select * from jenis_sapi";
    $hasil=mysqli_query($con,$tampil);

    while ($data=mysqli_fetch_array($hasil)){
        ?>
                    <tr>
                    <td><?php echo @$no; ?></td>
                    <td><?php echo @$data[id_sapi]; ?></td>
                    <td><?php echo @$data[nama_sapi]; ?></td>
                    <td><?php echo @$data[warna]; ?></td>
                    <td><?php echo @$data[jenis_sapi]; ?></td>
                    <td><?php echo @$data[ciri_ciri]; ?></td>
                    <td>
                        <a href="edit.php?id_sapi=<?php echo $data[0];?>">
                            <input type="button" value="Edit" class="btn btn-success"/>
                        </a>
                        <a href="deleter.php?id_sapi=<?php echo $data[0];?>">
                            <input type="button" value="Delete" class="btn btn-success"/>
                        </a>
                    </td>
    </tr>
        <?php
        $no++;
    }
?>
</table>
</body>

</html>
