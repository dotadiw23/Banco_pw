<?php

session_start();
/**
 * para devolver al usuario en caso de que quiera ingresar sin haber 
 * iniciado sesion
 *  */    
if (! isset($_SESSION["id"]))
{
    header("Location: ../");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles_default.css">
    <link rel="stylesheet" href="../css/styles_transfers.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!--<link rel="stylesheet" href="../css/fontawesome.css">-->
    <title>Panel de inicio</title>
</head>
<body>
    <div class="header">
        <a><img class="logo-header" src="../img/logo_panel.png" alt=""></a>
        <h2 class="logo">Mi Banco</h2>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
        <ul class="menu">
            <a href="../panel/">Inicio</a>
            <a href="../mi_cuenta/">Mi cuenta</a>
            <a href="../includes/cerrar_sesion.php"><input type="button" value="Cerrar sesión"></a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>
    <div class="content">  
        <div class="usuario">
            <img src="../img/user_logo.png" alt="Usuario_Logo" class="user-logo">
            <p><?php echo "Usuario: ". $_SESSION["apellidos"]. " ". $_SESSION["nombres"]. "."?></p>
        </div>   
        <form action="" method="post">
            <p class="ref">Cuenta de origen:</p>
            <!--esto se tiene que cambiar deacuerdo a las cuentas de cada cliente-->
            <select name="origen" class="input" required>
                <option>Cuenta ahorros</option>
                <option>Cuenta ahorros</option>
                <option>Cuenta ahorros</option>
            </select>
            <p class="ref">Cuenta de destino:</p>
            <input type="text" class="input" name="destino" placeholder="xxxx-xxxxx-xxxx" required>
            <p class="ref">Valor a transferir:</p>
            <input type="number" class="input" name="destino" placeholder="000000000" required>
            <input type="submit" id="submit" value="Transferir">
        </form>
        <footer>
            <div class="footer_container">
                <p class="footer">2020  - Tu banco ®  |  Bonilla. A, Melo. J, Pájaro. A.</p> 
            </div>
        </footer>
    </div>
</body>
</html>
