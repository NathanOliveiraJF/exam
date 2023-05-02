<?php
$collects = $_REQUEST['collects'];
$user = $_SESSION['user'];
?>

<html>
<head>
    <title>Coletas</title>
</head>
<body>

<?php if ($user->getRoleId() == "1"): ?>
    <a href="/collects/create">Cadastrar Coleta</a>
<?php endif; ?>
<?php if ($_REQUEST['sucessfullyMsg']): ?>
    <span>Coleta cadastrada com sucesso</span>
<?php endif; ?>
<table>
    <tr>
        <th>Colector</th>
        <th>Paciente</th>
        <?php if ($user->getRoleId() == "2"): ?>
            <th>Ação</th>
        <?php endif; ?>
    </tr>
    <?php foreach ($collects as $value): ?>
        <tr>
            <td><?= $value->getCollector() ?></td>
            <td><?= $value->getNamePatient() ?></td>
            <td>
                <?php if ($user->getRoleId() == "2"): ?>
                    <a href="/collects/<?=$value->getId()?>">Examinar</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>