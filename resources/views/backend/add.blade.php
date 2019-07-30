@extends('base')
@section('main')

<div class="col-md-6 offset-md-3">
        <h1>Add New Item</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

        @endif


</div>
<form method="POST" action="{{ route('backend.store')}}" autocomplete="off" enctype="multipart/form-data">
    {{-- @method('POST') --}}
    {{-- @csrf --}}

    {{csrf_field()}}

    <div class="col-md-6 offset-3">
        <div class="form-group">

              <label for="inputEmail4">Place Name</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="" name="placeName">
            </div>

            <div class="form-group">
              <label for="inputState">Category</label>
              <select id="inputState" class="form-control" name="Category">
                <option selected>Pagoda</option>
                <option>Relaxing Place</option>
                <option>Other Place</option>
              </select>
            </div>

            <div class="form-group">
              <label for="inputState">Division/State</label>
              <select id="inputState" class="form-control" name="division_Name">
                <option selected>Yangon</option>
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
              </select>
            </div>


        <div class="form-group">
            <label for="exampleFormControlFile1">Image-1</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_one">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image-2</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_two">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image-3</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_three">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
@endsection
