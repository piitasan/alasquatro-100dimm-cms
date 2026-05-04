<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alas Quatro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <?php $currentPath = trim(service('uri')->getPath(), '/'); ?>
  <div class="aq-page">
    <header class="aq-site-header">
      <nav class="aq-nav aq-container">
        <a class="aq-brand" href="/" aria-label="Alas Quatro home">
          <img src="/assets/images/aq_logo.png" alt="Alas Quatro logo" class="aq-brand-logo">
        </a>

        <div class="aq-nav-links" role="navigation" aria-label="Primary">
          <a class="<?= $currentPath === '' ? 'active' : '' ?>" href="/" <?= $currentPath === '' ? 'aria-current="page"' : '' ?>>HOME</a>
          <a class="<?= $currentPath === 'collection' ? 'active' : '' ?>" href="/collection" <?= $currentPath === 'collection' ? 'aria-current="page"' : '' ?>>COLLECTION</a>
          <a class="<?= $currentPath === 'about' ? 'active' : '' ?>" href="/about" <?= $currentPath === 'about' ? 'aria-current="page"' : '' ?>>ABOUT US</a>
          <a class="<?= $currentPath === 'contact' ? 'active' : '' ?>" href="/contact" <?= $currentPath === 'contact' ? 'aria-current="page"' : '' ?>>CONTACT US</a>
        </div>

        <div class="aq-nav-actions">
          <a class="aq-btn aq-btn-ghost" href="/signin">SIGN IN</a>
          <a class="aq-btn aq-btn-solid" href="/signup">SIGN UP</a>
        </div>
      </nav>
    </header>

    <main class="aq-main">