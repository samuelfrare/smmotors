<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmMotors</title>
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
            <img src="https://icones.pro/wp-content/uploads/2021/03/icone-de-voiture-symbole-png-bleue.png" alt="Logo" width="30" height="24">
            SmMotors
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
                <!-- <hr class="hrbusca"> <br> -->
            </div>

    
            <div class="tabs">
        <label class="tab active" for="todos">
            <input type="radio" name="veiculo" id="todos" checked>
            Todos
        </label>
        <label class="tab" for="novos">
            <input type="radio" name="veiculo" id="novos">
            Novos
        </label>
        
        <label class="tab" for="usados">
            <input type="radio" name="veiculo" id="usados">
            Usados
        </label>
    </div>


    <script>
        // Script para alterar o estado ativo do botão
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>

        <div class="d-flex">
                <input type="text" class="form-control" id="sexo" placeholder="Digite a marca ou modelo do carro"> 
                <button type="submit" class="btn btn-primary mb-3" id="botaobusca">
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg> 
                Procure aqui</button>
        </div>
    </form>
</div>

<!--CATEGORIAS -->

<h1 class="titulos" id="tcategorias">Categorias</h1>

<div class="cards">

<div class="card" style="width: 18rem;">
  <img src="https://www.honda.com.br/motos/sites/hda/files/2023-09/moto-honda-cb-500x-vermelho-victory-red-imagem-home_0.webp" class="card-img-top" alt="...">
  <hr class="hrcard">
  
  <div class="card-body">
    <p class="card-text">Motos</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://kifalstorage.s3.amazonaws.com/new/img/honda/civic/principal.png" class="card-img-top" alt="...">
  <hr class="hrcard">
  <div class="card-body">
    <p class="card-text">Sedans</p>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img src="https://di-uploads-pod33.dealerinspire.com/lutherwestsidevolkswagen/uploads/2021/01/2020-VW-Golf-GTI-MLP-Hero-Pic.png" class="card-img-top" alt="..." >
  <hr class="hrcard">
  <div class="card-body">
    <p class="card-text">Hatches</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://www2.mercedes-benz.com.br/content/dam/hq/passengercars/cars/cla/cla-coupe-c118-fl-pi/modeloverview/02-2023/images/mercedes-benz-cla-coupe-c118-modeloverview-696x392-02-2023.png" class="card-img-top" alt="...">
  <hr class="hrcard">
  <div class="card-body">
    <p class="card-text">Coupés</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://www.porsche.dk/globalassets/modeller/cayenne/cayenne-e3-ll/cayenne-coupe-turbo-e-hybrid-gt-pakke_modelbillede.png" class="card-img-top" alt="...">
  <hr class="hrcard">
  <div class="card-body">
    <p class="card-text">SUVS</p>
  </div>
</div>
</div>

</body>
</html>