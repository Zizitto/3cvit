<!--<div id="topbar" >-->
<!--    <div class="container">-->
<!--        -->
<!--    </div>-->
<!--</div>-->

<div id="logobar" class="">
  <div class="container">
<!--    <div class="navbar-header">-->
      <?php if ($logo): ?>
        <div class="logo navbar-btn text-center" >
            <a href="<?php print $front_page; ?>" title="ТриЦвіт">
                <img src="<?php print $logo; ?>" alt="ТриЦвіт" />
            </a>
        </div>
<!--        <div class="slogan navbar-btn pull-right" >-->
<!--            <a  href="--><?php //print $front_page; ?><!--" title="Great apps better results">-->
<!--                --><?php //print $site_slogan; ?>
<!--            </a>-->
<!--        </div>-->
      <?php endif; ?> 
<!--    </div>-->
  </div> 
</div>

<div id="navbar" role="banner" class="<?php print str_replace('container', '', $navbar_classes); ?>">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="clearfix"></div>
    </div>

    <?php if (!empty($primary_nav) ): ?>
      <div class="navbar-collapse collapse primary">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>

    <?php if ($is_front) { ?>
        <div id="page-header">
            <?php print render($page['slider_on_front']); ?>
        </div>
    <?php } ?>
</div>

<?php /*HEAD OVER*/ ?>



<div class="main-container container">
    <?php if (!$is_front) { ?>
        <h2 class="page-title"><?php print $title; ?></h2>
    <?php } ?>
    <?php print render($page['content']); ?>
</div>

<div class="footer">
    <div class="container">
        <?php print render($page['footer']); ?>
    </div>
</div>