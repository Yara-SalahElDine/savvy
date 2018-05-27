@extends('layouts.master')
@section('content')
<div class="container">
</br></br>
<table class="table table-striped">
<thead>
      <tr>
        <th>Task #</th>
        <th>Name</th>
      </tr>
</thead>
<tbody>
@foreach ($tasks as $task)
      <tr>
        <td ml-3>{{ $task->id }}</td>
        <td>{{ $task->name }}</td>       
      </tr>
@endforeach
    </tbody>
  </table>

</div>
@endsection