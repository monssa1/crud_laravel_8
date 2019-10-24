@extends('layouts.master')

@section('content')
<div class="container">
 <div class="col-sm-12 ">

	<table class="table">
  		<thead class="thead-dark">
    		<tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    		</tr>
 		</thead>
 		@foreach($listesclients as $client)
 	 <tbody>
    <tr>
     	<td>{{$client->id}}</td>
     	<td>{{$client->name}}</td>
     	<td>{{$client->email}}</td>
     	<td>{{$client->password}}</td>
     	<td>{{$client->phone}}</td>
     	<td>{{$client->address}}</td>
     	<td> <form method="POST" action="{{route('client.destroy',$client)}}" class="inline-block">
            		<a href="{{ route('client.edit',$client) }}" class="btn btn-success"  data-toggle="modal">
            		<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
            		</a>  
            	        {{ csrf_field() }}
            	        {{ method_field('DELETE') }}
                       <input type="submit" class="btn btn-danger"  data-toggle="modal"  data-toggle="tooltip" value="Supprimer" title="Delete" &#xE15C;
                       >
                       </form></td>
    </tr>
  </tbody>
  @endforeach
</table>
 {{$listesclients->links()}}
</div>
</div>
@endsection