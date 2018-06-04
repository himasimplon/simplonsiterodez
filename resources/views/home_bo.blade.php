@extends('layouts.app_bo')

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 70px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .bo_links {
        list-style: none;
    }
    .bo_each_link {
        font-size: 3.5em;
    }
</style>
    

@section('content')
<div class="content">
    <div class="title m-b-md">
        Accueil backoffice
    </div>

    <div class="links">
        <ul class="bo_links">
            <li class="bo_each_link"><a href="./page1_bo">Home</a>
            <li class="bo_each_link"><a href="./page2_bo">Simplon</a>
            <li class="bo_each_link"><a href="./page3_bo">Formation</a>
            <li class="bo_each_link"><a href="./page4_bo">Projets</a>
        </ul>
    </div>
</div>
@endsection

    