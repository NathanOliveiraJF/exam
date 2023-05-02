<?php
    $collect = $_SESSION['collect'];
    $results = $_SESSION['results'];
    $numberTest = $_SESSION['numberTest'];
?>
<html>
  <head>
    <title>Realizar Exame</title>
  </head>
  <body>
  <h1>Exame</h1>

  <h4>Dados Coleta</h4>
  <table>
      <tr>
          <th>Colector</th>
          <th>Paciente</th>
      </tr>
          <tr>
              <td><?= $collect->getCollector() ?></td>
              <td><?= $collect->getNamePatient() ?></td>
          </tr>
  </table>
  <h4>Realizar Exame</h4>
  <?php if( $_SESSION['inconclusivo']): ?>
    <?=$_SESSION['msg']?>
  <?php endif; ?>
  <form method="post" action="/exam">
      <input type="hidden" name="idCollect" value="<?=$collect->getId()?>" />
      <span>Numero do teste Disponivel: <?= $numberTest ?></span>
      <br/>
      <label for="result">Resultado Teste: </label>
      <select name="result">
          <?php foreach ($results as $value): ?>
              <option value=<?= $value->getId() ?>><?= $value->getResult() ?></option>
          <?php endforeach; ?>
      </select>
      <br/>
      <?php if(!$_SESSION['recoleta']): ?>
          <input type="submit" value="Lançar Teste" />
      <?php endif; ?>
  </form>
  </body>
</html>


