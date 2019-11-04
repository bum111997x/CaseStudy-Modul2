@extends('home')
@section('title','Male Models List')
@section('index')

    <h1 class="text-center" style="margin-bottom: 10px">INFORMATION MODEL</h1>
    <div class="container" >
            <div class="card mb-3 " style="max-width: 1500px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('storage/image/'.$male->image)}}" class="card-img" alt="..."
                             style="height: 600px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <table class="table table-borderless">
                                <tr>
                                    <td colspan="2"><h5 class="card-title">{{$male->name}}</h5></td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth</td>
                                    <td>{{$male->dateOfBirth}}</td>
                                </tr>
                                <tr>
                                    <td>Height</td>
                                    <td>{{$male->height}}</td>
                                </tr>
                                <tr>
                                    <td>National</td>
                                    <td>{{$male->national}}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{$male->description}}</td>
                                </tr>
                                <tr>
                                    <td>Job</td>
                                    <td>{{$male->job}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
    </div>


@endsection
