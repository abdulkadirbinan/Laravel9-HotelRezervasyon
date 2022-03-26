@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    <div class="col-sm-3 col-lg-2">
        <div style="background-color: #0a58ca;">
            <h3>sidebar</h3>
            <ul>
                    <li>karabuk</li>
                    <li>konya</li>
            </ul>
        </div>
    </div>

@endsection

@section('content')
    <div class="col-sm-9 col-lg-10">
        <h1>slider</h1>
        <p>deneme</p>

    </div>


@endsection
