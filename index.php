<?php
include("koneksi.php");
$query=mysqli_query($koneksi,"SELECT*FROM buku")
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/all.css">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<style>
    .btn{
        margin-left: 5%;
        background:transparent;
        border:2px solid transparent;
        box-sizing: border-box;
        cursor:pointer;
        font-size:1rem;
        font-weight: 700;
        line-height:1;
        padding:15px 25px;
        text-align: center;
        text-decoration:none;
        display:inline-block;
        outline:none;
        position:relative;
        top:0;
        text-shadow:0 1px 1px rgba(0,0,0,0.5);
    }
</style>
<body>
   <div style="background-image:url('backgrounds/index.jpg');height:100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
    <button class="btn"> 
    <a href="add.php" style="color:rgb(8, 8, 8);background-color: rgb(253, 251, 251);border-radius: 5px;padding: 10px;margin-top: 5px;">
        <i class="far fa-plus-square"></i>Tambah Buku</a> 
    </button>
    <br>
    <div class="limiter">
			<div class="wrap-table100">
				<div class="table100">

    <table  border=0 style="margin-left:5%;margin-right:auto;text-align:center;text-decoration:none">
        <tr style="background-color: white;">
            <form action="" method="post">
            <th>Id <button name="id1" class="segitiga"><i class="fas fa-caret-up"></i></button> <button name="id2" class="segitiga"><i class="fas fa-caret-down"></i></button></th>
            <th>Sampul</th>
            <th>Judul <button name="judul1" class="segitiga"><i class="fas fa-caret-up"></i></button> <button name="judul2" class="segitiga"><i class="fas fa-caret-down"></i></button></th>
            <th>Penulis <button name="penulis1" class="segitiga"><i class="fas fa-caret-up"></i></button> <button name="penulis2" class="segitiga"><i class="fas fa-caret-down"></i></button></th>
            <th>Penerbit <button name="penerbit1" class="segitiga"><i class="fas fa-caret-up"></i></button> <button name="penerbit2" class="segitiga"><i class="fas fa-caret-down"></i></button></th>
            <th>Tahun Terbit <button name="tahun1" class="segitiga"><i class="fas fa-caret-up"></i></button> <button name="tahun2" class="segitiga"><i class="fas fa-caret-down"></i></button></th>
            </form>
        </tr>
            <?php
            if(isset($_POST['id1'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY id");
            }
            else if(isset($_POST['id2'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY id DESC");
            }
            else if(isset($_POST['judul1'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY judul");
            }
            else if(isset($_POST['judul2'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY judul DESC");
            }
            else if(isset($_POST['penulis1'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY penulis");
            }
            else if(isset($_POST['penulis2'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY penulis DESC");
            }
            else if(isset($_POST['penerbit1'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY penerbit");
            }
            else if(isset($_POST['penerbit2'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY penerbit DESC");
            }
            else if(isset($_POST['tahun1'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY tahun");
            }
            else if(isset($_POST['tahun2'])){
                $query=mysqli_query($koneksi,"SELECT*FROM buku ORDER BY tahun DESC");
            }
            ?>
            <?php
            while($data=mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td>".$data['id']."</td>";
                echo"<td style='padding-top: 2px;padding-bottom: 2px;'><img src='images/" .$data['nama_file']. "' width='75' height='100'></td>";
                echo"<td>".$data['judul']."</td>";
                echo"<td>".$data['penulis']."</td>";
                echo"<td>".$data['penerbit']."</td>";
                echo"<td>".$data['tahun']."</td>";
                echo"<td><a href='edit.php?id=$data[id]'><i class='fas fa-edit'></i>Edit</a>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href='delete.php?id=$data[id]' onclick=\"javascript: return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');\">
                        <i class='fas fa-trash-alt'></i>Hapus</a></td>";
            }
            ?>
    </table>
        </div>
    </div>
</div>



</div>

</body>
</html>
