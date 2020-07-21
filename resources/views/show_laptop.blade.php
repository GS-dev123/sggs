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


<div class="container-fluid textarea"> 
  <div class="fixed-left">
    <a href="/home1"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
  </div>

<div class="container" style="border: 1px solid #e8e8e8; background-color: #010101; color:white">
@foreach($laps as $lap)
<h1 class="text-center">Detalhes de LapTop Nr {{$lap->id}}</h1>
 <h3>ID: <b>{{$lap->id}}</b></h3>
 <h3>Marca: <b>{{$lap->marca}}</b></h3>
 <h3>Geraçao: <b>{{$lap->geracao}}</b></h3>
 <h3>Modelo: <b>{{$lap->modelo}}</b></h3>
 <h3>Polegadas do Ecrã: <b>{{$lap->polegadas}}</b></h3>
 <h3>Capacidade Ram: <b>{{$lap->cap_ram}}</b></h3>
 <h3>Modelo Ram: <b>{{$lap->tipo_ram}}</b></h3>
 <h3>Capacidade Disco: <b>{{$lap->cap_hdd}}</b></h3>
 <h3>Modelo Disco: <b>{{$lap->tipo_hdd}}</b></h3>
 <h3>Placa Grafica: <b>{{$lap->grafica}}</b></h3>
 <h3>Capacidade da placa Grafica: <b>{{$lap->cap_grafica}}</b></h3>
 <h3>Tempo de Bateria: <b>{{$lap->duracao_bateria}}</b></h3>
 <h3>OutPut Carregador (VOLTS): <b>{{$lap->volts_carregador}}</b></h3>
 <h3>problema:</h3>
 <div class="row">
     <div class="col-sm-12">
     <h5>
<textarea class="form-control" style="font-size: 20px; color: red">
{{$lap->problema}}
</textarea>
</h5>
     </div>
 </div>
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