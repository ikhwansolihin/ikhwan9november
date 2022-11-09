<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
    <h1>Data Komputer</h1>
    <h4> <a href=tambah.php>Tambah</a></h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>No seri</th>
            <th>Merek</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

<?php
   include("koneksi.php");
   $sql='SELECT * FROM tb_komputer';
   $query= mysqli_query($db, $sql);

   while($komputer=mysqli_fetch_array($query)){
    echo "<tr>";
               echo "<td>".$komputer['id']."</td>";
               echo "<td>".$komputer['no_seri']."</td>";
               echo "<td>".$komputer['merek']."</td>";
               echo "<td>".$komputer['jumlah']."</td>";
               echo "<td>";
               echo "<a href='edit.php?id=".$komputer['id']."'>Edit</a> |";
               echo "<a href='hapus.php?id=".$komputer['id']."'>hapus</a>";
               echo "</td>";
    echo "</tr>";
   }
?>
</table>
</body>
</html>