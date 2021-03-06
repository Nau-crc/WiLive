<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="categoryHeader" >
        <a href="{{route('home')}}">
            <i class="fas fa-arrow-circle-left downArrow"></i>
        </a>
        <a href="">
            <i class="fas fa-user-edit downArrow"></i>
        </a>
</header>
<div class="picture">
<img class="profilePic" src="https://picsum.photos/id/1/200/300" alt="profile picture">
</div>

<footer>
    <a href="#" role="button">                   
        <button class="createButton" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
        </button>
    </a>

    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
    </form>

    <p class="copyRight">Design with <span class="heart">❤</span> by echoteam</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}"> 
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>

            <a href="{{ route('perfil') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        </ul>
    </nav> 
</footer>
</body>
</html>