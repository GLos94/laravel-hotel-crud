@extends('layouts.main-layout')

@section('content')

  <h1>STANZA:


  </h1>
    <ul>
         <li>
           ID: {{ $stanza -> id }}
         </li>
         <li>
           ROOM NUMBER:  {{ $stanza -> room_number}}
         </li>
         <li>
           FLOOR: {{ $stanza -> floor}}
         </li>
         <li>
           BEDS: {{ $stanza -> beds}}
         </li>

    </ul>

     <a href="{{route('index')}}">INDEX STANZE</a>

@endsection
