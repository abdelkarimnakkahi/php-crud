<?php require_once("db.php");
$query = "SELECT * FROM stagiaires";
$stagiaires = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - CRUD</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Subject</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($stagiaires as $stagiaire) : ?>
                <tr>
                    <td><?= htmlspecialchars($stagiaire["id"]) ?></td>
                    <td><?= htmlspecialchars($stagiaire["firstName"]) ?></td>
                    <td><?= htmlspecialchars($stagiaire["lastName"]) ?></td>
                    <td><?= htmlspecialchars($stagiaire["subject"]) ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="button" value="Delete">
                        </form>
                        <a href="edit.php">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</body>

</html>