<!DOCTYPE html>
<html>

<head>
    <title>Aplicação</title>
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>

<header>
    <h1>Caronas na região</h1>
</header>

<body>
    <div class="container">
    <?php
    require('db_connection.php');

    $query = "SELECT * FROM users WHERE providing_ride = 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<div class="cards">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<p>Nome: ' . $row['firstname'] . ' ' . $row['lastname'] . '</p>';
            echo '<p>Horário: ' . $row['time'] . '</p>';
            echo '<p>Região: ' . $row['regiao'] . '</p>';
            echo '<p>Número: ' . $row['number'] . '</p>';

            // Botão do Zap
            $whatsappNumber = str_replace([' ', '(', ')', '-'], '', $row['number']);
            $whatsappUrl = "https://api.whatsapp.com/send?phone=$whatsappNumber";
            echo '<a href="' . $whatsappUrl . '" target="_blank">
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
        echo 'Nenhum usuário dísponível na sua região.';
    }

    $conn->close();
    ?>
    </div>
</body>

</html>