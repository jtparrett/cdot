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
<div class="grid__center">
    <blockquote class="quote quote--dark quote--large">
        <div class="quote__image">
            <img src="<?= $file->getRecentVersion()->getRelativePath() ?>" alt=""/>
        </div>
        <p class="quote__copy"><?= $text ?></p>
        <cite class="quote__cite"><?= $name ?></cite>
    </blockquote>
</div>
