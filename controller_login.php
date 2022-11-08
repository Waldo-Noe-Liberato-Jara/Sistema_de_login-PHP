<?php 


	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('conexion.php');

    session_start();

	$usuario=new Usuario();
	$crud=new CrudUsuario();

    //El POST recibe un valor oculto: hay tres valores ocultos en tres inputs por eso creo esta condicional:
    if (isset($_POST['registrarse'])) {//Input con valor resgistrarse, el form se encuentra en registrarse.php
		$usuario->setNombre($_POST['usuario']);
		$usuario->setClave($_POST['pas']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario);
			header('Location: index.php');
		}else{
            //Uso el método GET para recibir este mensaje en la página error.php
			header('Location: error.php?error=Ya existe un usuario con este nombre, use otro por favor');
		}		
		
	}elseif (isset($_POST['entrar'])) { //Input con valor resgistrarse, el form se encuentra en index.php
		$usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
		//Condición para buscar al usuario y iniciar sesión con ese usuario eenviado en el form index.php
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario;
			header('Location: cuenta.php');
		}else{
            //Acá el método GET para recibir este mensaje en la página error.php
			header('Location: error.php?error=Su usuario o contraseña son incorrectos.');
		}
        //3 input oculto con valor salir se envia desde la página cuenta.php para destruir la sesion
        // y evitar a que vuelva a entrar a la cuenta sin logearse:
	}elseif(isset($_POST['salir'])){ 
		header('Location: index.php');
		unset($_SESSION['usuario']);
	}


?>