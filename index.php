<?php
// login page, use config.php to access database/*
/*
require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Username and password are required.';
    } else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php');
            exit();
        } else {
            $error = 'Invalid username or password.';
        }
    }
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="/action_page.php">
        <table>
            <tr>
                <th>
                    Dato
                </th>
                <th>
                    Inserimento
                </th>
            </tr>
            <tr>
                <td>
                    Sesso:
                </td>
                <td>
                    <input type="radio" name="sesso" value="M">
                </td>
            </tr>
            <tr>
                <td>
                    Età:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani sollevamento:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani verticale:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani orizzontale:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Dislocazione angolare:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Giudizio presa carico:
                </td>
                <td>
                    INT
                </td>
            </tr>
            <tr>
                <td>
                    Frequenza gesti:
                </td>
                <td>
                    Decimal
                </td>
            </tr>
            <tr>
                <td>
                    Frequenza lavoro:
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    Peso sollevato:
                </td>
                <td>

                </td>
            </tr>
        </table>
    </form>
</body>

</html>