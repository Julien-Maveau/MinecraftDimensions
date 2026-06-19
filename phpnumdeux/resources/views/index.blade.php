@extends('layout.app')

@section('content')
<div class="hero-container">     
        <div class="background-wall"></div>             
        <div class="overlay"></div>

        
        <h1 class="main-title">Les Dimension de Minecraft<br>et leur exploration</h1>            
            @foreach($dimension as $dimension)
            <div class="card">
                <div class="card-badges">
                    <a href="/views/{{ $dim->id }}">
                        <img src="{{ $dim->img }}" alt="{{ $dim->title }}">
                    <br>
                    {{ $dim->title }}
                </a>
                </div>
            </div>
            @endforeach
            <main class="main-content">
             </main>
</div>
@endsection


