<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action='/update/id/<?php echo $data['id']; ?>' method='post'>
       @csrf
       Title<input type='text' name='title' value='<?php echo $data['title']; ?>'>
       body<input type='text' name='body' value='<?php echo $data['body']; ?>'>
       <button type='submit'>Update</button>

   </form>

</body>
</html>