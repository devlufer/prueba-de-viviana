<?php
$uno=$_POST["uno"];
$dos=$_POST["dos"];
$suma=$uno+$dos;
echo $suma;
?>
<html>
<body>
    <h2>tellego esta prueba</h2>
    <h1>prueba de viviana</h1>
    <h1>suma de numeros</h1>
   <form action="suma.php" method="post">
    <label for=""><FONT COLOR="blue">ingrese el primer numero   </FONT></label><br>
    <input type="text" name="uno"><br>
    <label for=""> <FONT COLOR="blue"> ingrese el segundo numero</FONT></label><br>
    <input type="text" name="dos"><br>
    <input type="submit" value="sumar">
    <input type="submit" value="restar">
</form>
</body>
</html>
