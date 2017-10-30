
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Bickleigh <span class='hidden-sm hidden-xs'>village website</span></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php print theme('links', array(
        'links' => menu_navigation_links('main-menu'),
        'attributes' => array( 'class' => array('nav', 'navbar-nav'))
      ));?>
      <?php print theme('links', array(
        'links' => menu_navigation_links('user-menu'),
        'attributes' => array( 'class' => array('nav', 'navbar-nav', 'navbar-right'))
      ));?>
    </div>
  </div><!--/.navbar-collapse -->
</nav>

<div class="main">
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
</div>

<div class="adverts">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p><i>Thanks to our generous advertisers and sponsors...</i></p>
        <?php print render($page['adverts']); ?>
      </div>
      <div class="col-sm-4">
        <?php print render($page['about']); ?>
      </div>
    </div>
  </div>
</div>
