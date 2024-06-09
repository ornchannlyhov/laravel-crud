<!DOCTYPE html>
<html>
<head>
    <title>Show Record</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('record.index') }}>Records</a>
        <div class="justify-end ">
            <div class="col ">
            <a class="btn btn-sm btn-success" href={{ route('record.create') }}>Add Record</a>
            </div>
        </div>
        </div>
    </nav>
    <div class="container">
        @foreach ($record as $info )
            <h3>{{$info->name}}</h3>
            <p>job: {{ $info->job }}</p>
            <p>age: {{ $info->age }}</p>
            <p>contact: {{ $info->contact }}</p>
            <p>address: {{ $info->address }}</p>
            <p><strong>Published on:</strong> {{ $info->created_at }}</p>

            <a href="{{ route('record.index') }}" class="btn btn-primary">Back to Records</a>
            <a href="{{ route('record.update', $info->id) }}" class="btn btn-warning">Update Record</a>
            
            <form action="{{ route('record.delete', $info->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Record</button>
            </form>
        @endforeach
    </div>
</body>
</html>

