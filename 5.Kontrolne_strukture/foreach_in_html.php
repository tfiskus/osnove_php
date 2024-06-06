<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Email</th>
                <th>Godine</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
            <?
            <tr>
                <td><?= $user['ID'] ?></td>
                


            }
        </tbody>
    </thead>
    </table>
    
</body>
</html>!DOCTYPE