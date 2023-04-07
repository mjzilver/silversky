@extends('layouts.backend')

    @section('content')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mb-5">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="Services-tab" data-toggle="tab" href="#Services" role="tab" aria-controls="Services" aria-selected="true">
                                Services
                            </a>                    
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Portfolio-tab" data-toggle="tab" href="#Portfolio" role="tab" aria-controls="Portfolio" aria-selected="false">
                                Portfolio
                            </a>    
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content" >
                    <div class="tab-pane fade show active" id="Services" role="tabpanel" aria-labelledby="Services-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['Services'] as $service)
                                <tr>
                                    <th scope="row">{{ $service->id }}</th>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->url }}</td>
                                    <td>
                                        <form method="get" action="{{ url('backend/services/' . $service->id . '/edit') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('backend/services/' . $service->id . '') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <div class="form-group">
                                                <button class="btn btn-warning" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('backend/services/create') }}" class="btn btn-primary">Add</a>
                    </div>
                    <div class="tab-pane fade" id="Portfolio" role="tabpanel" aria-labelledby="Portfolio-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Website url</th>
                                    <th scope="col">Image count</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['Portfolio'] as $portfolio)
                                <tr>
                                    <th scope="row">{{ $portfolio->id }}</th>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->url }}</td>
                                    <td><abbr title="@foreach ($portfolio->images as $img){{$img['url'] }} @endforeach">{{ $portfolio->images->count() }}</abbr></td>
                                    <td>
                                        <form method="get" action="{{ url('backend/portfolio/' . $portfolio->id . '/edit') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('backend/portfolio/' . $portfolio->id . '') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <div class="form-group">
                                                <button class="btn btn-warning" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('backend/portfolio/create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <a href="{{ url('/') }}" class="btn btn-primary">Front page</a>
            </div>
        </div>
    </div>
    @endsection