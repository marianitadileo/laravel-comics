@extends('layouts.app')
@section('main')
    <main>
        <div class="jumbo"></div>
        <div class="ms_container">
            <span class="label lbl-current">CURRENT SERIES</span>
            <div class="ms_row_card">
                @foreach ($dbComics as $card)
                    <div class="ms_card">
                        <img src="{{ $card['thumb'] }}" alt="">
                        <div> {{ $card['series'] }} </div>
                    </div>
                @endforeach
            </div>

            <button class="label">LOAD MORE</button>
        </div>
    </main>
@endsection