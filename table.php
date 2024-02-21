<?php
$dayOfWeek=date("N");
$workinghours= "";
$working= "";
if
( $dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) {$workinghours="8:00-12:00";} 
else  {
    $workingHours = "Нерабочий день";
}
if ( $dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6 ) {$working= "12:00-16:00";}
else  {
    $working = "Нерабочий день";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы докторов</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>График работы докторов, каб. 333</h2>
    <table>
        <tr>
            <th>П.н.</th>
            <th>Фамилия, имя</th>
            <th>График</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Аксенти Елена</td>
            <td><?php echo $workinghours; ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Петрова Мария</td>
            <td><?php echo $working; ?></td>
        </tr>
    </table>
</body>
</html>
