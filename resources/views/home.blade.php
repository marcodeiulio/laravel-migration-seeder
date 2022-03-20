@extends('layouts.main')

@section('content')

@foreach($trains as $train)
<div class="container">
	<div class="row>
		<div class=" col-3">
		<h1>Train n. {{$train->id}}</h1>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">
				<h3>Company: </h3>{{$train->company}}
			</li>
			<li class="list-group-item">
				<h3>Departure Station: </h3>{{$train->departure_station}}
			</li>
			<li class="list-group-item">
				<h3>Arrival Station: </h3>{{$train->arrival_station}}
			</li>
			<li class="list-group-item">
				<h3>Departure Time: </h3>{{$train->departure_time}}
			</li>
			<li class="list-group-item">
				<h3>Arrival Time: </h3>{{$train->arrival_time}}
			</li>
			<li class="list-group-item">
				<h3>Train Number: </h3>{{$train->train_number}}
			</li>
			<li class="list-group-item">
				<h3>Coaches: </h3>{{$train->coaches}}
			</li>
		</ul>
	</div>
</div>
</div>
@endforeach

@endsection