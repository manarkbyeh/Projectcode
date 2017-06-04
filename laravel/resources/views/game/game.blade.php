@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <h1 class="page_title">Game</h1>
        
        <div class="content_container left_container game_img_div">
            <img src="{{ asset('images/game/view1.jpg') }}" alt="game screenshot" id="game_img1">
        </div><!--
    --><div class="content_container game_text_div">
            <div class="text_div">
                <h2>A-Notas</h2>
            
                <p>Jij, student van de stad Antwerpen, leidde een gelukkig leven, tot de wind al je notities wegblies! Ren doorheen de stad, ontwijk obstakels door opzij te gaan, te springen en te duiken, om zo je nota's opnieuw te pakken te krijgen.</p>
                
                <a href="https://drive.google.com/file/d/0B_afDgYvri_jV3F5T3dYTnpQVVk/view" target="_blank">DOWNLOAD</a>
            </div>
        </div><!--
    --><div class="content_container game_img_div right_container deletable_div">
            <img src="{{ asset('images/game/view2.jpg') }}" alt="game screenshot" id="game_img2">
        </div>
        
    </div>
</div>

@endsection