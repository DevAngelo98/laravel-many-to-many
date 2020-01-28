@extends('layouts.base')

@section('content')
  
  <h1>Employees</h1>
  <a href="{{route('employee.create')}}">Create Employee</a>

  <ul>

    @foreach ($employees as $employee)
    <br>
    <br>
    <br>
        <li>
   

        ID:[{{$employee -> id}}] 
        <a href="{{route('employee.edit', $employee -> id)}}">Edit</a> 
        <a href="{{route('employee.delete', $employee -> id)}}">Delete</a> <br><br> <br>
          Name: {{$employee -> name}},  Lastname: {{$employee -> lastname}}

          <ul>
            
            @foreach ($employee -> tasks as $task)
            <li>
            <h3>Task</h3> <a href="{{route('employee.remove.task', [$employee-> id, $task-> id])}}">Delete</a>
              ID: [{{$task -> id}}] - {{$task -> title}}
            </li>
            @endforeach
            
          </ul>
        </li>
    @endforeach

  </ul>
@endsection