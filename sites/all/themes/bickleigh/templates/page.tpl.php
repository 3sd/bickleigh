
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><?php print $site_name ?></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <?php print theme('links', array(
          'links' => menu_navigation_links('main-menu'),
          'attributes' => array( 'class' => array('nav', 'navbar-nav'))
        ));?>
      <div class="nav navbar-nav navbar-right">
        <?php global $user; if ($user->uid): ?> <p class="navbar-text">Welcome <?php print l($user->name,'user/'.$user->uid); ?></p> <a href="/user/logout" class="btn btn-default navbar-btn">Log out</a><?php endif; ?>
        <?php print render($page['navbar-right']); ?>
      </div>
    </div><!--/.navbar-collapse -->
  </div>
</nav>
<div class="container">

  <?php print render($title_prefix); ?>
  <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <?php print render($page['help']); ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php if ($messages): ?><?php print $messages; ?><?php endif; ?>
  <?php print render($page['content']); ?>
  <?php print $feed_icons; ?>

</div>
