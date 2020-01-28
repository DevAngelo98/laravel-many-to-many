@extends('layouts.base')

@section('content')
<form action="{{route('employee.store')}}" method="post">
      @csrf
      @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name"> <br>

      <label for="lastname">Lastname</label>
      <input type="text" name="lastname"> <br>
      

      {{-- passaggio di dati (tasks) --}}
      <select name='tasks[]' multiple>
        @foreach ($tasks as $task)
          <option value='{{$task -> id}}'> {{$task -> title}} </option>
        @endforeach
      </select>

      <br> <br>

      <input type="submit" value="CREATE">
    </form>
@endsection
