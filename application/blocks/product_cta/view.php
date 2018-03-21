<?php
/**
 * Created by PhpStorm.
 * User: giantjelly
 * Date: 01/08/2017
 * Time: 15:15
 */

use Concrete\Core\File\File;

if ($image) {
    $imagePath = File::getRelativePathFromID($image);
    $file = File::getByID($image);
}
?>
<div>
    <a href="<?= $link ?>">
        <article class="card">
            <img src="<?= $file->getRecentVersion()->getRelativePath() ?>" alt="" class="card__image"/>
            <span class="price"><?= $price ?></span>
            <header class="card__header">
                <span class="tag"><?= $tag ?></span>
                <h1 class="card__title"><?= $heading ?></h1>
                <p class="card__copy"><?= $text ?></p>
            </header>
        </article>
    </a>
</div>
