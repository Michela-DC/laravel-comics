@extends('layouts.standard')

@section('metaTitle', $comics['title'])

@section('mainContent')
    <section class="single-comics">
        <img src="{{ $comics['thumb']}}" alt="">
        <h1>{{ $comics['title']}}</h1>
    </section>
@endsection