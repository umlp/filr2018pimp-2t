<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">


<!-- barre de menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="/">ColocManager   </a>

        <ul class="nav navbar-nav">

          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"  href="/">Mes Colocataires <span class="caret"></span></a>
          <ul class="dropdown-menu" id="listcoloc">
          @foreach ($tasks as $task)
            <li class="table-text"><a href="#"><span class="glyphicon glyphicon-user"></span>{{ $task->name }}</a></il>
          @endforeach
          </ul>
        </li>
        
        <li><a href="stats">Statistiques</a></li>
        <li><a href="TM">Tâches Ménagères</a></li>
        <li><a href="agen">Agenda</a></li>
        </ul>

    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Ma Page</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
  
  <div class="collapse navbar-collapse" id="navBarDebut">  


    
  </div>
</nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
