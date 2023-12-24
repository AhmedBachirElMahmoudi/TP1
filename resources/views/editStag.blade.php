<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Edit Stagiaire</title>
</head>

<body>
    <center>
        <h1>Edit Stagiaire</h1>
        <form action="{{ route('updateStag',$stagiaire->id) }}" method="post">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{ $stagiaire->name }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="{{ $stagiaire->email }}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" value="{{ $stagiaire->phone }}"></td>
                </tr>
                <tr>
                    <td>Section</td>
                    <td><input type="text" name="section" value="{{ $stagiaire->section }}"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <input type="file" name="image" id="imageInput" accept="image/*" onchange="previewImage(this)">
                        <img id="imagePreview" src="{{ $stagiaire->image }}" alt="Selected Image"
                            style="max-width: 100%; max-height: 200px; display: block;">
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
    </center>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
