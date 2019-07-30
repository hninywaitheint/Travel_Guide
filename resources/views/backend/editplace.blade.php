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



    <form method="post" action="{{ action('AdminController@update', $id)}}">
@method('PUT')
{{-- @csrf --}}

{{csrf_field()}}

        <div class="form-group">

              <label for="inputEmail4">Place Name</label>
              <input type="text" name="placeName" class="form-control" id="inputEmail4" placeholder="" value={{$editdata->placeName}}>
            </div>

            <div class="form-group">
              <label for="inputState" >Category</label>
              <input type="text" name="Category" class="form-control" id="inputEmail4" placeholder="" value={{$editdata->cid}}>

              {{-- <select id="inputState" class="form-control">
                <option value={{$editdata->Category}}>Pagoda</option>
                <option>Relaxing Place</option>
                <option>Other Place</option>
              </select> --}}
            </div>

            <div class="form-group">
              <label for="inputState">Division/State</label>
              <input type="text" name="division_Name" class="form-control" id="inputEmail4" placeholder="" value={{$editdata->did}}>

              {{-- <select id="inputState" class="form-control" placeholder="" value={{$editdata->division_Name}}>
              <input type="text" name="division_Name" class="form-control" id="inputEmail4" placeholder="" value={{$editdata->division_Name}}>


                {{-- <option >Yangon</option>
                <option>Mandalay</option>
                <option>Bago</option>
                <option>Sagaing</option>
                <option>Magway</option>
                <option>Tanintharyi</option>
                <option>Ayeyarwady</option>
                <option>Kachin</option>
                <option>Kayar</option>
                <option>Kayin</option>
                <option>Chin</option>
                <option>Mon</option>
                <option>Rachine</option>
              </select>  --}}

              {{-- <select  name="comic_publisher" id="publishers" >
                @foreach($select as $team)
                    <option value="{{$editdata->division_Name}}">{{$team->division_Name}}</option>
                @endforeach
          </select> --}}


          {{-- <select class ="form-control" id="type" name="type">
            @foreach ($Advert as $type)
                <option {{ $type->division_Name == $Advert->division_Name ? 'selected':'' }}>{{$type->division_Name}}</option>
            @endforeach
        </select> --}}

        <div class="form-group">
            <label for="exampleFormControlFile1">Image-1</label>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" value={{$editdata->img}}>
        </div>

        {{-- <div class="form-group">
            <label for="exampleFormControlFile1">Image-2</label>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" value={{$editdata->img}}>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image-3</label>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" value={{$editdata->img}}>
        </div> --}}

          <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
