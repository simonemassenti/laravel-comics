@extends('layouts.app')

@section('content')
    <div class="main">


        <div class="wrapper">
            <div class="ms_container">
                <div class="p-name">
                    CURRENT SERIES
                </div>

                <div class="ms_row">
                    @foreach ($comics as $comic)
                        <div class="ms_col">
                            <div class="comic">
                                <div>
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                </div>
        
                                <p>{{ $comic['series'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        



    </div>
@endsection
