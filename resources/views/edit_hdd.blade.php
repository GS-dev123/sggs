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


<div class="main-content"> 
  <div class="fixed-left">
    <a href="/home1"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
  </div>

<div class="container">
@foreach($hdds as $hdd)
  <form method="post" action="{{route('hdd.update',$hdd->id)}}">
    @method('PATCH')
    @csrf
  <div class="row">
    <div class="col">
    <input type="text" name="marca" placeholder="Insira Marca" class="form-control" value="{{$hdd->marca}}">
    </div>
    <div class="col">
      <select class="form-control" name="tipo">
        <option >{{$hdd->tipo}}</option>
        <option>HDD</option>
        <option>SSD</option>
      </select>
    </div>
  </div>
    <div class="row">
      <div class="col">
      <select class="form-control" name="capacidade">
        <option >{{$hdd->capacidade}}</option>
        <option>80GB</option>
        <option>128GB</option>
        <option>320GB</option>
        <option>500GB</option>
        <option>750GB</option>
        <option>1TB</option>
      </select>
      </div>
      <div class="col">
      <select class="form-control" name="modelo">
        <option >{{$hdd->modelo}}</option>
        <option>LapTop</option>
        <option>DeskTop</option>
</select>
      </div>
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary form-control" id="btn">Actualizar</button>
    </div>
  </div>
  </form>
  @endforeach
</div>


        <!-- Rodape -->
        <div class="col-sm-12">
        <div class="rodape fixed-bottom">
  <h6 style="color: white" class="text-center">Germildo Silva Services@Sistema Oficial</h6>
</div>    
        </div>
    </div>
</body>
</html>