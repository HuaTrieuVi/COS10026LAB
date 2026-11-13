<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP variables, arrays and operators </h1>
    <?php
    $days = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    echo "<p>Day in English</p>";
    echo (implode(', ',$days));
    $days[0]="lundi";
    $days[1]="mardi";
    $days[2]="mercredi";
    $days[3]="jeudi";
    $days[4]="vendredi";
    $days[5]="samedi";
    $days[6]="dimanche";
    echo "<br><p>Day in French</p>";
    echo (implode(", ",$days))
    ?>
</body>
</html>