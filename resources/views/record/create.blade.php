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
        <a class="navbar-brand h1" href={{ route('record.index') }}>CRUDPosts</a>
        <div class="justify-end ">
            <div class="col ">
            </div>
        </div>
        </div>
    </nav>
    <div class="container mt-4">
        <form action="{{ route('record.store') }}" method="POST" role="form">
            @csrf
            <legend>Add Record</legend>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input field">
            </div>
            <div class="form-group mb-3">
                <label for="job">Job</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="Input field">
            </div>
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Input field">
            </div>
            <div class="form-group mb-3">
                <label for="contact">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact" placeholder="Input field">
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Add Record</button>
        </form>
    </div>
</body>
</html>

