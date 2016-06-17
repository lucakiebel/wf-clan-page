<?php require_once '../config.php'; ?>
<div class="header">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border-color:#333">
        <span class="icon-bar" style="background:white"></span>
        <span class="icon-bar" style="background:white"></span>
        <span class="icon-bar" style="background:white"></span>
        </button>
        <a href="/" class="navbar-brand navbar-link"></a>
    </div>
    <div class="collapse navbar-collapse">
    </li>
    <ul class="nav navbar-nav pull-right">

        <li><a href="#">Menu 1</a></li>
        <li><a href="#" target="_blank">Menu 2</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">Dropdown Menu
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Inner Dropdown 1</a></li>
              <li><a href="#">Inner Dropdown 2</a></li>
              <li><a href="#">Inner Dropdown 3</a></li>
            </ul>
          </li>
    </ul>
    </div>
</nav>
</div>
