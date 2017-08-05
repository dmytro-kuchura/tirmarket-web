<?php

use Core\Widgets;

/* @var $_seo array */
/* @var $GLOBAL_MESSAGE string */
/* @var $_breadcrumbs string */
/* @var $_content string */
?>
<!doctype html>
<html lang="<?php echo I18n::$lang; ?>" dir="ltr">
<head>
    <?php echo Widgets::get('Head', $_seo); ?>
    <?php foreach ($_seo['scripts']['head'] as $script): ?>
        <?php echo $script; ?>
    <?php endforeach ?>
    <?php echo $GLOBAL_MESSAGE; ?>
</head>
<body class="">
<?php foreach ($_seo['scripts']['body'] as $script): ?>
    <?php echo $script; ?>
<?php endforeach ?>
<div class="page-wrapper">
    <?php echo Widgets::get('Header'); ?>
    <main class="page-main">
        <div class="page-size">
            <?php echo $_breadcrumbs; ?>
            <?php echo $_content; ?>
            <?php echo Widgets::get('Catalog_Viewed'); ?>
        </div>
    </main>
    <?php echo Widgets::get('Footer'); ?>
</div>
<?php echo Widgets::get('HiddenData'); ?>
</body>
</html>