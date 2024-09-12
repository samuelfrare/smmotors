<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BostaMotors</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
        body {
            background-color: #eeedec; /* Fundo cinza para a página inteira */
        }
        .navbar {
            background-color: #ffffff; /* Fundo branco para a navbar */
        }
    </style>
<body>

<div class="d-flex flex-column">
    <nav class="navbar navbar-light bg-body-tertiary">
        <a class="navbar-brand" href="index.php">
            <img src="https://e3ba6e8732e83984.cdn.gocache.net/uploads/image/file/1300080/regular_332d4832f6525db120672fca7cb9a19a.png" alt="Logo" width="30" height="24">
            BostaMotors
        </a>
        <div class="mx-auto"> <!-- Alinha o conteúdo ao centro -->
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Comprar</a> 
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link active" aria-current="page" href="#">Vender</a> 
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <ul class="navbar-nav d-flex flex-row">
                    <div class="linhavertical">
                    <!-- LINHA VERTICAL -->
                    </div>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> 
                        <!-- SVG É O ICONE DO LOGIN -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16"> 
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg>    
                    Entrar</a> 
                </li>

                </div>
            </ul>
        </div>

    </nav>
</div>


<div class="busca">
    <form action="" method="post">
        <h1 class="titulos">Procure aqui</h1>
            <div class="container">
                <hr class="hrbusca">
            </div>
        <div class="d-flex">
                <input type="text" class="form-control" id="sexo" placeholder="Busque Aqui">
                <button type="submit" class="btn btn-primary mb-3" id="botaobusca">Buscar</button>
        </div>
    </form>
</div>
</body>
</html>