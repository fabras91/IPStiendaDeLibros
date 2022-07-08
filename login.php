<html>
<link rel="stylesheet" href="style.css">
<body>
<header>
<blockquote>
    <a href="index.php"><img src="image/logo2.png"></a>
</blockquote>
</header>
<blockquote>
<div class="container">
<center><h1>Iniciar Sesión</h1></center>
<form action="checklogin.php" method="post">
    Nombre de Usuario:<br><input type="text" name="username"/>
    <br><br>
    Contraseña:<br><input type="password" name="pwd" />
    <br><br>
    <input class="button" type="submit" value="Iniciar sesión"/>
    <input class="button" type="button" name="cancel" value="Cancelar" onClick="window.location='index.php';" />
</form>
</div>
<blockquote>
<?php
if(isset($_GET['errcode'])){
    if($_GET['errcode']==1){
        echo '<span style="color: red;">Invalid username or password.</span>';
    }elseif($_GET['errcode']==2){
        echo '<span style="color: red;">Please login.</span>';
    }
}

?>
</body>
</html>