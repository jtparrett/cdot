<?php 
$this->inc('includes/doc_head.php');
$page = Page::getCurrentPage();
?>

<section role="banner" class="banner banner--short">
    <div class="banner__image">
        <img src="http://picsum.photos/1400/400?image=973"/>
    </div>

    <div class="wrapper">
        <div class="banner__inner">
            <h1 class="banner__title"><span><?php echo $page->getCollectionName(); ?></span></h1>
            <p class="banner__copy"><?php echo $page->getCollectionDescription(); ?></p>
        </div>
    </div>
</section>

<main class="main">
    <section class="section">
        <div class="wrapper">
            <div class="wysiwyg">
                <?php
                    $a = new Area('Article Content');
                    $a->display();
                ?>
            </div>
        </div>
    </section>
</main>

<?php 
$this->inc('includes/doc_foot.php');
?>