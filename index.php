<?php
require_once './App/Entity/Article.php';
require_once './App/Manager/Manager_article.php';
//On indique le nom des espace utilisé.
use App\Entity\Article;
use App\Manager\Manager_article;



$Manage_article= new Manager_article();

$articles= $Manage_article->READALL(); 
require('tpl/header.html');

/* $createArticle = new Article();
$createArticle->setTitre("test")
        ->setText('test')
        ->setCategorie("Garçon")
        ->setPrice(30);
$articles= $Manage_article->SAVE($createArticle);   */
?>


<div class="site-section">
    <div class="d-flex px-5 mx-5">
        <div class="row mb-7">
            <div class=" order-2">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4"><h2 class="text-black h5">Articles</h2></div>
                    </div>
                    <div class="row mb-5">
                        <?php if(empty($articles)): ?>
                            <p>il n y a aucun contact</p>?>
                        <?php else: ?>
                            <?php foreach($articles as $article): ?>
                                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image">
                                            <a href=<?php echo "article.php?id=".$article->getId() ?>>
                                                <img src=<?= $article->getImage() ?> alt="bascule pour bebe" class="img-fluid" >
                                            </a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3>
                                                <a href="<?php echo "article.php?id=".$article->getId() ?>">
                                                <?= $article->getTitre() ?>
                                                </a>
                                            </h3>
                                            <p class="mb-0">
                                                <?= $article->getCategorie() ?> 
                                            </p>
                                            <p class="text-primary font-weight-bold">
                                                <?= $article->getPrice() ?> €
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach?>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('tpl/footer.html');?>
