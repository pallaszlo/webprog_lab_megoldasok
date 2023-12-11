@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('students.update', $student->id) }}" >
    @csrf
    <div class="form-group">
        <label for="title">Név:</label>
        <input type="text" class="form-control" name="name" value="{{$student->name}}" />
    </div>
    <div class="form-group">
        <label for="title">E-mail cím:</label>
        <input type="email" class="form-control" name="email" value="{{$student->email}}" />
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
