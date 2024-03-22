@extends('layout.main')
@section('content')
    <form action="post-course" method="POST">
        <label for="">Course Name :</label>
        <input type="text" name="course_name">
        <label for="">Price:</label>
        <input type="text" name="price">
        <label for="">TEacher Name :</label>
        <input type="text" name="teacher_name"><br>
        <label for="">Mo Ta :</label>
        <input type="text" name="description"><br>

        <input type="submit" value="Them">
    </form>
@endsection