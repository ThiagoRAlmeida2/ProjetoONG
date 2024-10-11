<?php
$titulo = "Adotar um pet";
include 'Componentes/header.php'; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Pet</title>
  <link rel="stylesheet" href="../../css/adotarpet.css">
</head>
<body>
  <div class="AdicionarPet">
    <button id="add-pet-btn" onclick="openDialog()">Adicionar Pet</button>

    <div id="dialog" class="dialog">
      <div class="elevated-card">
        <h2>Adicionar Pet</h2>
        <div class="form-container">
          <label for="pet-name">Nome do Pet*</label>
          <input type="text" id="pet-name" required>

          <label for="pet-type">Tipo de Pet*</label>
          <select id="pet-type" required>
            <option value="">Selecione</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
          </select>

          <label for="pet-breed">Raça*</label>
          <input type="text" id="pet-breed" required>

          <label for="pet-age">Idade do Pet (em anos)*</label>
          <input type="number" id="pet-age" min="0" required>

          <label for="email">Seu Email*</label>
          <input type="email" id="email" required oninput="validateEmail()">

          <small>* campos obrigatórios</small>

          <div class="actions">
            <button onclick="closeDialog()">Fechar</button>
            <button id="save-pet-btn" onclick="savePet()" disabled>Adicionar Pet</button>
          </div>
        </div>
      </div>
    </div>

    <div id="pets-list"></div>
  </div>

  <script src="script.js"></script>
</body>
</html>

<?php
include 'Componentes/footer.php'; 
?>
