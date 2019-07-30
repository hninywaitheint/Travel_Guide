@extends('frontend.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>Travel Guide for Myanmar</h1>
        </div>
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar-item active">
                            <a class="nav-link" href="{{url('mainpage')}}">Home <span class="sr-only">(current)</span></a>
                        </li>&nbsp;&nbsp;
                        <li class="navbar-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{url('action')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('action')}}">Yangon</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Mandalay</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Bago</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Sagaing</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Magway</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Tanintharyi</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Ayeyarwady</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Kachin</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Kayar</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Kayin</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Chin</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Mon</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Rachine</a>
                                    <a class="dropdown-item" href="{{url('action')}}">Shan</a>
                            </div>
                        </li>&nbsp;&nbsp;
                        <li class="navbar-item active">
                            <a class="nav-link" href="#">About me</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid" style="background-position:relative">
            <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="bbb">
                    <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img1.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img2.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img3.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img4.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img5.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img6.jpg')">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/img7.jpg')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 offset-md-2">
            <br><br>
            <p>
                The population of Scotland may only be six million, but it has a history that stretches back hundreds of years, passed down through countless generations that still call this land home. A history that has left an indelible mark upon the landscape and has formed a proud, unmistakable national identity.

                Standing stones, language and tradition - Scotland is full of history. Yet it is the countless castles, in varying states of grandeur or disrepair, that can speak most to those that visit this country. Some, like Dunrobin, with its alabaster towers and landscaped gardens still to this day scream of a past, full of glory, power and intrugue. Yet, there are others, more ancient ruins, that are little more than stone and mortar, a crumbling facade housing hundred year old ghosts all with a story to tell.
            </p>
        </div>
    </div>
</div>
