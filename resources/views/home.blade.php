
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        @foreach($comics as $comic)
        <div class="card_fumetto col-12 col-md-6 col-lg-2 text-white my-5">
            <a href="/">
                <img src="{{ $comic->thumb }}" alt="">
                <div class="title_card mb-1">
                    {{ $comic->series }}
                </div>
            </a>
        </div>
        @endforeach 
    </div>
  </div>

@endsection
