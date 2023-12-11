<div class="col-lg-12">
    <a class="btn btn-success" href="{{ route('students.create') }}">
        Add student
    </a>
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Grade</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->grade}}</td>
            <td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-xs btn-info">Edit</a>
            </td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="post">
                    @csrf
                    @method("DELETE")

                    <button class="" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
