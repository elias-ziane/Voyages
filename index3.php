<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta charset="utf-8">
    </head>
    
    <body>
        <?php
        $MyBool = false;
        $entier = 2;
        $str = "Elias";
        $float = 1.5;
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Boléen</td>
                    <td><?php echo gettype($myBool) ?></td>
                    <td><?php echo $myBool ?></td>
                </tr>
                <tr>
                    <td>Entier</td>
                    <td><?php echo gettype($entier) ?></td>
                    <td><?php echo $entier ?></td>
                </tr>
                <tr>
                    <td>Chaîne de caractères</td>
                    <td><?php echo gettype($str) ?></td>
                    <td><?php echo $str ?></td>
                </tr>
                <tr>
                    <td>Virgules flotantes</td>
                    <td><?php echo gettype($float) ?></td>
                    <td><?php echo $float ?></td>
                </tr>
            </tbody>
</table>
</body>
</html>      