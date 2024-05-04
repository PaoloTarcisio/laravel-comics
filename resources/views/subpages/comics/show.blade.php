@extends('layouts.app')

@section('title-content')
    {{ $comic['title'] }}
@endsection

@section('main-content')
    <section class="container p-5">
        <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="my-card p-3">
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
                        <h6>
                            {{ $comic['series'] }}
                        </h6>
                    </div>
                </div>
            </div>
            <div class="my-card col-lg-6 col-md-6 col-sm-12 text-center p-5">
                {{ $comic['description'] }}
            </div>
        </div>
    </section>
@endsection
