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
                    @foreach ($division as $item)
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

    <div class="col-sm-10 offset-sm-1">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                    <h1 id="culture">
                        {{$divisionId->division_Name}}
                    </h1>
            </div>
        </div>
    </div>

    {{-- ***************************************************************** --}}
    {{-- <div class="container-fluid" style="background-position:relative">
        <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="bbb">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/hsinbyume.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/kyauktawgyi.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/mingun.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/patotawgyi.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/shweinbin.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/tower.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/yankin.jpg')">
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    {{-- ***************************************************************************************************************** --}}



    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$divisionId->id}}" class="active"></li>
            </ol>
            <div class="carousel-inner" id="bbb" data-interval="1000">
                    @for($i = 0; $i < count($slideimage); $i++)
                                @if ($i)
                                    <div class="carousel-item active">
                                        <div class="d-flex align-items-center justify-content-center min-vh-100" style="width:100%;height:350px;"  id='bbb' style="background-image: url({{$slideimage[$i]->img}}")>
           </div>
                                    </div>
                                @else
                                    <div class="carousel-item">
                                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb' style="background-image: url({{$slideimage[$i]->img}})">
                                    </div>
                                    </div>
                                @endif
                    @endfor
            </div>
    </div> --}}

    <div class="container-fluid" style="background-position:relative">
        <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$divisionId->id}}" class="active"></li>
            </ol>
            @for($i = 0; $i < count($slideimage); $i++)
                <div class="carousel-inner" id="bbb" data-interval="1000">
                    <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center min-vh-100" style="width:100%;height:350px;"  id='bbb' style="background-image: url({{$slideimage[$i]->img}}")>

                    </div>
                </div>
            @endfor
        </div>
    </div>


    <br>

    <div class="col-sm-10 offset-sm-1">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h2 id="culture">The Culture of {{$divisionId->division_Name}}</h2>
            </div>
        </div>
            <br>
        <p>
                {{$divisionId->culture}}
        </p>
    </div>

    <div class="container-fluid"> ￼	￼
        <div class="row">
            @foreach ($moreimage as $content)
                <div class="col-md-4" >
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

    <input type="hidden" name="location" value="{{$divisionId->division_lat}}" id="lat">
    <input type="hidden" name="location" value="{{$divisionId->division_long}}" id="long">

    </div>
</div>
@endsection

@section('script')
{{-- <script>
        var map;


        var locate = new google.maps.LatLng(longtitude, latitude);
        function initMap() {
            var locate = new google.maps.LatLng(latitude,longtitude);
          map = new google.maps.Map(document.getElementById('map'), {
            center: locate,
            zoom: 10
          });
        }
</script> --}}

    <script>

        mapboxgl.accessToken = 'pk.eyJ1IjoidGhpaGEyMDIiLCJhIjoiY2p5bGZmZnBiMDd0bzNscm9jM2xpYjA2MSJ9.2ECDBiamZ5zTSgngsoaRRw';

        var latitude = ((document.getElementById('lat')||{}).value);
        var longtitude = ((document.getElementById('long')||{}).value);
        var locate = new mapboxgl.geometry.coordinates[longtitude, latitude];
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center:locate,
        zoom: 10,
        });

        // code from the next step will go here!

    </script>
@endsection
