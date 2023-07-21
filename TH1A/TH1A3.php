<?php
    $arr = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>
                Tên khóa học
            </th>
        </tr>
        <?php
        foreach ($arr as $value) {
        ?>
        <tr>
            <td>
                <?php echo $value ?>
            </td>
        </tr>
        <?php }
        ?>
        </table>
    </body>
</html>