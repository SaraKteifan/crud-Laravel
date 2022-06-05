<!DOCTYPE html>
<html>
<head>
<title>Data Management | Edit</title>
</head>
<body>
<form action = "/edit/<?php echo $info[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Title</td>
<td>
<input type = 'text' name = 'title'
value = '<?php echo$info[0]->title; ?>'/> </td>
</tr>
<tr>
<td>Body</td>
<td>
<input type = 'text' name = 'body'
value = '<?php echo$info[0]->body; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update" />
</td>
</tr>
</table>
</form>
</body>
</html>