<?php
    namespace App\Manager;


    use PDO;
    use App\Entity\Article;

    class Manager_article
    {
        
        //Propriété
      private $pdoStatement;
      private $pdo;

      //Constucteur
      public function __construct( $servername="localhost",$dbname="mydatabase",$username="root",$password="")
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
        //Méthodes
      private function CREATE(Article &$article)
      {


          $this->pdoStatement = $this->pdo-> prepare('INSERT INTO products VALUES (NULL, :categorie, :titre, :text, :price)');

          //Liaison des paramètres
          $this->pdoStatement->bindValue(':categorie',$article->getCategorie(),PDO::PARAM_STR);

          $this->pdoStatement->bindValue(':titre',$article->getTitre(),PDO::PARAM_STR);

          $this->pdoStatement->bindValue(':image',$article->getImage(),PDO::PARAM_STR);

          $this->pdoStatement->bindValue(':text',$article->getText(),PDO::PARAM_STR);

          $this->pdoStatement->bindValue(':price',$article->getPrice(),PDO::PARAM_INT);


      var_dump($this->pdoStatement);
      //exécution de la requete

      $executeIsOk = $this->pdoStatement->execute();


       if(!$executeIsOk){
        //echo" on est rentrer";
        return false;

       }
      else{
        //on attribut à l'objet contact l'id 
        $id = $this->pdo->LastInsertId();
        $contact = $this->READ($id);

      return true;
       }



    }
      public function READ($id){
        
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        //liaison des parametres
        $this->pdoStatement->bindValue(':id',$id, PDO::PARAM_INT);

        //execution de la requete
       $executeIsOK = $this->pdoStatement->execute();
       
       if($executeIsOK){

        //récupération de notre résultat
        $article = $this->pdoStatement->fetchObject('App\Entity\Article');


            if($article===false){
            
            return null;

          }else{
            //var_dump($contact);

            return $article;
 
          }


       }else{
        //erreur d'exécution
          return false;
       }



      }
     
      public function UPDATE(Article &$article){
        //requete sql pour l'update qui modifie à la limite de 1.
          $this->pdoStatement = $this->pdo->prepare('UPDATE products set categorie=:categorie,titre=:titre,image=:image,texte=:texte WHERE id=:id LIMIT 1');

        //Liaison des paramètres
            $this->pdoStatement->bindValue(':categorie',$article->getCategorie(),PDO::PARAM_STR);

            $this->pdoStatement->bindValue(':titre',$article->getTitre(),PDO::PARAM_STR);

            $this->pdoStatement->bindValue(':image',$article->getImage(),PDO::PARAM_STR);

            $this->pdoStatement->bindValue(':texte', $article->getTexte(),PDO::PARAM_STR);
          
          

        //execute requete
          return $this->pdoStatement->execute();
      }


      public function DELETE(Article &$article){
        // On prepare la requete
          $this->pdoStatement = $this->pdo->prepare('DELETE FROM products WHERE id=:id LIMIT 1');
        // On prepare la requete
          $this->pdoStatement->bindValue(':id', $article->getId(),PDO::PARAM_INT);
        // On execute la requete
        return $this->pdoStatement->execute();
      }


      public function READALL(){
        $this->pdoStatement=$this->pdo->query('SELECT * FROM products ORDER BY titre');

        //Construction d'un tableau d'objets de type Article
        $articles=[];

        while($article=$this->pdoStatement->fetchObject('App\Entity\Article')){
          $articles[]=$article;
        }

        return $articles;
      }

      public function SAVE(Article &$article){
        //Il faut utiliser la méthode create lorsqu'il s'agit d'un nouvel objet et la méthode UPDATE lorsque l'objet existe

           $articles=$this->READALL();
         
           if(!empty($articles)){

              foreach ($articles as $key => $value) {
                  //Vérifie si un objet existe déja et si oui le supprime
                if($article->getTitre()===$value->getTitre() && $article->getCategorie()===$value->getCategorie() && $article->getImage()===$value->getImage() &&  $article->getTexte()===$value->getTexte() ){
                    return $this->DELETE($article);
                }
              }
              //On ajoute l'objet si l'objet n'existe pas deja danns la base de données. 
               return $this->CREATE($article);
           }else{
              return $this->CREATE($article);
           }
    }}
?>
