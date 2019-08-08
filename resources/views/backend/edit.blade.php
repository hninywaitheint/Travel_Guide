@extends('base')
@section('main')

<div class="col-md-6 offset-md-3">
        <h1>Edit Item</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

        @endif



    <form method="post" action="{{ route('backend.update',$editdata->id)}}">
@method('PUT')
{{-- @csrf --}}

{{csrf_field()}}

        <div class="form-group">

            <label for="inputState">Place Name</label>
            <input type="text" class="form-control" name="placeName" value="{{$editdata->placeName}}">
        </div>

        <div class="form-group">
            <label for="inputState" >Category</label><br>
            <select class="form-control" name="Category" id="">
                @foreach ($category as $item)
            <option value="{{$item->id}}" {{$item->id == $editdata->cid ? 'selected' : ''}}>{{$item->Category}}</option>

                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="inputState">Division/State</label><br>
            {{-- <input type="text" name="division_Name" class="form-control" id="inputEmail4" placeholder="" value={{$editdata->division_Name}}> --}}

            <select class="form-control" name="division_Name" id="inputState">
            @foreach ($division as $item)
                <option value="{{$item->id}}" {{$item->id == $editdata->did ? 'selected' : ''}}>{{$item->division_Name}}</option>

            @endforeach
            </select>
        </div>


        <div class="form-group" >
            <label for="exampleFormControlFile1">Image-1</label>

            <input type="file" name="img_one" class="form-control-file" id="exampleFormControlFile1" value={{$editdata->img}}>
            @if ("images/{{ $editdata->img}}")
                <img src="{{url('images/' . $editdata->img)}}" style="width: 40px; height: 40px"/>
            @else
                <p>Image Not Found</p>
            @endif
        </div>



        <div class="form-group">
            <label for="exampleFormControlFile1">Image-2</label>
            <input type="file" name="img_two" class="form-control-file" id="exampleFormControlFile1" value={{$twocontents->img1}}>
            @if ("images/{{ $twocontents->img1}}")
                <img src="{{url('images/' . $twocontents->img1)}}" style="width: 40px; height: 40px"/>
            @else
                <p>Image Not Found</p>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image-3</label>
            <input type="file" name="img_three" class="form-control-file" id="exampleFormControlFile1" value={{$twocontents->img2}}>
            @if ("images/{{ $twocontents->img2}}")
                <img src="{{url('images/' . $twocontents->img2)}}" style="width: 40px; height: 40px"/>
            @else
                <p>Image Not Found</p>
            @endif
        </div>


        {{-- <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image_one" id="" class="form-control-file" placeholder="" value={{$editdata->img}}>
            <div class="custom-file-label">Choose File</div>
          </div> --}}


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content-1</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="content1" rows="3" value="{{$twocontents->content1}}">{{$twocontents->content1}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content-2</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="content2" rows="3" value={{$twocontents->content2}}>{{$twocontents->content2}}</textarea>
        </div>

        <div class="form-group">

            <label for="inputState">Latitude</label>
            <input type="text" class="form-control" name="latitude" value="{{$editdata->placename_lat}}">
        </div>

        <div class="form-group">

            <label for="inputState">Longitude</label>
            <input type="text" class="form-control" name="longitude" value="{{$editdata->placeName_long}}">
        </div>




          <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
