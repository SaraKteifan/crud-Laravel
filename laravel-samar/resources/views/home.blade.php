<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('message'))
<p>{{session('message')}}</p>
@endif
   <form action="/home" method='post'>
       @csrf
       Title<input type='text' name='title'>
       body<input type='text' name='body'>
       <button type='submit'>submit</button>

   </form>

    <table>
   @foreach($post2 as $i)
    <tr>
    <td>{{$i->id}}</td>
    <td>{{$i->title}}</td>
    <td>{{$i->body}}</td>
    <td><a href="{{url('delete/id/'.$i->id)}}">Delete</a></td>
    <td><a href="{{url('edit/id/'.$i->id)}}">Edit</a></td>
    </tr>
    @endforeach
    </table>

</body>
</html>