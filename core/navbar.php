<?php
function Generate_navbar()
{

    return '
    <nav class="navbar navbar-expand-sm nav-bar navbar-dark justify-content-center mb-2">
        <a class="navbar-brand" href="index.php?controller=home">Home</a>
        <div class="mr-auto">
            <button class="btn primary mr-auto"><a href="index.php?controller=cps" class="text-light">CPS Test</a></button>
            <button class="btn primary mr-auto"><a href="index.php?controller=leaderboard" class="text-light">Leaderboard</a></button>
        </div>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
                <li class="nav-item active">
                    
                </li>
                <li class="nav-item active">
                <button class="btn primary" type="button" data-toggle="modal" data-target="#login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </button>
                </li>
            </ul>
        </div>
    </nav>
    ';
}