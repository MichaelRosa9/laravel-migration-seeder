@extends('layout.main')

@section('content')

<section>
  <h1>
    Trips
  </h1>
  
  <li>
    @foreach ($trips as $trip)
        <ul>
          {{$trip['destination']}}
        </ul>
    @endforeach
  </li>

  
</section>

@endsection()