<?php
//Apresentar os dados de uma coleção numa tabela de HTML
//Estrutura: Nome, Genero, País
$dados = [
    ['joao', 'M', 'Portugal'],
    ['ana', 'F', 'Brasil'],
    ['carlos', 'M', 'Angola'],
    ['Matilde', 'F', 'Moçambique'],
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        tr,
        td,
        th {
            border: 1px solid black;
            padding: 0;
            border-collapse: separate;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Gênero</th>
            <th>País</th>
        </tr>
        <tr>
            <td>João</td>
            <td>Masculino</td>
            <td>Portugal</td>
        </tr>
        <tr>
            <td>Ana</td>
            <td>Feminino</td>
            <td>Brasil</td>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>Masculino</td>
            <td>Angola</td>
        </tr>
        <tr>
            <td>Matilde</td>
            <td>Feminino</td>
            <td>Moçambique</td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $item): ?>

                <tr>
                    <td><?= $item[0] ?></td>
                    <td><?= $item[1] ?></td>
                    <td><?= $item[2] ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>