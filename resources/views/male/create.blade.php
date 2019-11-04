@extends('home')
@section('title','Form Create Male Model')
@section('index')

    <h1 style="text-align: center">FORM CREATE MALE MODEL INFORMATION</h1>

    <form method="post" enctype="multipart/form-data" action="{{route('model.store')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control
                        @if($errors->has('name'))
                            border-danger
                        @endif
                            "
                               id="name" name="name">
                        @if($errors->has('name'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date Of Birth</label>
                        <input class="form-control
                        @if($errors->has('dateOfBirth'))
                            border-danger
                        @endif
                            "
                               id="dateOfBirth" name="dateOfBirth">
                        @if($errors->has('dateOfBirth'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('dateOfBirth')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="height">Height</label>
                        <input type="text" class="form-control
                        @if($errors->has('height'))
                            border-danger
                        @endif
                            "
                               id="height" name="height">
                        @if($errors->has('height'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('height')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="national">National</label>
                        <input type="text" class="form-control
                        @if($errors->has('national'))
                            border-danger
                        @endif
                            "
                               id="national" name="national">
                        @if($errors->has('national'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('national')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control
                        @if($errors->has('description'))
                            border-danger
                        @endif
                            "
                               id="description" name="description">
                        </textarea>
                        @if($errors->has('description'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('description')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" class="form-control
                        @if($errors->has('job'))
                            border-danger
                        @endif
                            "
                               id="job" name="job">
                        @if($errors->has('job'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('job')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Image Name</label>
                        <input type="text" class="form-control
                        @if($errors->has('fileName'))
                            border-danger
                        @endif
                            "
                               name="fileName">
                        @if($errors->has('fileName'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('fileName')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="image">
                        @if($errors->has('image'))
                            <p class="text-danger"><i class='fas fa-exclamation-circle'
                                                      style="color: red"></i>{{$errors->first('image')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary"><a href="{{route('model.manager')}}"
                                                                     style="color: white">Cancel</a></button>
                </div>
            </div>
        </div>
    </form>

@endsection
