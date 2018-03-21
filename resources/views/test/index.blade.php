<html>
<head>
    <title>Test index</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
<body>
@if (Route::has('tests.index'))
    Mang sui
    @else
    Delay
@endif
<br>
@if (!$true)
    True
    @else
    False
@endif
<table class="table table-bordered">
    <thead>
        <th>tou</th>
        <th>wei</th>
        <th>jie</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $true }}</td>
            <td>{{ $false }}</td>
        </tr>
    </tbody>
</table>
</body>
</html>