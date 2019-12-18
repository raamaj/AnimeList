@extends('layouts.master')

@section('title','Data Anime')

@section('content_header')
    <div class="container">
        <h2>Data Anime</h2>
    </div>
@endsection

@section('content')
    <div class="container">
        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mb-3">Tambah Data</button>
        <table id="anime" class="table table-striped">
            <thead>
                <tr class="bg-dark text-light">
                    <th>#</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Episodes</th>
                    <th>Status</th>
                    <th>Aired</th>
                    <th>Genres</th>
                    <th>Premiered</th>
                    <th>Studio</th>
                    <th>Source</th>
                    <th>Duration</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animes as $anime)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$anime->title}}</td>
                    <td>{{$anime->type}}</td>
                    <td>{{$anime->episode}}</td>
                    <td>{{$anime->status}}</td>
                    <td>{{$anime->start_aired}} to {{$anime->finish_aired}}</td>
                    <td>{{$anime->genres}}</td>
                    <td>{{$anime->premiered}}</td>
                    <td>{{$anime->studio_id}}</td>
                    <td>{{$anime->source_id}}</td>
                    <td>{{$anime->duration}}</td>
                    <td>{{$anime->rating}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Anime</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" placeholder="Title" type="text" name="title" id="title">
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="start">Type</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="TV" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    TV
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="OVA">
                                <label class="form-check-label" for="exampleRadios1">
                                    OVA
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="start"></label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="ONA">
                                <label class="form-check-label" for="exampleRadios1">
                                    ONA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="MOVIE">
                                <label class="form-check-label" for="exampleRadios1">
                                    MOVIE
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="start"></label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="Special">
                                <label class="form-check-label" for="exampleRadios1">
                                    Special
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control col-sm-3" placeholder="Episodes" type="number" name="episode" id="title">
                    </div>
                    <div class="form-group">
                        <label for="start">Status</label><br>
                        <select class="form-control col-sm-4" name="status" id="status">
                            <option value="Not Yet Aired">Not Yet Aired</option>
                            <option value="Currently Airing">Currently Airing</option>
                            <option value="Finished Airing">Finished Airing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="start">Start Airing</label><br>
                                <input class="form-control mr-2" type="date" name="start_aired" id="start_aired">
                            </div>
                            <div class="col">
                                <label for="start">End Airing</label><br>
                                <input class="form-control" type="date" name="finish_aired" id="finish_aired">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start">Genres</label>
                        <div class="form-check">
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" name="genre[]" value="Action">
                                    <label class="form-check-label" for="Action">Action</label><br>
                                    <input class="form-check-input" type="checkbox" name="genre[]" value="Action">
                                    <label class="form-check-label" for="Adventure">Adventure</label><br>
                                    <input class="form-check-input" type="checkbox" name="genre[]" value="Action">
                                    <label class="form-check-label" for="Shounen">Shounen</label><br>
                                </div>
                                <div class="col">
                                    <label for="start">End Airing</label><br>
                                    <input class="form-control" type="date" name="finish_aired" id="finish_aired">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection