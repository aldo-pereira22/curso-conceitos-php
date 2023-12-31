<?php
    include_once("templates/header.php");
?>
   
   <div class="container">
    <h1 id="main-title" >Criar contato</h1>

    <?php include_once("templates/backbtn.html"); ?>
    
    <form id="create-form" action="<?=$BASE_URL ?>config/process.php" method="POST">

        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name"> Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
        </div>
        <br>

        <div class="form-group">
            <label for="name"> Numero de telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
        </div>
        <br>


         <div class="form-group">
            <label for="name"> Observações </label>
            <textarea name="observations" id="observations" rows="4" cols="50" placeholder="Digite informações adicionais" ></textarea>
        </div>
        <br> 
      
        <button type="submit" class="btn btn-primary"> Cadastrar </button>
    
    </form>
   </div>

<?php
    include_once("templates/footer.php");
?>