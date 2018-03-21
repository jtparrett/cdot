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
    <blockquote class="quote">
        <div class="quote__image">
            <img src="<?= $file->getRecentVersion()->getRelativePath() ?>" alt="" />
        </div>
        <cite class="quote__cite"><?= $name ?></cite>
        <p class="quote__copy"><?= $text ?></p>
    </blockquote>
</div>
