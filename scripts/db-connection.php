<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB connection</title>
</head>
<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "DGmd21.05";
    $database = "signo_teste";
    $dbConnection = mysqli_connect($servername, $username, $password, $database);

    // checking connection
    if ($dbConnection === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
    }

    // taking values from HTML form
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $tipo = $_POST["tipo"];
    $quantidade = $_POST["quantidade"];
    $atracoes = $_POST["atracoes"];
    $sugestoes = $_POST["sugestoes"];
    $imagens = $_POST["imagens"];

    $cep = str_replace(".", "", $cep);
    $cep = str_replace("-", "", $cep);
    $sugestoes = $sugestoes === 'on' ? 1 : 0;

    // SQL insert query
    $sqlInsert = "INSERT INTO pedidos (nome, endereco, bairro, cep, cidade, uf, email, telefone, tipo_revistinha, quantidade, atracoes_do_evento, aceita_sugestoes, imagens) VALUES ('$nome', '$endereco', '$bairro', '$cep', '$cidade', '$uf', '$email', '$telefone', '$tipo', '$quantidade', '$atracoes', '$sugestoes', '$imagens')";

    // checking the query
    if (mysqli_query($dbConnection, $sqlInsert)) {
        echo "<p>Data stored in database succesfully.</p>";
    } else {
        echo "ERROR: Hush! Sorry $sqlInsert." . mysqli_error($dbConnection);
    }

    // closing connection
    mysqli_close($dbConnection);

    ?>
</body>
</html>