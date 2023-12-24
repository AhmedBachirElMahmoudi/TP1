<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @isset($stagiaires)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Section</th>
                <th scope="col">Image</th>
                <th scope="col">Show</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($stagiaires as $stag)
                    <tr>
                        <th scope="row">{{$stag['id']}}</th>
                        <td>{{$stag['name']}}</td>
                        <td>{{$stag['email']}}</td>
                        <td>{{$stag['phone']}}</td>
                        <td>{{$stag['section']}}</td>
                        <td><img src="{{$stag['image']}}" alt=""></td>
                        <td>
                            <a href="{{route('show.stag', ['id' => $stag->id])}}" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('edit.stag', $stag->id) }}" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <form action="{{ route('delete.stag', $stag->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>
      @endisset
</body>
</html>
