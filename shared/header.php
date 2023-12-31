<?php
if (!isset($title)) {
    $title = "Grampics";
    $keywords = "Grampics, Share and capture world's moments, share, capture, share,home";
}
$desc = "Grampics lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>">
    <meta name="description" content="<?= $desc; ?>">
    <meta name="author" content="Majed Albloushi">
    <link rel="shortcut icon" href="<?= url_for('public/favicon/grampicslogo.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= url_for('public/css/master.css'); ?>">
</head>

<body>

</body>