<!DOCTYPE HTML>
<html>
    <head>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Alkalami&family=Montserrat:wght@100&display=swap');
</style>
        <title>Dokopetia</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div id="grad"></div>
        <div class="vessel">
          <h1>Rincian Pembelian</h1>
            <form method="GET" action="redirect.php">
                <label>Nama Barang</label><br>
                <input type="text" name="barang"><br>
                <label>Banyak Barang</label><br>
                <input type="text" name="jumlah"><br>
                <label>ID Pembeli</label><br>
                <input type="text" name="user"><br>
                <button>Submit</button>
            </form>
        </div>     
    </body>
</html>