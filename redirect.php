<!DOCTYPE HTML>
<html>
    <head>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Alkalami&family=Montserrat:wght@100&display=swap');
</style>
        <title>Receipt</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div id="grad"></div>
        <div class="vessel">
        <form>
          <h1>Rincian Pesanan</h1>
          <label2> ID PEMBELI : </label2><br>
          <output><?= $_GET["user"]; ?></output><br>
          <label2> NAMA BARANG : </label2><br>
          <output><?= $_GET["barang"];  ?></output><br>
           <label2> BANYAK BARANG : </label2><br>
           <output> <?= $_GET["jumlah"];  ?></output><br>
            </form>
        </div>    
    </body>
</html>
 

