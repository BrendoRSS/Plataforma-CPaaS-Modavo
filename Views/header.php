<?php 
  session_start();
  print_r($_SESSION)
?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
  $(function() {
    $("#acessibilidade1").load("acessibilidade.php");
  });
</script>
<script>
    const tamanhoDaFonte = document.querySelectorAll('.tamanhoDaFonte');

    for (let button of tamanhoDaFonte) {
        button.addEventListener('click', function(event) {
            document.body.style.setProperty('--font-size', this.dataset.fontSize);
        });
    }
</script>
<style>
   body {
        --font-size:1rem;
    }
    p {
        font-size: calc(0.85*var(--font-size));
    }
    .btn {
      font-size: calc(0.85*var(--font-size));
    }
</style>

<!-- ======= Header ======= -->

<body>
  <header id="header" class="header fixed-top">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="./../assets/img/logo-modavo-cpaas.png" alt="Logotipo da Modavo CPaaS">
      </a>

      <div id="menuContainer">
        <nav id="navbar" class="navbar">
          <ul>
            <div id="divAcessibilidade" style="display:flex">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-universal-access-circle"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><div id="acessibilidade1" class=""></div></li>
                </li>
                  
              </ul>
              </li>
          </ul>
      </div>
      <li>
        <a class="nav-link scrollto active" href="index.php">CPaaS</a>
      </li>
      <li class="dropdown"><a href="#services">
        <span>Produtos</span> <i class="bi bi-chevron-down"></i>
      </a>
        <ul>
          <li><a href="#services">Autenticação de 2 Fatores</a>
          <li>
          <li><a href="#services">Número Máscara</a></li>
          <li><a href="#services">SMS Marketing</a></li>
          <li><a href="#services">Google Verified Calls</a></li>
        </ul>
      </li>

      <?php 
      if(empty($_SESSION)){

        echo"<div id=\"botoesAcesso\" style=\"display:flex\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" >
        <li style=\"display:flex\">
        <a class=\"nav-link scrollto\" href=\"loginView.php\">Login</a>
        <a class=\"getstarted scrollto\" href=\"registroView.php\">Cadastre-se</a>
      </li>
      </ul>
        
      </div>";
      
      }else{
        echo "<div id='sectionAtiva' style='display:flex;margin-right:40px'>
        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='bi bi-person-circle'>";
              echo " ";
              echo $_SESSION['loginLogin']??'Sem cadastro';
              echo "</i>
            </a>
            <ul class='dropdown-menu'>
              <br>
              <li style='display: flex; justify-content: center;'><i class='bi bi-person-circle d-flex'></i>
              </li>
              <br>
              <li style='display: flex; justify-content: center;'>
                ";
                
              echo 'Olá, '; 
              echo $_SESSION['loginLogin']??'Sem cadastro';
              echo "
              </li>
              <li><a class='dropdown-item' href='../Controllers/crud/update.php'><i class='bi bi-gear-fill'> Editar usuário</i></a></li>
              <li><a class='dropdown-item' href='../Controllers/crud/consulta.php'><i class='bi bi-search'> Consultar
                    usuários [Master]</i>
                  </a>
              </li>
              <li>
                <hr class='dropdown-divider'>
              </li>
              <li style='display: flex; justify-content: center;'>
                <form action='../Controllers/crud/sairUsuario.php' id='formSair' method='post'><button class='btn btn-danger' type='submit' name='sair' id='sair'>Sair</button></form>
                
              </li>
            </ul>
          </li>
        </ul>
      </div>";
      }
      
      ?>
      </ul>

      <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- Template Main JS File -->
  <script src="./../assets/js/sizedaFonte.js"></script>
  <script src="./../assets/js/main.js"></script>
  <script src="../../assets/js/sairUsuario.js"></script>
  <script src="./../assets/js/modoDark.js"></script>
</body>