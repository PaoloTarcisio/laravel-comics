@extends('layouts.app')

@section('title-content')
    Laravel Comics
@endsection

@section('main-content')
    <section class="container p-5">
        <div class="row">
            @foreach ($comics as $index => $comic)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="my-card m-2">
                        <h5 class="p-3">
                            {{ $comic['title'] }}
                        </h5>
                        <div class="img-container">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="price">
                            {{ $comic['price'] }}
                        </div>
                        <div class="series">
                            {{ $comic['series'] }}
                        </div>
                        <div>
                            <a href="{{ route('comics.show') }}?index={{ $index }}">MOSTRA</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
