<?php 
require_once './App/Entity/Article.php';
require_once './App/Manager/Manager_article.php';
//On indique le nom des espace utilisé.
use App\Entity\Article;
use App\Manager\Manager_article;

var_dump($_GET['id']);

$Manage_article= new Manager_article();

$product= $Manage_article->READ($_GET['id']); 
var_dump($product );
require_once 'tpl/header.html';

?>

<div  class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src=<?= $product->getImage() ?> class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?= $product->getTitre() ?></h2>
          
            <p class="mb-4"><?= $product->getText() ?></p>
            <p><strong class="text-primary h4"><?= $product->getPrice() ?> € </strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">S</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">M</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">L</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black">XL</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="panier.html" class="buy-now btn btn-sm btn-primary">Ajouter au panier</a></p>

          </div>
        </div>
      </div>
    </div>
<?php 
require_once 'tpl/footer.html';
?>