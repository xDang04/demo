@extends('layout.main')
@section('content')
    <form action="update-course" method="POST">
        <label for="">Course Name :</label>
        <input type="text" name="course_name" value="{{$data->course_name}}">
        <label for="">Price:</label>
        <input type="text" name="price" value="{{$data->price}}">
        <label for="">TEacher Name :</label>
        <input type="text" name="teacher_name" value="{{$data->teacher_name}}"><br>
        <label for="">Mo Ta :</label>
        <input type="text" name="description" value="{{$data->description}}"><br>

        <input type="hidden" name="id" value="{{$data->id}}">

        <input type="submit" value="Update">
    </form>
@endsection