
@extends('frontend.main')
@section('content')

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

<div class="container-fluid">

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
            zoom: 15
          });
        }
      </script>
      {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB_oTREnz7oebRDP_8w45z1DhoVCSTUBo&callback=initMap" async defer></script><br><br> --}}

      <div></div>
@endsection
