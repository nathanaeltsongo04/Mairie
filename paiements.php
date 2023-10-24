<?php $title = "Mairie"; ?>

<?php $pageTitle = "Paiements"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/paiements.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>