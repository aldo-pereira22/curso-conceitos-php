<?php
    include_once("templates/header.php");
?>
   
   <div class="container">
    <h1 id="main-title" >Editar contato</h1>

    <?php include_once("templates/backbtn.html"); ?>
    
    <form id="create-form" action="<?=$BASE_URL ?>config/process.php" method="POST">

        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>">


        <div class="form-group">
            <label for="name"> Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact["name"] ?>" required>
        </div>
        <br>

        <div class="form-group">
            <label for="name"> Numero de telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact["phone"] ?>" required>
        </div>
        <br>


         <div class="form-group">
            <label for="name"> Observações </label>
            <textarea name="observations" id="observations" rows="4"
            cols="50" placeholder="Digite informações adicionais" ><?= $contact["observations"] ?></textarea>
        </div>
        <br> 
      
        <button type="submit" class="btn btn-primary"> Atualizar </button>
    
    </form>
   </div>

<?php
    include_once("templates/footer.php");
?>