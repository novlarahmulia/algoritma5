
<html lang="en">
 
 <head>
	 <title>Method POST</title>
 </head>
  
 <body>
	 <form action="" method="POST">
		 <input type="text" name="nama"><br />
		 <input type="number" name="umur"><br />
		 <input type="submit" name="submit" value="Sumbit">
	 </form>
  
	 <?php
	 if ($_POST) {
		 echo "Nama: novlaa " . $_POST["nama"];
		 echo "<br/>";
		 echo "Umur: 17 tahun " . $_POST["umur"];
	 }
	 ?>
 </body>
  
 </html>
 