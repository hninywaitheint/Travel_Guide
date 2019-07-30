@extends('frontend.main')
@section('content')

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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <a class="nav-link" href="{{url('about')}}">About me</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>

            <div class="col-md-10 offset-md-1">

                <div class="row">
                        <div>
                                <br>
                            <h2 id="morecontent">
                                    {{$image->placeName}}
                            </h2>

                            </div>
                    <div>
                        {{-- <br> --}}
                        <img src="{{$image->img}}" height="500px" width="800"  id="morecontent" >
                    </div>

                </div>
                    <br>
                    <p id="morecontent">
                        The population of Scotland may only be six million, but it has a history that stretches back hundreds of years, passed down through countless generations that still call this land home. A history that has left an indelible mark upon the landscape and has formed a proud, unmistakable national identity.

                        Standing stones, language and tradition - Scotland is full of history. Yet it is the countless castles, in varying states of grandeur or disrepair, that can speak most to those that visit this country. Some, like Dunrobin, with its alabaster towers and landscaped gardens still to this day scream of a past, full of glory, power and intrugue. Yet, there are others, more ancient ruins, that are little more than stone and mortar, a crumbling facade housing hundred year old ghosts all with a story to tell.
                </p>
            </div>
            <div class="container-fluid"> ￼	￼
                <div class="row">
                    @foreach ($moreimage as $content)
                        <div class="col-md-4">
                            <a href="{{url('frontend/visit',$content->id)}}">
                                <div class="card-group" >
                                    <div id='action' style="background-image: url('{{$content->img}}')">
                                    </div>
                                    <div class="card-body">
                                        {{$content->placeName}}<br>
                                        {{$content->Category}}<br>
                                        {{$content->division_Name}}
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>





</div>

@endsection
