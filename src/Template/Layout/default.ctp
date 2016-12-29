<?php $appName = 'VãoFazer!'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __($appName) ?> - <?= $this->fetch('title') ?></title>

    <?= $this->Html->meta('favicon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('dashboard') ?>
    <?= $this->Html->css('app') ?>

    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('app') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><?= __($appName) ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">GitHub</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?= $this->fetch('content') ?>
      </div>
    </div>
</body>
</html>
