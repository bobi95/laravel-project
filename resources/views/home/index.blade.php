@extends('_layouts.standart')

@section('title', 'Home')

@section('content')
    @php
    $items = $page->getItems();
    $j = count($items);
    @endphp
    @for ($i = 0; $i < $j; $i++)
            <div class="card horizontal col s12 m12 l6">
                <div class="card-image">
                    <img src="http://lorempixel.com/300/190/nature/{{$i}}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">More...</a>
                    </div>
                </div>
            </div>
    @endfor
    @include('_components.pagination', [ 'page' => $page])
@endsection
