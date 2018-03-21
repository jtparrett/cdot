<?php

use Concrete\Core\Area\Area;

$this->inc('includes/doc_head.php');
$page = Page::getCurrentPage();
?>

<main class="main">
    <section class="section">
        <div class="wrapper">
            <header class="section__header">
                <h1 class="section__title section__title--large"><?php echo $page->getCollectionName(); ?></h1>
            </header>

            <div class="grid grid--4-col">
            <?php
                $subPageIds = $page->getCollectionChildrenArray();
                foreach($subPageIds as $id) {
                    $page = Page::getByID($id);
                    ?>
                        <div>
                            <a href="<?php echo $page->getCollectionPath(); ?>">
                                <article class="article">
                                    <img src="http://picsum.photos/378/500?image=973" alt="" class="article__image"/>
                                    <header>
                                        <span class="article__tag">Health and Fitness</span>
                                        <h1 class="article__title"><?php echo $page->getCollectionName(); ?></h1>
                                        <p class="article__copy"><?php echo $page->getCollectionDescription(); ?></p>
                                    </header>
                                </article>
                            </a>
                        </div>
                    <?php
                }
            ?>
            </div>
        </div>
    </section>
</main>

<?php
$this->inc('includes/doc_foot.php');
?>
