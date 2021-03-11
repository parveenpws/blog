
@section('content')
@extends('layouts.master')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Blogs</a></li>
    <li><a data-toggle="tab" href="#menu1">Users</a></li>
    
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Blogs</h3>
      <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
   
    <div class="row">
        <div class="col-md-12">
            <table class="table">
          
            <tr>
            <th>id</th>
            <th>Title</th>
            <th>created_at</th>
            <th>Action</th>
            </tr>
            @foreach($posts as $post)
            <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
             
            <a href="{{ route('admin.edit', ['id' => $post->id]) }}">Edit</a>
            <a href="{{ route('admin.delete', ['id' => $post->id]) }}">Delete</a></td>
            </tr>
            @endforeach
            </table>
           
        </div>
    </div>

    <div class="row">
    <div class="col-md-12 text-center">
    {{$posts->links()}}</div></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Users</h3>
      <table class="table">
          
          <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>created_at</th>
          </tr>
          @foreach($users as $user)
          <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at }}</td>
          </tr>
          @endforeach
          </table>
         
    </div>
  
  </div>
@endsection

    

    