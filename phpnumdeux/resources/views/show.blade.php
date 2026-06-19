@extends('layout.app')

@section('content')
<h1>{{ $dimension['title'] }}</h1>
<img src={{$dimension['img']}} alt={{ $dimension['title'] }}>
<p>{{ $dimensions['description'] }}</p>

<a href="/index">Retour</a>

@endsection