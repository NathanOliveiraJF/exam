<?php
    $patients = $_REQUEST['patients'];
    $materialType = $_REQUEST['materialType'];
?>

<html>
<head>
    <title>Cadastro Coleta</title>
</head>
<body>
<form action="/collects" method="post">
    <input type="text" placeholder="coletor" name="collector"/>
    <br>
    <label for="patient">Paciente</label>
    <select name="patient">
        <?php foreach ($patients as $value): ?>
            <option value=<?= $value->getId() ?>><?= $value->getNamePatient() ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type='date' name="dataNasc"/>
    <br>
    <input placeholder="cidade" name="city"/>
    <br>
    <label for="materialType">Material Coletado</label>
    <select name="materialType">
        <?php foreach ($materialType as $value): ?>
            <option value=<?= $value->getId() ?>><?= $value->getMaterialType() ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input hidden name='isComorbidade' value="false"/>
    <input type='checkbox' name='isComorbidade' value="true"/>

    <label for='isComorbidade'>Tem comorbidade</label>
    <input type='submit' name='Enviar'/>
</form>
</body>
</html>


