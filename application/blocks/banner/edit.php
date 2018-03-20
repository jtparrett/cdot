<?php
/**
 * Created by PhpStorm.
 * User: giantjelly
 * Date: 01/08/2017
 * Time: 14:58
 */

use Concrete\Core\File\File;
use Concrete\Core\Application\Service\FileManager;

$al = Core::make('helper/concrete/asset_library');
$file = $image ? File::getByID($image) : null;
?>

<fieldset>
    <div class="form-group">
        <?php
            echo $form->label('image', t('Image'));
            echo $al->image($image ?: 0, 'image', t('Choose Image'), $file);
        ?>
    </div>
    <div class="form-group">
        <?php
        echo $form->label('heading', t('Heading'));
        echo $form->text('heading', $heading);
        ?>
    </div>
    <div class="form-group">
        <?php
            echo $form->label('text', t('Text'));
            echo $form->text('text', $text);
        ?>
    </div>
    <div class="form-group">
        <?php
            echo $form->label('link', t('Link'));
            echo $form_page_selector->selectPage('link', $link);
        ?>
    </div>
    <div class="form-group">
        <?php
        echo $form->label('link_text', t('CTA text'));
        echo $form->text('link_text', $linkText);
        ?>
    </div>
</fieldset>
