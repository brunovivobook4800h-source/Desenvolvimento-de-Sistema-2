<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            background-color: white;
            width: 350px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        input, button {
            padding: 8px;
            margin: 5px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tabuada</h1>

    <form method="post">
        <label>Digite um número:</label>
        <br>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php

    if (isset($_POST["numero"])) {

        $numero = $_POST["numero"];

        echo "<h2>Tabuada do $numero</h2>";

        echo "<table>";
        echo "<tr>";
        echo "<th>Operação</th>";
        echo "<th>Resultado</th>";
        echo "</tr>";

        for ($i = 0; $i <= 10; $i++) {

            echo "<tr>";
            echo "<td>$numero x $i</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    ?>

</div>

</body>
</html>