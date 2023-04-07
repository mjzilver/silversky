@extends('layouts.backend')

    @section('content')
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 border bg-light text-dark rounded">
                <h3 class="text-center text-dark pt-5">Dienst aanmaken</h3>
                <div class="container col-md-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <form id="login-form" class="form" action="{{url('backend/services')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="text-info">Title:</label><br>
                                        <input type="text" name="title" id="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="text-info">Image:</label><br>
                                        <input type="file" name="url" id="url" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="text-info">Description:</label><br>
                                        <textarea class="form-control" name="description" id="description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="short_description" class="text-info">Short description:</label><br>
                                        <textarea class="form-control" name="short_description" id="short_description" required></textarea>
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