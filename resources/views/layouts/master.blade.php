<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet"> 

	<title>Crud Client Laravel 6</title>
</head>
<body>
<nav  class="navbar navbar-dark bg-dark">
  <a href="{{route('client.create')}}" class="nav-link" style="color: white">Ajouter</a>
  <a class="nav-link" style="color: white; padding-right: 750px" href="{{route('client.index')}}">Liste clients</a>
      <form class="form-inline">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
</nav>
<br>
	@yield('content')
</body>
</html> 