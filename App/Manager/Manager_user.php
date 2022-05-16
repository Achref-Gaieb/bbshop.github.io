<?php
    

    namespace App\Manager;


    use PDO;
    use App\Entity\User;

    class Manager_user
    {
        
        //Propriété
      private $pdoStatement;
      private $pdo;
      private $login;
      private $password;

      //Constucteur
      public function __construct( $servername="localhost",$dbname="id18941152_mydatabase",$username="gaieb",$password="vi!b1A)dQ8/~3a%m")
      {
        //ouverture d'une connexion à la basse de données
        
        try {
           $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            // set the PDO error mode to exception
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }

      } 
      
      public function LOGIN($login,$password){
        if (isset($login) && isset($password)) {

          $this->$login = $login;
          $this->$password = $password;
         
          //Liaison des paramètres

          $this->pdoStatement = $this->pdo-> prepare('SELECT * FROM users WHERE mail = :mail');
         
          $this->pdoStatement->bindValue(':mail',$this->$login,PDO::PARAM_STR);
  
          $executeIsOk = $this->pdoStatement->execute();
          var_dump($executeIsOk);
          if(!$executeIsOk){
            return false;
          }
          else{
     
            //récupération de notre résultat
            $user = $this->pdoStatement->fetchObject('App\Entity\User');
            if (password_verify($password, $user->getPassword())) {
              var_dump($user);
              session_start();
              /*Sauvegarder le login et mot de passe dans la variable SESSION*/
              $_SESSION['user']= $user;
              //redirection vers la page menbre
              echo"first if";
              header("refresh:3;url=member.php"); 
            }else{
              echo"first else";
              return /* header("refresh:3;url=index.php") */;
            }
            return $user;
          }
        }else{
            echo"second else";
          return /* header("refresh:3;url=index.php") */;
        }
      }

      public function REGISTER(User $newUser){
        if (
            !empty(
            $newUser->getFirstname() &&
            $newUser->getLastname() &&
            $newUser->getNumero() &&
            $newUser->getMail() && 
            $newUser->getPassword() 
          )  
        ) {
              //On prepare la requete SQL

              $this->pdoStatement = $this->pdo-> prepare('INSERT INTO users VALUES (NULL, :firstname, :lastname, :numbers, :mail, :password)');
              
              //Liaison des paramètres
              $this->pdoStatement->bindValue(':firstname',$newUser->getFirstname(),PDO::PARAM_STR);

              $this->pdoStatement->bindValue(':lastname',$newUser->getLastname(),PDO::PARAM_STR);

              $this->pdoStatement->bindValue(':numbers', $newUser->getNumero(),PDO::PARAM_STR);

              $this->pdoStatement->bindValue(':mail', $newUser->getMail(),PDO::PARAM_STR);

              $this->pdoStatement->bindValue(':password', password_hash($newUser->getPassword(),PASSWORD_ARGON2I),PDO::PARAM_STR);
              
              //On execute la requete SQL
              $executeIsOk = $this->pdoStatement->execute();
         

              if(!$executeIsOk){
                return header("refresh:3;url=index.php");
              }
              else{
                  session_start();
                  /*Sauvegarder le login et mot de passe dans la variable SESSION*/
                  $_SESSION['user']= $newuser;
                  //redirection vers la page menbre
                  header('location:member.php');
                  return $newUser;
              }
        }else{
          return header("refresh:3;url=index.php");
        }
      }
    }

?>