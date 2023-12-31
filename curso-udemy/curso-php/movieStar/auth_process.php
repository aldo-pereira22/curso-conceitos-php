<?php


    require_once("models/User.php");
    require_once("dao/UserDAO.php");
    require_once("models/Message.php");


    require_once("globals.php");
    require_once("db.php");

    $message = new Message($BASE_URL);
    // print_r(filter_input(INPUT_POST, "type")); exit;
    $userDao = new UserDAO($conn, $BASE_URL);
    

   

    // Verifica o tipo do formulário;
    $type = filter_input(INPUT_POST, "type");
    if(!empty($flassMessage["msg"])) {
        // Limpar a mensagem
        $message->clearMessage();
      }
 
    
    // Verificação do tipo de formulário
    if($type  === "register"){
        echo $type;
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
        
   
        if($name && $lastname && $email && $password){

          // Verificar se as senhas batem
              if($password == $confirmpassword){

        
                // Verificar se o email já está cadastrado;
                if( $userDao->findByEmail($email) === false ){
                      $user = new User();
                      $userToken = $user->generateToken();
         
                      $finalPassword = $user->generatePassword($password);

                      $user->name = $name;
                      $user->lastname = $lastname;
                      $user->email = $email;
                      $user->password = $finalPassword;
                      $user->token = $userToken;

                       $auth = true;

                       $userDao->create($user, $auth);

                }else{
                
                    $message->setMessage("Email ja cadastrado, tente outro email" , "error", "back");
                    //$message->setMessage("Usuário já cadastrado, tente outro e-mail.", "error", "back");
                }

              }else {
                $message->setMessage("As senhas não são iguais" , "error", "back");
              }

        }else {
            // ENviar uma mensagem de erro:
            $message->setMessage("Por favor preencha todos os campos" , "error", "back");
        }

    }else if($type === "login"){

    }

?>  
