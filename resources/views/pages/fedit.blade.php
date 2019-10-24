@extends('layouts.master')

@section('content')
<h1>Edit </h1>
	<div class="container">
		  <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-6-offset-3">
    			<div class="container-fluid mt-3">
       			  <form method="POST" action="{{route('client.update',$client)}}" >
           			{{ csrf_field() }}
           			{{ method_field('PUT')}}
            		<div class="form-row">
              			
              			@include('pages/_form',['submitButtonText' => "Modifier"])

        		  </form>
           		 </div>
     		</div>

	</div>

@endsection