
<?php 

require("library.php");

$library = new Library();

$result2 = "";
if(isset($_POST['Angka']){
  
  $result = $library->terbilang($_POST['Angka']);
  
  if(!empty($result)){
   
    $result2 = $result;
    
  }
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center; margin-top: 120px;">
    <form action="" method="POST">
        <label for="Angka">Angka</label>
        <input type="text" name="Angka" id="Angka">

        <br>


        <label for="hasil">Hasil</label>
        <textarea id="" style="width: 280px; height: 120px; margin-top: 30px;"><?= $result2; ?></textarea>

        <br>

        <button type="submit" style="margin-top: 30px;">Cek Penjabaran</button>

    </form>

</body>

</html>















