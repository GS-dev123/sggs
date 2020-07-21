<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/../js/nav.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/../css/add_ram.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <img class="nav-brand" src="/../img/gs_logo1.png" width="40px;">
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-user navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
                    <a href="" class="btn-floating btn-gplus mx-1">
        <i class="fa fa-bell fa-2x" style="color: white"></i>
      </a>
      </div>
    </nav>
<nav class="navbar-primary">
  <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
  <ul class="navbar-primary-menu">
    <li>
      <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="nav-label">View JOB's</span></a>
      <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="nav-label">View PC's</span></a>
      <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">View RAM's</span></a>
      <a href="#"><span class="glyphicon glyphicon-film"></span><span class="nav-label">View HD's</span></a>
    </li>
  </ul>
</nav>



<div class="main-content"> 
  <div class="fixed-left">
    <a href="/home1"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
  </div>

<div class="container">
  <h3 class="text-center"><b>--JOB--</b></h3>
  <form>
  <div class="row">
    <div class="col">
    <input type="text" name="nomeCliente" placeholder="Insira Nome Cliente" class="form-control">
    </div>
    <div class="col">
      <input type="text" name="contacto" placeholder="Insira Contacto" class="form-control">
    </div>
  </div>
    <div class="row">
    <div class="col">
    <input type="text" name="marca" placeholder="Insira Marca PC" class="form-control">
    </div>
    <div class="col">
      <input type="text" name="modelo" placeholder="Insira Modelo Pc" class="form-control">
    </div>
    <div class="col-sm-12">
      <input type="text" name="problema" placeholder="Problema Pc" class="form-control">
    </div>
    <div class="col">
      <label>Descrição Problema</label>
    </div>
        <div class="col-sm-12">
      <textarea name="descProblema" class="form-control"></textarea>
    </div>
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary form-control">Gravar</button>
    </div>

  </div>




  </form>  
</div>


        <!-- Rodape -->
        <div class="col-sm-12">
        <div class="rodape fixed-bottom">
  <h6 style="color: white" class="text-center">Germildo Silva Services@Sistema Oficial</h6>
</div>    
        </div>
    </div>
</div>
</body>
</html>