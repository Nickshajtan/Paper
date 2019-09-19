<?php

/**
 * Override page.tpl.php
 *
 */
?>
<header itemscope itemtype="http://schema.org/Header" id="navbar" role="banner">
 <div class="header-background">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
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
      <div class="navbar-collapse collapse container-fluid" id="navbar-collapse">
        <nav role="navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
          <?php if (!empty($primary_nav)): ?>
            <div class="jsnav"><?php print render($primary_nav); ?></div>
          <?php endif; ?>
        <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
  <div class="header-container">
         <div class="site-information">
             <h1 itemprop="headline" class="sitename">
               <?php if (!empty($site_name)): ?>
              <span id="site-name"><?php print $site_name; ?></span>
              <span
                 id="site-name-rotate"
                 class="txt-rotate"
                 data-period="3500"
                 data-rotate='[ "<?php print $site_name; ?>", "great newspaper."]'>
              </span>
               <?php endif; ?>
          </h1>      
          <?php if (!empty($site_slogan)): ?>
          <p itemprop="description" class="sitedescription"><?php print $site_slogan; ?></p>
          </div>
        </div>
         <?php endif; ?>
</div>
</header>

<div itemscope itemtype="http://schema.org/Article" class="main-container <?php print $container_class; ?>">
 <div class="clearfix"></div>
  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
     <div itemprop="articleBody" class="bounceInUp wow" data-wow-iteration="2">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h2 class="page-header"><?php print $title; ?></h2>
      <?php endif; ?>
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
        <?php print render($page['content']); ?>
        </div>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
 <?php if (!empty($page['footer'])): ?>
  <footer itemscope itemtype="http://schema.org/Footer" class="footer">
    <div class="footer-background" id="large">
        <div class="clearfix"></div>
        <div class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
            <?php if(!empty($page['prefooter1'])) : ?>
             <?php print render($page['prefooter1']); ?>
            <?php endif; ?>        
         </div>
         <div class="col-sm-4 col-md-4 col-xs-12 col-lg-4">         
            <?php if(!empty($page['prefooter2'])) : ?>
             <?php print render($page['prefooter2']); ?>
            <?php endif; ?> 
              <div class="sprite bounceInUp wow">
                      <a href="#" class="social-icon youtube-icon"></a>
                      <a href="#" class="social-icon twitter-icon"></a>
                      <a href="#" class="social-icon facebook-icon"></a>
                  </div>
         </div>
         <div class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
            <?php if(!empty($page['prefooter3'])) : ?>
             <?php print render($page['prefooter3']); ?>
            <?php endif; ?>
         </div>
    <div class="container-fluid">
        <?php print render($page['footer']); ?>
        <div class="copyright">
             <p>
                 <?php print t('Copyright'); ?>
                 <?php echo date("Y"); ?>
                 <?php print $site_name; ?>
             </p>
         </div>
    </div>  
      </div>
   </footer>
<?php endif; ?>
