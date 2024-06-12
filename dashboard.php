<?php
require('db_connection.php');
require('sessions.php');

// Verifica se a sessão está ativa
if (!isset($_SESSION['firstname']) || !isset($_SESSION['lastname']) || !isset($_SESSION['providing_ride']) || !isset($_SESSION['regiao'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>FACENS CarPool</title>
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>

<header>
    <h1>Caronas na sua região</h1>
    <div class="name_logout">
        <h2>
            <?= "Olá, " . htmlspecialchars($_SESSION['firstname']) . " " . htmlspecialchars($_SESSION['lastname']); ?>
        </h2>

        <form action="logout.php" method="post">
            <button class="logout" name="logout" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 12h12l-3 -3"></path>
                    <path d="M18 15l3 -3"></path>
                </svg>
            </button>
        </form>
    </div>
</header>

<body>
    <div class="container">
        <?php
        $userType = $_SESSION['providing_ride'];
        $otherUserType = $userType == 0 ? 1 : 0;

        $query = "SELECT * FROM users WHERE providing_ride = $otherUserType AND regiao = '" . $_SESSION['regiao'] . "'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo '<div class="cards">';
            while ($row = $result->fetch_assoc()) {
                $userTypeLabel = $row['providing_ride'] == 1 ? 'Motorista' : 'Passageiro';

                echo '<div class="card">';
                echo '<p>Nome: ' . htmlspecialchars($row['firstname']) . ' ' . htmlspecialchars($row['lastname']) . '</p>';
                echo '<p>Horário: ' . htmlspecialchars($row['time']) . '</p>';
                echo '<p>Região: ' . htmlspecialchars($row['regiao']) . '</p>';
                echo '<p>Telefone: ' . htmlspecialchars($row['number']) . '</p>';
                echo '<p>Tipo: ' . $userTypeLabel . '</p>';

                // Botão do Zap
                $whatsappNumber = str_replace([' ', '(', ')', '-'], '', $row['number']);
                $whatsappUrl = "https://api.whatsapp.com/send?phone=$whatsappNumber";
                echo '<a href="' . htmlspecialchars($whatsappUrl) . '" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#006324" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg>
                    <p>Whatsapp</p>
                </a>';

                echo '</div>';
            }
            echo '</div>';
        } else {
            echo 'Nenhum usuário disponível na sua região.';
        }

        $conn->close();
        ?>
    </div>
</body>

</html>
