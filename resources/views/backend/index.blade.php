@extends('base')
@extends('layouts.app')
@section('main')

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="imagesize">
        {{-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="mainpage">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Show Data</a>
            </li>

            <li class="nav-item">
                 <a class="nav-link" href="{{route('backend.create')}}">Add</a>
                  </li>
          </ul>
        </div>
      </nav>

<table class="table table-hover" style="width: 100%;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Place Name</th>
            <th scope="col">Division/State</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Image</th>
            <th scope="col">Image</th>
            <th scope="col">Latitude</th>
            <th scope="col">Logitude</th>
            {{-- <th scope="col">Dedtailed Content</th> --}}
          </tr>
        </thead>
        <tbody>


        @foreach ($display as $content)

          <td>{{ $loop->iteration }}</td>
            <td>{{$content->placeName}}</td>
          <td>{{$content->division_Name}}</td>
          <td>{{$content->Category}}</td>
          {{-- {{$two_content = $two_content::where('pid', '=', $content->id)->get()}} --}}

          <td>{{$content->img}}</td>
          @foreach ($two_content as $twocontent)
            @if ($twocontent->pid  == $content->id)
              <td>{{$twocontent->img}}</td>
            @endif
          @endforeach

          @foreach ($two_content as $twocontent)
          @if ($twocontent->pid  == $content->id)
        {{-- <td>{{$twocontent->content}}</td> --}}
        {{-- <td data-decimals="0" data-type="blob" data-originallength="729" class="data grid_edit click2 not_null truncated"><span title="Original length 729">{{$twocontent->content}}</span></td> --}}

          @endif
        @endforeach

        <td>{{$content->placename_lat}}</td>
          <td>{{$content->placeName_long}}</td>




          {{-- <td>{{$content->content}}</td> --}}
        <td>
            <form action="{{route('backend.destroy',$content->id)  }}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger deleteUser" type="submit" onclick="return del();" id="eee">Delete</button>
            </form>
            </td>
        <td>


        <a href="{{route('backend.edit', $content->id)}}"><img src="/images/edit.jpg" alt="" width="50px" height="50px"></a>

        </td>
          </tr>
          @endforeach

      </table>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
// var x = document.getElementsById("eee");


    $(document).on('click','.deleteUser',function() {
        var url = $(this).attr('rel');
        if(confirm("Are you sure?")){
           window.location.href = url
        }
        else{
            return false;
        }
    })

</script>
@endsection
