<html>
<head>
<title>Users List</title>
<style type="text/css">
table {
border-collapse: collapse;
border: 5px solid green;
background: grey;
font-size: 25px;
}
</style>
</head>
<body>
<table>
<?php foreach ($uList as $row): ?>
	<tr>
    <td><?= $row['name'] ?></td>
    </tr>
<?php endforeach ?>
</table>
<a href="/index.php">Back</a>
</body>
</html>
