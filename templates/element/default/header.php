<?php $title = 'AnchorSalon'; ?>

<?= $this->Html->charset(); ?>
<?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1'); ?>
<title><?= $title ?></title>
<?= $this->Html->meta('icon'); ?>
<?= $this->Html->css('default/style.css'); ?>
<?= $this->fetch('meta'); ?>
<?= $this->fetch('css'); ?>
<?= $this->fetch('script'); ?>