<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Stagiaire Details</title>
</head>

<body>
    <center>
        <h1>Stagiaire Details</h1>
        <table>
            <tr>
                <td>ID</td>
                <td>{{ $stagiaire->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $stagiaire->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $stagiaire->email }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ $stagiaire->phone }}</td>
            </tr>
            <tr>
                <td>Section</td>
                <td>{{ $stagiaire->section }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ $stagiaire->image }}" alt="Stagiaire Image" style="max-width: 100%; max-height: 200px;"></td>
            </tr>
        </table>
    </center>
</body>

</html>
