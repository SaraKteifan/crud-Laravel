<!Doctype html>
<html>
<head>
<title>View Post Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID</td>
<td>Title</td>
<td>Body</td>
<td>Edit</td>
</tr>
@foreach($info as $value)
<tr>
<td>{{ $value->id }}</td>
<td>{{ $value->title }}</td>
<td>{{ $value->body }}</td>
<td><a href = 'edit/{{ $value->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>