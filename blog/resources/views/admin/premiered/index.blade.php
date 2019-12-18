@extends('layouts.master')
@section ('title','Data Premiered')

@section ('content_header')
    <div class='container'>
    <h2>Data Premiered</h2>
    </div>
@endsection

@section ('content')
<div class="container">
        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mb-3">Tambah Data</button>
        <table id="anime" class="table table-striped">
            <thead>
                <tr class="bg-dark text-light">
                    <th>#</th>
                    <th>ID</th>
                    <th>Premiered</th>
                </tr>
            </thead>
            <tbody>
            @foreach($premiered as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->premiered_time}}</td>
                    
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">ID</label>
          <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Premiered Time</label>
          <input type="text" name="premiered_time"class="form-control" id="exampleInputPassword1">
        </div>
       
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection