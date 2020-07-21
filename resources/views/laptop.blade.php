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
    <link rel="stylesheet" type="text/css" href="/../css/laptop.css">
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



<div class="container-fluid">

<div class="container db_table">
  <h3 class="text-center"><b>--HDD's Disponíveis--</b></h3>
    <table class="table table-bordered text-center">
    <thead>
      <th>ID</th>
      <th>Marca</th>
      <th>Geração</th>
      <th>Modelo</th>
      <th><div class="cap">Cap RAM</div></th>
      <th><div class="cap">Tipo RAM</div></th>
      <th><div class="cap">Cap HDD</div></th>
      <th>Tipo HDD</th>
      <th>Grafica</th>
      <th>Cap Grafica</th>
      <th>Polegas</th>
      <th>Tempo Bateria</th>
      <th>Cap Carregador</th>
      <th>Problema</th>
      <th > <div class="accao">Acção</div> </th>
    </thead>
      <tbody>
        @foreach($laps as $lap)
        <tr>
          <td>{{$lap->id}}</td>
          <td>{{$lap->marca}}</td>
          <td>{{$lap->geracao}}</td>
          <td>{{$lap->modelo}}</td>
          <td>{{$lap->cap_ram}}</td>
          <td>{{$lap->tipo_ram}}</td>
          <td>{{$lap->cap_hdd}}</td>
          <td>{{$lap->tipo_hdd}}</td>
          <td>{{$lap->grafica}}</td>
          <td>{{$lap->cap_grafica}}</td>
          <td>{{$lap->polegadas}}</td>
          <td>{{$lap->duracao_bateria}}</td>
          <td>{{$lap->volts_carregador}}</td>
          <td>Click View</td>
          <td class="action"><a href="{{route('laptop.show',$lap->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
            <a href="{{route('laptop.edit',$lap->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil" style="color:white"></i></a>
            <a href="{{route('laptop.destroy',$lap->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach

    </tbody>
</table>
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