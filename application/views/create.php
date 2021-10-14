<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <table>
        <form action="<?php echo base_url('index.php/C_home/AksiCreate')?>" method="post">

        <tr>
            <td>Code</td>
            <td>:</td>
            <td><input type="text" name="id"</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name"</td>
        </tr>
        <tr>
            <td>Colour</td>
            <td>:</td>
            <td><input type="text" name="colour"</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
        
    </table>
</body>
</html>