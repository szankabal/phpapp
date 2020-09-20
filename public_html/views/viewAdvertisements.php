<html>
<head>
<title>Advertisement List</title>
<style type="text/css">
table {
border-collapse: collapse;
border: 5px solid red;
background: grey;
font-size: 25px;
}
</style>
</head>
<body>
<table>
<?php foreach ($aList as $row): ?>
	<tr> 
        <td><?= $row['title'] ?></td>
	<td><?= $row['name'] ?></td>
        </tr>
<?php endforeach ?>
</table>
<a href="/index.php">Back</a>
</body>
</html>
