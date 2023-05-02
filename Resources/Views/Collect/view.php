<?php
$collect = $_REQUEST['collect'];
$resultTestType = $_REQUEST['resultTestType'];
?>
<html>
<head>
    <title>Exame</title>
</head>
<body>
<h1>Exame</h1>

<h4>Dados da Coleta</h4>

<table>
    <tr>
        <th>Coletor(a)</th>
        <th>Paciente</th>
        <th>Material</th>
        <th>Numero de teste disponível</th>
    </tr>
    <tr>
        <td><?= $collect->getCollector() ?></td>
        <td><?= $collect->getNamePatient() ?></td>
        <td><?= $collect->getMaterialUsed() ?></td>
        <td><?= $collect->getNumberTest() ?></td>
    </tr>
</table>

<form method="post" action="/exams">
    <input type="hidden" name="collectId" value="<?=$collect->getId()?>" />
    <input type="hidden" name="numberTest" value="<?=$collect->getNumberTest()?>" />
    <br/>
    <label for="resultId">Resultado Teste: </label>
    <select name="resultId">
        <?php foreach ($resultTestType as $value): ?>
            <option value=<?= $value->getId() ?>><?= $value->getResult() ?></option>
        <?php endforeach; ?>
    </select>

    <br/>
    <input type="submit" value="Lançar Teste" />
</form>
</body>
</html>