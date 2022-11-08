<html lang="en">
<html>
<head>
	<title>Error al ingresar</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        h1{
            font-family: century gothic;
        }
        body{
            min-height: 100vh;
            background-image: linear-gradient(135deg
            ,#00B7D4, #505488, #2F3F80, #161569,
            #5A4894, #A950A1, #FF7CAE);
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
        #div__4{
            background: #381b1ba6;
            color: white;
        }
        #btn{
            background-image: linear-gradient(to right, pink, lightgreen);
        }
        #btn a{
          text-decoration: none;
        }
        #imagen{
          position: relative;
          display: flex;
          flex-direction: column;
          min-width: 0;
          word-wrap: break-word;
          margin: auto auto;
        }

        footer{
            font-size: 0.8rem;
            font-family: sans-serif;
        }
        ul {
            display: flex;
            margin-bottom: 0;
            top: 50%;
            left: 50%;
            
        }
        #Titulo_1{
            font-family: 'Quicksand', sans-serif;
            font-weight: bold;
        }

        ul li {
            list-style: none;
        }
        ul li a {
            width: 30px;
            height: 30px;
            background-color: #fff;
            text-align: center;
            line-height: 25px;
            font-size: 15px;
            margin: 0 10px;
            display: block;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            border: 3px solid #fff;
            z-index: 1;
        }
        ul li a .icon {
            position: relative;
            color: #262626;
            transition: .5s;
            z-index: 3;
        }
        ul li a:hover .icon {
            color: #fff;
            transform: rotateY(360deg);
        }
        ul li a:before {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f00;
            transition: .5s;
            z-index: 2;
        }
        ul li a:hover:before {
            top: 0;
        }
        ul li:nth-child(1) a:before{
            background: #3b5999;
        }
        ul li:nth-child(2) a:before{
            background: #55acee;
        }
        ul li:nth-child(3) a:before {
            /*background: #0077b5;*/
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }
        ul li:nth-child(4) a:before {
            background: #dd4b39;
        }
        ul li:nth-child(5) a:before {
            background: red;
        }
        #mensaje_de_error{
          font-family: 'Quicksand', sans-serif !important;
        }
        #Logo{
          font-family: 'Quicksand', sans-serif !important;
        }
        .navbar-text{
          padding-top: 0;
        }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
  <body>
  <header>
        <!-- As a heading -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a id="Logo" class="navbar-brand" href="#">
                  <img src="img/logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                  Libe
                </a>
                <span class="navbar-text">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100004151746092" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/RdIssei" target="_blank"><i class="fab fa-twitter icon"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/liberatojarard/?hl=es-la" target="_blank"><i class="fab fa-instagram icon"></i></a></li>
                    <li>
                        <a href="mailto:liberatojarard@gmail.com" target="_blank"><i class="fab fa-google-plus-g icon"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC7NMtI2G_rPsm71SmUHFS4w" target="_blank"><i class="fab fa-youtube icon"></i></a>
                    </li>
                </ul>
                </span>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div id="div__4" class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h1 class="text-center font-weight-light my-4 animated infinite bounce">OOPS!...Algo salio mal</h1>
                    </div>
                    <div class="card-body">

                        <div>
                            <span id="mensaje_de_error">
                              <?php echo $_GET['error'];?>
                            </span>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small">
                        <div id="btn" class="btn btn-secondary">
                          <a href="index.php">Volver a ingresar</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="imagen" class="" style="width: 15rem;">
      <img class="animated zoomInUp" src="img/img_error.gif" alt="imagen de Error">
    </div>

    <footer class="fixed-bottom navbar-expand-sm navbar-dark bg-dark text-center text-white">
      <div class="text-center p-3">
        © Copyright 2001-2021 Copyright.es - Todos los Derechos Reservados - <a class="text-white" href="index.php">Liberato</a>
      </div>
    </footer>

  </body>
</html>