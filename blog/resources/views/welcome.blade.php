@extends('layouts.master')

@section('content')
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
@endsection