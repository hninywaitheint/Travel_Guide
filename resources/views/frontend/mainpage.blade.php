{{-- @extends('login') --}}
@extends('frontend.main')

@section('content')


{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>Travel Guide for Myanmar</h1>
        </div>
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>&nbsp;&nbsp;
                        <li class="navbar-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @foreach ($division as $item)
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
    </div> --}}

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
                    Dropdown link
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

    <div class="container-fluid" style="background-position:relative">
        <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="bbb">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/maharmyatmuni.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/deedoke.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/colonial.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/pyinoolwin.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/sutaungpyae.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/ubeinbridge.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/mandalayhill.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid" style="background-position:relative">
        @foreach ($randomimg as $content)
            <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="bbb">
                    <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('{{$content->img}}')">
                        </div>
                    </div>
                </div>
            </div>$divisions = DB::table('divisions')
        ->select('*')->get();
        @endforeach
    </div> --}}

    <div class="col-sm-10 offset-sm-1"><br><br>
        <div class="row">
            <h2>Introduction</h2>
        </div>
        <p>
            Myanmar, the official name for the Southeast Asian nation more commonly known as Burma, is a must-see for travelers who like Buddha and beaches, though not necessarily in that order. The country contains thousands of Buddhist temples. It also has pristine white beaches along the Bay of Bengal and Andaman Sea. The country is slowly opening to foreign tourism, so travelers who want to experience a more traditional Burma may want to visit now.
        </p>
    </div>
    <div class="container-fluid"> ￼	￼
        <div class="row">
            @foreach ($randomimg as $content)
                {{-- <div class="col-md-4">
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
                </div> --}}

                <div class="card" style="width: 18rem;margin-left:10%">
                    <a href="{{url('frontend/twocontent',$content->id)}}">
                        <div class="card-img-top" style="background-image: url('{{$content->img}}')"></div>
                        <div class="card-body">
                            <h5>{{$content->placeName}}</h5><br>
                            {{$content->Category}}<br>
                            {{$content->division_Name}}
                        </div>
                    </a>

                </div>

            @endforeach
        </div>
    </div>

</div>
@endsection


{{-- <div class="col-md-4">
    <a href="#">
        <div class="card" style="width: 18rem;margin-left:10%">
            <img src="images/mandalay/mandalay.jpg" class="card-img-top" alt="Mandalay">
            <div class="card-body">
                <h5 class="card-title">Mandalay Division</h5>
            </div>
        </div>
    </a>
</div> --}}
