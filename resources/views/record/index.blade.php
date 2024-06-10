<!DOCTYPE html>
<html>
<head>
    <title>Show Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-group {
            margin-top: 10px;
        }

        /* Style to keep the navbar fixed at the top */
        .navbar-fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        /* Add padding/margin between navbar and table */
        .container {
            margin-top: 70px; /* Adjust this value according to your preference */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning navbar-fixed">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('record.index') }}">Records</a>
            <div class="justify-end ">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('record.create') }}">Add Record</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Published On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record as $info)
                <tr>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->job }}</td>
                    <td>{{ $info->age }}</td>
                    <td>{{ $info->contact }}</td>
                    <td>{{ $info->address }}</td>
                    <td>{{ $info->created_at }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('record.index') }}" class="btn btn-primary">Back</a>
                            <a href="{{ route('record.update', $info->id) }}" class="btn btn-warning">Update</a>
                            <form action="{{ route('record.delete', $info->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
