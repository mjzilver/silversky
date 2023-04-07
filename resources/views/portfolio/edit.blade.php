@extends('layouts.backend')

    @section('content')
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 border bg-light text-dark rounded">
                <h3 class="text-center text-dark pt-5">Portfolio item aanpassen</h3>
                <div class="container col-md-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <form id="login-form" class="form" action="{{ url('backend/portfolio/' . $portfolio->id . '') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH') }}

                                    <div class="form-group">
                                        <label for="title" class="text-info">Title:</label><br>
                                        <input type="text" name="title" id="title" value="{{ $portfolio->title }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="text-info">Url:</label><br>
                                        <input type="text" name="url" id="url" value="{{ $portfolio->url }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="text-info">Description:</label><br>
                                        <textarea class="form-control" name="description" id="description" required>{{ $portfolio->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="images" class="text-info">Images:</label><br>

                                        @foreach ($portfolio->images as $img)
                                            <img src="{{ url($img['url']) }}" class="img-thumbnail col-md-1" >
                                        @endforeach
                                        
                                        <input type="file" id="images" name="images[]" class="form-control" multiple/>
                                        <label for="replace" class="text-info">
                                            <span>Replace</span> 
                                            <span><input id="replace" name="replace" type="checkbox" class="form"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                        <a class="btn btn-info btn-md" href="{{ url('dashboard') }}">back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection