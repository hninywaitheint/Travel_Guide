
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
                                            {{-- <a class="dropdown-item" href="{{url('action')}}">Yangon</a>
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
                                            <a class="dropdown-item" href="{{url('action')}}">Shan</a> --}}
                                            @foreach ($divisions as $item)
                                                <a href="{{url('frontend/action', $item->id)}}" class="dropdown-item">{{$item->division_Name}}</a>
                                            @endforeach
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

            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                        <h2 id="culture">
                            {{$twocontent->placeName}}
                        </h2>
                </div>
            </div>

            <div class="col-md-10 offset-md-1">
                @foreach ($twocontents as $contents)
                <div class="row">
                    <div>
                        <img src="{{$contents->img}}" height="500px" width="800"  id="morecontent" style="border-radius: 10px">
                    </div>
                </div>
                    <br>
                    <p id="morecontent">
                        {{$contents->content}}
                    </p>
                @endforeach
            </div>
            <div class="container-fluid"> ￼	￼
                <div class="row">
                    @foreach ($moreimage as $content)
                        <div class="col-md-4">
                            <a href="{{url('frontend/twocontent',$content->id)}}">
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
                <div id="map" style="width:600px;height:400px;margin-top:10px;margin-left:20%;margin-right:20%;"></div>
        {{-- <div id="map" style="width:100%;height:400px;margin-top:10px;"></div> --}}

                    <input type="hidden" name="location" value="{{$twocontent->placename_lat}}" id="lat">
                    <input type="hidden" name="location" value="{{$twocontent->placeName_long}}" id="long">

            </div>
</div>

@endsection


@section('script')
<script>
        var map;
        var latitude = ((document.getElementById('lat')||{}).value);
        var longtitude = ((document.getElementById('long')||{}).value);

        function initMap() {
            var locate = new google.maps.LatLng(latitude,longtitude);
          map = new google.maps.Map(document.getElementById('map'), {
            center: locate,
            zoom: 8
          });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB_oTREnz7oebRDP_8w45z1DhoVCSTUBo&callback=initMap" async defer></script><br><br>

      <div></div>
@endsection
