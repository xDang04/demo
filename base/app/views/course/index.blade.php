@extends('layout.main')
@section('content')
<table border="1">
    <thead>
        <th>ID</th>
        <th>Course Name</th>
        <th>Price</th>
        <th>Teacher Name</th>
        <th>Description</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->teacher_name }}</td>
                <td>{{ $course->description }}</td>
                <th>
                    <a href="viewUpdate-course&id={{ $course->id }}">Sửa</a>
                    <a href="delete-course&id={{ $course->id }}">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
<a href="add-course">them</a>
@endsection
