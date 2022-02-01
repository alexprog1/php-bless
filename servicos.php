<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Serviços</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
    <div class="col-md-3 col-lg-2 px-0">
      <h1 class="text-primary d-flex my-4 justify-content-center"><img src="src/images/logo.svg" alt="" width="90" height="90" class="d-inline-block align-text-top"></h1>
      <div class="list-group rounded-0">  
        <a href="dashboard.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="produtos.php" class="list-group-item list-group-item-action border-0 align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Produtos</span>
        </a>
        <a href="servicos.php" class="list-group-item list-group-item-action active border-0 align-items-center">
        <!-- <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse"> -->
            <span class="bi bi-tools"></span>
            <span class="ml-2">Serviços</span>
        </a> 
        <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
          <div>
            <span class="bi bi-gear"></span>
            <span class="ml-2">Administrativo</span>
          </div>
        </button>
      </div>

    </div>
    <!-- overlay to close sidebar on small screens -->
    <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0">
      <!-- top nav -->
      <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
        <!-- close sidebar -->
        <button class="btn py-0 d-lg-none" id="open-sidebar">
          <span class="bi bi-list text-primary h3"></span>
        </button>
        <div class="dropdown ml-auto">
          <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-person text-primary h4"></span>
            <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
            <a class="dropdown-item" href="logout.php">Logout</a>
            <a class="dropdown-item" href="#">Configurações</a>
          </div>
        </div>
      </nav>
      <!-- main content -->
      <main class="container-fluid">
        <section class="row">
          <div class="container">
            <h1 class="mb-2 text-primary">Serviços</h1>
            <p class="lead text-muted">
              <a href="cadastrar_servico.php" class="btn btn-">
                <button class="btn btn-info">Lançar novo serviço</button>
              </a>
            </p>
            <p class="lead text-muted">Registro de Atividades diárias.</p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <?php 
                    include("servicosline.php");
                  ?>
                </tr>
              </tbody>
            </table>       
          
          </div>
        </section>
      
      </main>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>