@extends('home')
@section('title','Male Models List')
@section('index')
    @include('header')

    <div class="d-flex justify-content-center" style="margin-top: 45px">
        <h1>MALES MODEL IN THE WORLD</h1>
    </div>
    <div class="row">
        @foreach($males as $male)
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card" style="width: 13rem;height: 24rem; margin-top: 50px">
                    <img class="card-img-center" src="{{asset('storage/image/'. $male->image)}}"
                             alt="Card image cap" style="width: 206px; height: 250px">
                    <div class="card-body">
                        <p class="card-text text-danger">Views: {{$male->viewCount}}</p>
                        <h5 class="card-title">{{$male->name}}</h5>
                        <a href="{{route('model.description',$male->id)}}" class="btn btn-outline-primary" style="width: 70px;height: 30px">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination d-flex justify-content-center" style="margin-top: 50px">
            <li class="page-item">{{$males->links()}}</li>
        </ul>
    </nav>
    @include('footer')
@endsection
