<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<style>
        *{
            margin:0;
            padding: 0;
        }

        body{
            min-height: 100vh;
            background-image: linear-gradient(135deg,#00B7D4, #505488, #2F3F80, #161569, #5A4894, #A950A1, #FF7CAE);
            background-size: 500%;
            animation: fanimado 10s infinite;
        }
        @keyframes fanimado{
            0%{
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0% 50%;
            }
        }

		#cerrarYverPerfil{
			border: none;
			background: transparent;
		}
		#Logo{
			font-family: 'Quicksand', sans-serif !important;
		}
        
        h1{
            font-family: century gothic;
        }
        #Titulo_1{
            font-family: 'Quicksand', sans-serif !important;
            font-weight: bold;
        }
        #div__4{
            background: #381b1ba6;
            color: white;
        }

        input{
            background-image: linear-gradient(135deg,#00B7D4, #505488, #2F3F80, #161569, #5A4894, #A950A1, #FF7CAE);
            animation: fanimado 10s infinite;
            background-size: 500%;
            color: #fff !important;
        }

        input::placeholder{ 
            color: #AEAEC9 !important; 
        }
		#imagenes{
			height: 143px;
		}
		#img__perfil{
			border: 3px black solid;
			border-radius: 4.5rem;
			height: 145px;
		}
        footer{
            font-size: 0.8rem;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
	<!--Header-->
	<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
			
				<a id="Logo" class="navbar-brand" href="#">
					<img src="img/logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
					Libe
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="">Inicio</a>
					</li>
					<li class="nav-item">

						<!--Boostrap modal-->
						<div class="container-fluid">
							<button type="button" id="cerrarYverPerfil" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Ver perfil
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Mí perfil</h5>
									<br><br>
									<img id="img__perfil" src="img/perfil_modal.jpg" alt="foto de Perfil" >
								</div>
								<div class="modal-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. 
									Architecto dignissimos eum tempore, quia veritatis voluptatibus
									reprehenderit quisquam, nihil obcaecati debitis corporis 
									cupiditate nulla eius modi quam non voluptatum? 
									Exercitationem, explicabo.
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
									<button type="button" class="btn btn-primary">Guardar cambios</button>
								</div>
								</div>
							</div>
							</div>
						</div>
					
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Opciones
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración y privacidad</a></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-moon"></i> Pantalla y accesibilidad</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i> Soporte y ayuda</a></li>
					</ul>
					</li>
					<li class="nav-item">
						<form class="w3-container" action="controller_login.php" method="post">
							<input type="hidden" name="salir" value="salir">
							<button id="cerrarYverPerfil" class="nav-link">cerrar sesión</button>
						</form>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Buscar</button>
				</form>
				</div>
			</div>
		</nav>
    </header>


	<!--Contenido o cuerpo-->
	<div class="container" style="background: red; margin-top: 2rem; margin-bottom: 5rem;">
		<div class="row">
			<div class="col">
			
				<div class="card" style="width: 18rem; margin-top: 3rem; margin-bottom: 1rem;">
					
					<div class="card-body">
						<h6 class="card-title">Noticias</h6>
						<div id="demo" class="carousel slide" data-bs-ride="carousel">

						<!-- Indicators/dots -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
							<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
							<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
						</div>
						
						<!-- The slideshow/carousel -->
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img id="imagenes" src="img/noticia_1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Perú</h3>
								<p>vacunación contra el COVID-19 continuará</p>
							</div>
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/noticia_2.jpg" alt="Chicago" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Lima</h3>
								<p>Pedro Castillo en Congreso</p>
							</div> 
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/noticia_3.jpg" alt="New York" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Los Olivos</h3>
								<p>We love the Big Apple!</p>
							</div>  
							</div>
						</div>
						
						<!-- Left and right controls/icons -->
						<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						</button>
						</div>

						<div class="container-fluid mt-3">
						<h6 class="card-subtitle mb-2 text-muted">Carousel Example</h6>
						<p class="card-text">The following example shows how to create a basic carousel with indicators and controls.</p>
						</div>

					</div>
				</div>

			</div>
			<div class="col">

				<div class="card" style="width: 18rem; margin-top: 3rem; margin-bottom: 1rem;">
					
					<div class="card-body">
						<h6 class="card-title">Espectáculo</h6>
						<div id="demo_2" class="carousel slide" data-bs-ride="carousel">

						<!-- Indicators/dots -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#demo_2" data-bs-slide-to="0" class="active"></button>
							<button type="button" data-bs-target="#demo_2" data-bs-slide-to="1"></button>
							<button type="button" data-bs-target="#demo_2" data-bs-slide-to="2"></button>
						</div>
						
						<!-- The slideshow/carousel -->
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img id="imagenes" src="img/espectáculo_1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Italia</h3>
								<p>Penélope Cruz se consagró</p>
							</div>
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/espectáculo_2.jpg" alt="Chicago" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Florida</h3>
								<p>Jennifer Lopez y cómo negó estar molesta</p>
							</div> 
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/espectáculo_3.jpg" alt="New York" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Perú</h3>
								<p>Banda peruana Phonic lanza canción</p>
							</div>  
							</div>
						</div>
						
						<!-- Left and right controls/icons -->
						<button class="carousel-control-prev" type="button" data-bs-target="#demo_2" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#demo_2" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						</button>
						</div>

						<div class="container-fluid mt-3">
						<h6 class="card-subtitle mb-2 text-muted">Carousel Example</h6>
						<p class="card-text">The following example shows how to create a basic carousel with indicators and controls.</p>
						</div>

					</div>
				</div>

			</div>
			<div class="col">
			
			<div class="card" style="width: 18rem; margin-top: 3rem; margin-bottom: 1rem;">
					
					<div class="card-body">
						<h6 class="card-title">Videojuegos</h6>
						<div id="demo_3" class="carousel slide" data-bs-ride="carousel">

						<!-- Indicators/dots -->
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#demo_3" data-bs-slide-to="0" class="active"></button>
							<button type="button" data-bs-target="#demo_3" data-bs-slide-to="1"></button>
							<button type="button" data-bs-target="#demo_3" data-bs-slide-to="2"></button>
						</div>
						
						<!-- The slideshow/carousel -->
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img id="imagenes" src="img/videojuegos_1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Internacional</h3>
								<p>Free Fire: J Balvin</p>
							</div>
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/videojuegos_2.jpg" alt="Chicago" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Alemania</h3>
								<p>DNF Duel no está disponible</p>
							</div> 
							</div>
							<div class="carousel-item">
							<img id="imagenes" src="img/videojuegos_3.jpg" alt="New York" class="d-block" style="width:100%">
							<div class="carousel-caption">
								<h3>Internacional</h3>
								<p>Dragon Ball FighterZ - NUEVO</p>
							</div>  
							</div>
						</div>
						
						<!-- Left and right controls/icons -->
						<button class="carousel-control-prev" type="button" data-bs-target="#demo_3" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#demo_3" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						</button>
						</div>

						<div class="container-fluid mt-3">
						<h6 class="card-subtitle mb-2 text-muted">Carousel Example</h6>
						<p class="card-text">The following example shows how to create a basic carousel with indicators and controls.</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>


	<!--Footer-->
	<footer class="fixed-bottom navbar-expand-sm navbar-dark bg-dark text-center text-white">
        <div class="text-center p-3">
            © Copyright 2001-2021 Copyright.es - Todos los Derechos Reservados - <a class="text-white" href="index.php">Liberato</a>
        </div>
    </footer>

</body>
</html>