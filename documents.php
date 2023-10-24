<?php $title = "Mairie"; ?>

<?php $pageTitle = "Documents"; ?>

<?php ob_start(); ?>

<?php require_once 'vue/documents.php' ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>