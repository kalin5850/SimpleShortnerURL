<!DOCTYPE html>
<html>
<head>
    <title>Shortner URL</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
<h1>Shortner URL</h1>
<h3>List of Shortner URL</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Long URL</th>
        <th>Short code</th>
        <th>Short URL</th>
        <th>Create Day</th>
    </tr>
    <?php foreach ($list_short_urls as $row):?>
    <?php $shortURL = '/redirect.php?c=' . $row['short_code'];?>
        <tr>
            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['long_url'] ; ?></td>
            <td><?php echo $row['short_code'] ; ?></td>
            <td><a href="<?php echo $shortURL; ?>" target=" _blank"><?php echo $shortURL; ?></a>'</td>
            <td><?php echo $row['created'] ; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3> Generate Short URL </h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?action=shortcode" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Domain</td>
            <td><input type="text" name="domain"></td>
        </tr>
        <tr>
            <td colspan=”2”><input type="submit" value=" Submit "></td>
        </tr>

    </table>
</form>

</body>
</html>

