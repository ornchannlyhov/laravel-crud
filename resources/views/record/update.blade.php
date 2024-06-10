<!DOCTYPE html>
<html>
<head>
    <title>Show Record</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top z-0" >
        <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('record.index') }}>CRUDPosts</a>
        <div class="justify-end ">
            <div class="col ">
            </div>
        </div>
        </div>
    </nav>
    <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Record</h3>
            <form action="{{ route('record.update', $record->id) }}" method="post">
                @csrf
                @method('PUT') <!-- Add this line to specify the method as PUT for update -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}" required>
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" id="job" name="job" value="{{ $record->job }}" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="{{ $record->age }}" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="number" class="form-control" id="contact" name="contact" value="{{ $record->contact }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $record->address }}" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update Record</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

