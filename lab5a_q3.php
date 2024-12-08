<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier)
        {
    ?>
            <table border = "1">
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
            <?php for($i=1; $i<=12; $i++)
            {
                $ans = $i * $multiplier;
            ?>  <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $multiplier; ?></td>
                <td><?php echo $ans; ?></td>
            <?php
            }
            ?>
            </tr>
        <?php
        }
        multiplication(2);
    ?>
</body>
</html>