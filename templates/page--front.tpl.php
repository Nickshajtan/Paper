<?php

/**
 * Override page.tpl.php for main page of website
 *
 */
?>
<header itemscope itemtype="http://schema.org/Header" id="navbar" role="banner">
 <div class="header-background">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
       <nav itemscope itemtype="http://www.schema.org/SiteNavigationElement" role="navigation" class="navbar jsnav front-nav">
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              </div>
                  <!--Dropdown menu-->
                  <div id="bs-navbar-collapse" class="collapse navbar-collapse  container-fluid">
                    <ul role="menu" class="nav navbar-nav nav_menu">
                      <li tabindex="-1"><a href="#featured_product" itemprop="url">featured product</a></li>
                      <li tabindex="-1"><a href="#latest_video" itemprop="url"><latest></latest> videos</a></li>
                      <li tabindex="-1"><a href="#latest_uploads" itemprop="url">look closer</a></li>
                      <li tabindex="-1"><a href="#hot_news" itemprop="url">hot news</a></li>
                    </ul>
                  </div>
                </nav>
  </div>
  <div class="header-container">
         <div class="site-information" style="margin-left:-50px;">
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
<!-- Content -->
<div itemscope itemtype="http://schema.org/Article" class="container">
 <div class="clearfix"></div>
 <!--Block of latest uploads-->
   <?php if (!empty($page['highlighted'])): ?>
    <section class="block first-block">
     <div class="block-title">
         <h2 id="latest_uploads" class="block-name"><a href="/paper/-block1">latest uploads</a></h2>
         <div class="row">
        <?php print render($page['highlighted']); ?>
         </div>
     </div>
    </section>
    <?php endif; ?>
    <?php if (!empty($page['sidebar_first']) || !empty($page['sidebar_second']) ): ?>
    <!--Block of Video&Blog-->
    <section class="block second-block">
       <!--Video-->
        <?php if (!empty($page['sidebar_first'])): ?>
        <div itemprop="Sidebar" itemtype="http://schema.org/Sidebar" class="<?php print ($page['sidebar_second']) ? 'col-sm-6': 'col-sm-12'; ?>">
            <div class="block-title">
                <h2 id="latest_video" class="block-name"><a href="/paper/block2">brows video</a></h2>
            </div>
            <div class="col-sm-12">
               
      <aside>
        <?php print render($page['sidebar_first']); ?>
      </aside>
            </div>
        </div>
        <?php endif; ?>
        <!--Blog-->
        <?php if (!empty($page['sidebar_second'])): ?>
        <div itemprop="Sidebar" itemtype="http://schema.org/Sidebar"  class="<?php print ($page['sidebar_first']) ? 'col-sm-6': 'col-sm-12'; ?>">
            <div class="block-title" id="blog">
                <h2 id="hot_news" class="block-name"><a href="/paper/block3">blog</a></h2>
            </div>
            <div class="col-sm-12 blogbar">
                <aside>
        <?php print render($page['sidebar_second']); ?>
                </aside> 
    
            </div>
        </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>
    <!--Block of Featured Product page-->
    <section class="block third-block">
         <div class="clearfix"></div>
         <div class="block-title">
            <h2 id="featured_product" class="block-name"><?php print $title; ?></h2>
          </div>
         <!--Logo-->
        <div class="col-sm-5 bounceInLeft wow">
            <?php if ($logo): ?>
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php else : ?>
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
         <h3>
          <?php print $site_name; ?>
         </h3>
        </a>  
      <?php endif; ?>
        </div>
        <div class="col-sm-7 bounceInRight wow">
            <div class="wrapper">
                <?php print render($page['content']); ?>
            </div>
        </div>
    </section>     
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
