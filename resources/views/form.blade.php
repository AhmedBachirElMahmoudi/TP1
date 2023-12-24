<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Stagiaire Form</h1>
        <form action="{{route('addStag')}}" method="post">
            @csrf
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Section</td>
                    <td><input type="text" name="section"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <input type="file" name="image" id="imageInput" accept="image/*" onchange="previewImage(this)">
                        <img id="imagePreview" src="#" alt="Selected Image" style="max-width: 100%; max-height: 200px; display: none;">
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </center>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
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
