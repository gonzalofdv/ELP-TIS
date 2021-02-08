<?php

require_once __DIR__.'/Form.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/Usuario.php';

class FormularioLogin extends Form {

    public function generaCamposFormulario($datos) {
        return '<fieldset>
        <legend>Usuario y contraseña</legend>
        <div class="grupo-control">
            <label>Nombre de usuario:</label> <input type="text" name="nombreUsuario" />
        </div>
        <div class="grupo-control">
            <label>Password:</label> <input type="password" name="password" />
        </div>
        <div class="grupo-control"><button type="submit" name="login">Entrar</button></div>
    </fieldset>';
    }

    public function procesaFormulario($datos) {
        $erroresFormulario = array();

        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : null;

        if ( empty($nombreUsuario) ) {
            $erroresFormulario[] = "El nombre de usuario no puede estar vacío";
        }

        $password = isset($_POST['password']) ? $_POST['password'] : null;
        if ( empty($password) ) {
            $erroresFormulario[] = "El password no puede estar vacío.";
        }

        if (count($erroresFormulario) === 0) {
            $usuario = Usuario::buscaUsuario($nombreUsuario);

            if (!$usuario) {
                $erroresFormulario[] = "El usuario o el password no coinciden";
            } else {
                if ( $usuario->compruebaPassword($password) ) {
                    $_SESSION['login'] = true;
                    $_SESSION['nombre'] = $nombreUsuario;
                    $_SESSION['esAdmin'] = strcmp($fila['rol'], 'admin') == 0 ? true : false;
                    header('Location: index.php');
                    exit();
                } else {
                    $erroresFormulario[] = "El usuario o el password no coinciden";
                }
            }
        }
    }
}

?>