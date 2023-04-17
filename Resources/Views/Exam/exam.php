<html>
  <head>
    <title>Cadastro Exame</title>
  </head>
  <body>
    <form>
      <input placeholder="coletor" name="coletor" />
      <br>
      <input placeholder="paciente" name="paciente" />
      <br>
      <input type='date' name="dataNasc" />
      <br>
      <input placeholder="cidade" name="cidade" />
      <br>
    <select name="materialType">
      <?php foreach ($_REQUEST['materialType'] as $value): ?>
      <option value=<?=$value->getId()?>><?=$value->getMaterialType()?></option>
      <?php endforeach; ?>
    </select>
      <br>
      <input type='checkbox' name='isComorbidade'/>
      <label for='isComorbidade'>Tem comorbidade</label>
    </form>
  </body>
</html>


