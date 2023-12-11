<div>
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addStudent)
            @include('livewire.create')
        @endif
        @if($updateStudent)
            @include('livewire.update')
        @endif
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if(!$addStudent)
                    <button wire:click="addStudentForm()" class="btn btn-primary btn-sm float-right">Add New Student</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($students) > 0)
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->grade}}</td>
                                    <td>
                                        <button wire:click="edit({{$student->id}})" class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="delete({{$student->id}})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Students Found.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
