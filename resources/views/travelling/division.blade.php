@extends('base')
@section('main')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a content</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>
                            {{$error}}
                        </li>

                    @endforeach
                </ul>
            </div><br>

            @endif
        <form action="{{route('travelling.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="division_ID">Division ID</label>
                <input type="text" class="form-control" name="division_ID">
            </div>
            <div class="form-group">
                <label for="division_Name">Division Name</label>
                <input type="text" class="form-control" name="division_Name">
            </div>
            <button class="btn btn_primary-outline">Add Content </button>
        </form>
        </div>
        </div>
    </div>

@endsection
