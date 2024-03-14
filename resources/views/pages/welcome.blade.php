@extends('layouts.App')
@section('title', 'Pagina di Benvenuto')



@section('main')

<main class="container">
    <div class="row d-flex justify-content-center pt-5 gap-3">
        @foreach ($movies as $item)

            <div id="card" class="card col-2">
                <div class=" d-flex flex-column justify-content-center card-body">
                <h5 class="card-title">{{ $item['title'] }}</h5>
                <p class="card-text">{{$item['original_title']}}</p>
                <p class="card-text">{{$item['nationality']}}</p>
                </div>
            </div>

        @endforeach
    </div>

</main>

@endsection

