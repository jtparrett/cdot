<?php
/**
 * Created by PhpStorm.
 * User: giantjelly
 * Date: 01/08/2017
 * Time: 15:15
 */

use Concrete\Core\File\File;
use Concrete\Package\Croppy\Src\Bridge\Croppy;

if ($image) {
    $imagePath = File::getRelativePathFromID($image);
    $file = File::getByID($image);
}
?>

<section role="banner" class="banner">
    <div class="banner__image">
        <img src="<?= $file ?>" />
        <div class="banner__actions">
            <a href="<?= $link ?>" class="button"><?= $linkText ?></a>
        </div>
    </div>

    <div class="wrapper">
        <div class="banner__inner">
            <h1 class="banner__title"><?= $heading ?></h1>
            <p class="banner__copy"><?= $text ?></p>
        </div>
    </div>
</section>
