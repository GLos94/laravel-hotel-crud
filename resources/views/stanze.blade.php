@extends('layouts.main-layout')

@section('content')

  <h1>STANZE</h1>
  {{-- <h3>
      <a href="{{ route('ospite-create') }}">NEW OSPITE</a>
  </h3> --}}
    <ul>
      @foreach ($stanze as $stanza)
        <li>
          <a href="{{ route('stanza-show', $stanza -> id)}}">

           {{ $stanza -> id }}
           {{ $stanza -> room_number}}

         </a>
        </li>
      @endforeach
    </ul>

@endsection
