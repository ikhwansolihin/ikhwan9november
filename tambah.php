<html>
<head>
<body>
    <h1>Aplikasi Pendataan PC Lab RPL</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="no_seri">No seri :</label>
                <input type="number" name="no_seri" />
            </p>

            <p>
                <label for="merek">Merek :</label><br>
              <label><input type="radio" name="merek" value="asus" />asus</label><br>
              <label><input type="radio" name="merek" value="lenovo" />lenovo</label><br>
              <label><input type="radio" name="merek" value="hp" />hp</label><br>
              <label><input type="radio" name="merek" value="acer" />acer</label><br> 
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="number" name="jumlah" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
</form>
</body>
</html>