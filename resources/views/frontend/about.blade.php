@extends('frontend.main')
<div class="container-fluid">

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Travel Guide for Myanmar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Division/State
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($divisions as $item)
                            <a href="{{url('frontend/action', $item->id)}}" class="dropdown-item">{{$item->division_Name}}</a>
                        @endforeach
                      </div>
                    </li>
                    <li class="navbar-item active">
                            <a class="nav-link" href="{{url('about')}}">About me</a>
                        </li>
                  </ul>
                </div>
            </nav>

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
