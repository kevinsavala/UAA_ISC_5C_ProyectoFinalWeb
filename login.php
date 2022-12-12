<?php
    session_start();
    $servidor = 'localhost';
    $cuenta = 'id19993614_admin';
    $password = 'CR/#+fJer~?aDEk6';
    $bd = 'id19993614_482482';
    if(!isset($_SESSION['intentos'])){$_SESSION['intentos']=0;}
    if(!isset($_SESSION['lastuser'])){$_SESSION['lastuser']="";}
    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
        
        if(!empty($_POST["remember"])){
            setcookie("username",$_POST["username"],time()+3600);
            setcookie("password",$_POST["password"],time()+3600);
        } else {
            setcookie("username","");
            setcookie("password","");
        }
        
        $usuario = $_POST['username'];
        $contrasena = $_POST['password'];
        //BUSCAR EL USERNAME EN LA BASE DE DATOS
        if(usernameExists($usuario)){
            //USUARIO EXISTE, COMPARAR CONTRASEÑA CHECAR BLOQUEO
            if(!checkForBlock($usuario) && comparePassword($usuario,$contrasena) && checkForAdmin($usuario)){
                $_SESSION['logueado'] = "1";
                $_SESSION['user'] = $usuario;
                $_SESSION['nombre'] = getName($usuario);
                $_SESSION['intentoLog'] = "0";
                $_SESSION['intentos']=0;
                header("Location: adminPage.php");
                exit();   
            }else if(!checkForBlock($usuario) && comparePassword($usuario,$contrasena) && mustChangePw($usuario)){
                $_SESSION['logueado'] = "1";
                $_SESSION['user'] = $usuario;
                $_SESSION['nombre'] = getName($usuario);
                $_SESSION['intentoLog'] = "0";
                $_SESSION['intentos']=0;
                header("Location: newPassword.php");
                exit();   
            }else if(!checkForBlock($usuario) && comparePassword($usuario,$contrasena)){
                //INICIAR SESION
                $_SESSION['logueado'] = "1";
                $_SESSION['user'] = $usuario;
                $_SESSION['nombre'] = getName($usuario);
                $_SESSION['intentoLog'] = "0";
                $_SESSION['intentos']=0;
                header("Location: index.php");
                exit();
            } else if(checkForBlock($usuario)){
                header("Location: pwRecover.php");
                exit();
            } else if(!comparePassword($usuario,$contrasena) && $usuario == $_SESSION['lastuser']){
                if(isset($_SESSION['intentos']) && $_SESSION['intentos'] <2){
                    $_SESSION['intentos']+=1;
                    header("Location: loginForm.php");
                    exit();
                } else {
                    //LLAMAR BLOQUEO
                    blockUser($usuario);
                    $_SESSION['intentos'] = 0;
                    header("Location: pwRecover.php");
                    exit();
                }
            } else {
                $_SESSION['intentos']=1;
                $_SESSION['lastuser']=$usuario;
                header("Location: loginForm.php");
                exit();
            }
        }
    }    


    //FUNCIONES
    function consult($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
        $data = array(); // Array donde vamos a guardar los datos
        while($r = mysqli_fetch_row($query)){ // Recorrer los resultados de Ejecutar la consulta SQL
            $data[]=$r; // Guardar los resultados en la variable $data
        }
        return $data;
    }
    function consultNoReturn($argumento){
        $con = new mysqli("localhost","id19993614_admin","CR/#+fJer~?aDEk6","id19993614_482482"); // Conectar a la BD
        $sql = $argumento; // Consulta SQL
        $query = $con->query($sql); // Ejecutar la consulta SQL
    }
    function usernameExists($username){
        $data = consult("select cuenta from usuarios where cuenta='$username';");
        if(!empty($data)){
            return true;
        } else {
            return false;
        } 
    }
    function comparePassword($uname,$pass){
        $data = consult("select aes_decrypt(password,'prueba') from usuarios where cuenta='$uname';");
        if(!empty($data) && $pass==$data[0][0]){
            return true;
        } else {
            return false;
        }
    }
    function getName($user){
        $data = consult("select nombre from usuarios where cuenta='$user';");
        if(!empty($data)){
            return $data[0][0];
        } else {
            return "error en el nombre";
        }
    }
function checkForBlock($user){
    $data = consult("select bloqueada from usuarios where cuenta='$user';");
    if($data[0][0] == 1){
        return true;
    } else {
        return false;
    }
}
function blockUser($user){
    consultNoReturn("update usuarios set bloqueada=1 where cuenta='$user'");
}

function mustChangePw($user){
    $data = consult("select changePassword from usuarios where cuenta='$user';");
    if($data[0][0] == 1){
        return true;
    } else {
        return false;
    }
}

function checkForAdmin($user){
    $data = consult("select admin from usuarios where cuenta='$user';");
    if($data[0][0] == 1){
        return true;
    } else {
        return false;
    }
}

?>