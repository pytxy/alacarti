@extends('layouts.website')
@section('title', 'Home')
@section('content')
    <div id="home">
        <canvas id="granim-canvas" style="height: 100vh; width: 100%;z-index: -2; position: absolute;"></canvas>
        <div style="position: absolute; top: 50%; width: 100%">
            <h1 class="text-center">Alacarti</h1>
        </div>
    </div>
    <b-container fluid class="mt-5">
        <b-row>
            <b-col>
                <h2 class="text-center">Find your dinner</h2>
            </b-col>
        </b-row>
    </b-container>
@endsection