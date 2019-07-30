@extends('base')
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
                    <a class="nav-link" href="add">Add</a>
                  </li>
          </ul>
        </div>
      </nav>

<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Place Name</th>
            <th scope="col">Cid</th>
            <th scope="col">Did</th>
            <th scope="col">Image</th>
            {{-- <th scope="col">Image</th>
            <th scope="col">Image</th> --}}
            {{-- <th scope="col">Dedtailed Content</th> --}}
          </tr>
        </thead>
        <tbody>


              @foreach ($display as $content)
          <tr>
          <td>{{ $loop->iteration }}</td>
            <td>{{$content->placeName}}</td>
          <td>{{$content->cid}}</td>
          <td>{{$content->did}}</td>

          <td>{{$content->img}}</td>
          {{-- <td>{{$content->img}}</td>
          <td>{{$content->img}}</td> --}}
          {{-- <td>{{$content->content}}</td> --}}
        <td>
            <form action="{{route('backend.destroy',$content->id)  }}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger deleteUser" type="submit" onclick="return del();" id="">Delete</button>
            </form>
            </td>
        <td>


        <a href="{{action('AdminController@edit', $content->id)}}" class="btn btn-warning">Edit</a>

        </td>
          </tr>
          @endforeach


        </tbody>
      </table>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
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
