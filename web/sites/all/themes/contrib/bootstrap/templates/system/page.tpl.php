<header id="navbar" role="banner" class="navbar navbar-default navbar-static-top" style="background-color: #223F7B; min-height: 80px; margin-bottom: 0; border: 0;">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" style="max-width: 250px; width: 100%; display: block; margin-top: 15px;">
          <img src="/sites/default/files/psu.svg" alt="The Pennsylvania State University" style="width: 100%" />
        </a>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation">
          <div class="mobile-links">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
          </div>
          <a href="/user/login" class="btn btn-default signup">Sign Up</a>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
<section>
<div class="navbar desktop-links" style="background-color: #e0e7f1;">
<!-- <div class="navbar desktop-links" style="background-color: #EFF3F6;">-->
    <nav>
      <?php if (!empty($primary_nav)): ?>
        <?php print render($primary_nav); ?>
      <?php endif; ?>
    </nav>
  </div>
</section>
  <?php if ($is_front): ?>
    <section class="front-callout">
      <div class="container">
      <div class="btn-group btn-group-justified" role="group" aria-label="Need to Know, Q&A, Course Dates">
        <div class="btn-group" role="group">
          <button type="button" onclick="location.href='/node/20';" class="btn btn-default"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span><br>  Need to Know</button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" onclick="location.href='/node/21';" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><br>  Q&A</button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" onclick="location.href='/node/18';" class="btn btn-default"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><br> Course Dates</button>
        </div>
      </div>
      </div>
    </section>
  <?php endif; ?>

<div class="main-container <?php print $container_class; ?>">

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section <?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif;?>
      <a id="main-content"></a>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if (!$is_front): ?> 
      <div class="page-header">
        <h1><?php print $title ?></h1>
      </div>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>



  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>



