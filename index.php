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
                    <label>Maschio</label><br>
                    <input type="radio" name="sesso" value="F">
                    <label>Femmina</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    Data di nascita:
                </td>
                <td>
                    <input type="date" name="dataDiNascita">
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani sollevamento:
                </td>
                <td>
                    <input type="number" min="0" max="300" name="altezzaManiSoll">
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani verticale:
                </td>
                <td>
                    <input type="number" min="0" max="300" name="altezzaManiVert">
                </td>
            </tr>
            <tr>
                <td>
                    Altezza mani orizzontale:
                </td>
                <td>
                    <input type="number" min="0" max="100" name="altezzaManiOr">
                </td>
            </tr>
            <tr>
                <td>
                    Dislocazione angolare:
                </td>
                <td>
                    <input type="number" min="0" max="360" name="DislocazioneAngolare">
                </td>
            </tr>
            <tr>
                <td>
                    Giudizio presa carico:
                </td>
                <td>
                    <input type="number" min="0" max="1" range="0,01" name="GiudizioPresa">
                </td>
            </tr>
            <tr>
                <td>
                    Frequenza gesti al minuto:
                </td>
                <td>
                    <input type="radio" name="FrequenzaGesti" value="0,2">
                    <label>0.20</label><br>
                    <input type="radio" name="FrequenzaGesti" value="1">
                    <label>1</label><br>
                    <input type="radio" name="FrequenzaGesti" value="4">
                    <label>4</label><br>
                    <input type="radio" name="FrequenzaGesti" value="6">
                    <label>6</label><br>
                    <input type="radio" name="FrequenzaGesti" value="9">
                    <label>9</label><br>
                    <input type="radio" name="FrequenzaGesti" value="12">
                    <label>12</label><br>

                </td>
            </tr>
            <tr>
                <td>
                    Frequenza lavoro:
                </td>
                <td>
                    <input type="radio" name="FrequenzaLavoro" value="1">
                    <label>Continuo < 1 ora </label><br>
                    <input type="radio" name="FrequenzaLavoro" value="0.95">
                    <label>Continuo da 1 a 2 ore</label><br>
                    <input type="radio" name="FrequenzaLavoro" value="0.85">
                    <label>Continuo da 2 a 8 ore</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    Peso sollevato:
                </td>
                <td>
                    <input type="number" min="0" max="350" name="DislocazioneAngolare">
                </td>
            </tr>
        </table>
        <input type = "submit">
    </form>
</body>

</html>