<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>ini dashboard!</h1>
    <table border="2">
        <tr>
            <td>Nama</td>
            <td>Nim</td>
        </tr>
        @foreach ($dataPribadi as $item)
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['nim'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>