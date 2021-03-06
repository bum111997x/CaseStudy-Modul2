@extends('home')
@section('title','Model Manager')
@section('index')

    <h1 style="text-align: center; margin-bottom: 15px">Male Model Manager</h1>
    <div class="row d-flex justify-content-center" style="margin-bottom: 20px">
        <div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        <th scope="col" >DoB</th>
                        <th scope="col">Height</th>
                        <th scope="col">National</th>
                        <th scope="col">Description</th>
                        <th scope="col">Job</th>
                        <th scope="col">Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($males as $key => $male)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$male->name}}</td>
                            <td>{{$male->dateOfBirth}}</td>
                            <td>{{$male->height}}</td>
                            <td>{{$male->national}}</td>
                            <td>{{Str::words($male->description,30)}}</td>
                            <td>{{$male->job}}</td>
                            <td><img src="{{asset('storage/image/'.$male->image)}}" class="rounded mx-auto d-block"
                                     style="width: 100px;height: 150px"></td>
                            <td><a href="{{route('model.delete',$male->id)}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{route('model.edit',$male->id)}}" class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination d-flex justify-content-center" style="margin-top: 50px">
            <li class="page-item">{{$males->links()}}</li>
        </ul>
    </nav>
    @include('footer')
@endsection
