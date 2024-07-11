<?php

    class Usuario extends Conectar{
    /* Funcion para Login de Acceso de Usuario */
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();

            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];

                if(empty($correo) and empty($pass)){
                    /* En caso estén vacios los accesos, se regresa al index con mensaje 2 */
                    header("Location:".conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM tm_usuario WHERE usu_correo=? and usu_pass=? and est=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();

                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nom"]=$resultado["usu_nom"];
                        $_SESSION["usu_ape"]=$resultado["usu_ape"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];

                        /* Si esta correcto, se dirige a Home */
                        header("Location:".Conectar::ruta()."views/UsuHome/");
                        exit();
                    }else{
                        /* En caso de que no coincidan usuario o contraseña */
                        header("Location:".conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }

?>