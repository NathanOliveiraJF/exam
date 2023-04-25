<?php
    $collects = $_REQUEST['collects'];
?>

<html>
    <head>
        <title>Selecionar Exame</title>
    </head>
    <body>
        <h3>Olá </h3>
        <p>Selecione uma Coleta para prosseguir</p>
        <table>
            <tr>
                <th>Colector</th>
                <th>Paciente</th>
                <th>Ação</th>
            </tr>
            <?php foreach ($collects as $value): ?>
                <tr>
                    <td><?= $value->getCollector() ?></td>
                    <td><?= $value->getNamePatient() ?></td>
                    <td>
                        <a href="/selectExam/<?=$value->getId()?>">Examinar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>