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

if ($link) {
	$link = \Page::getById($link)->getCollectionLink();
}
?>

<section role="banner" class="banner">
    <div class="banner__image">
        <img src="<?= $file->getRecentVersion()->getRelativePath() ?>" />
        <?php if($link_text){ ?>
            <div class="banner__actions">
                <a href="<?= $link ?>" class="button"><?= $link_text ?></a>
            </div>
        <?php } ?>
    </div>

    <div class="wrapper">
        <div class="banner__inner">
            <h1 class="banner__title">
                <?php foreach(explode(' ', $heading) as $word){ ?>
                    <span><?= $word ?></span>
                <?php } ?>
            </h1>
            <p class="banner__copy"><?= $text ?></p>
        </div>
    </div>
</section>
