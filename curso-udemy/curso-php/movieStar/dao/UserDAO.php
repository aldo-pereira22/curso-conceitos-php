<?php



    require_once("models/User.php");
    class UserDao implements UserDaoInterface {

        private $conn;
        private $url;
        private $message;   

        public function __construct(PDO $conn, $url){
    
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }
        
        public function builderUser($data){
            $user = new User();
            $user->id = $data["id"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->image = $data["image"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];
            

            return $user;

        }
        
        public function create(User $user, $authUser = false){
            $stmt = $this->conn->prepare("INSERT INTO users(
                name, lastname, email, password, token
            ) values (
                :name, :lastname, :email,:password, :token
            ) ");

            $stmt->bindParam(":name", $user->name);
            $stmt->bindParam(":lastname", $user->lastname);
            $stmt->bindParam(":email", $user->email);
            $stmt->bindParam(":password", $user->password);
            $stmt->bindParam(":token", $user->token);

            $stmt->execute();

            if($authUser){
                $this->setTokenToSession($user->token);
            }

        }
        public function update(User $user){

        }
        public function findByToken($token){
            if($token != ""){
                $stmt = $this->conn->prepare("SELECT * from users WHERE token = :token");
                $stmt->bindParam(":token", $token);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch();
                    $user = $this->builderUser($data);
                    return $user;
                }else{

                    // Redireciona usuário autenticado
                    $this->message->setMessage("Faça o login", "success", "editprofile.php");
                    return false;
                }
            }else {
                return false;
            }

        }

        public function verifyToken($protected = false){

            if(!empty($_SESSION["token"])){
                echo "AQUII";
                exit;
            
                // Pega o tokken da Session
                $token = $_SESSION["token"];
                $user = $this->findByToken($token);
                // $user = $this->findByToken($token);
                if($user){
                    return $user;
                }else if($protected) {
                    // Redireciona o usuário não autenticado
                    $this->message->setMessage("Faça a autenticação para acessar", "error", "index.php");    
                }
            }else if($protected) {
                    // Redireciona o usuário não autenticado
                    $this->message->setMessage("Faça a autenticação para acessar", "error", "index.php");    
                }

        }

        
 
        public function setTokenToSession($token, $redirect = true) {
            // Salvar token na session
            $_SESSION["token"] = $token;
            if($redirect){
                // Redireciona para o perfil do usuário
                $this->message->setMessage("Seja Bem vindo!", "success", "editprofile.php");
            }
        }
        public function authenticateUser($email, $password){

        }
        public function findByEmail($email){

            if($email != ""){
                $stmt = $this->conn->prepare("SELECT * from users WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch();
                    $user = $this->builderUser($data);
                    return $user;
                }else{
                    return false;
                }
            }else {
                return false;
            }
        }
        public function findy($id){

        }

        public function destroyToken(){
            // remove token da sessão
            $_SESSION["token"] = "";

            // Redirecionar  e apresentar mensagem
            $this->message("Vc fez logout com sucesso!", "success", "index.php");
        }
        public function changePassword(User $User){

        }
    }

?>