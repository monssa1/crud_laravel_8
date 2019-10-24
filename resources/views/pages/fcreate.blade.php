@extends('layouts.master')

@section('content')
	<div class="container">
		  <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-6-offset-3">
    			<div class="container-fluid mt-3">
       			  <form method="POST" action="{{route('client.store')}}" >
           			{{ csrf_field() }}
            		<div class="form-row">

              			@include('pages/_form',['submitButtonText' => "Créer"])

        		  </form>
           		 </div>
     		</div>

	</div>
	
@endsection