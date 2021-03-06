<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
// Create alias for $this object reference:
$document = $this;
// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;
Artx::load("Artx_Page");
// Initialize $view:
$view = $this->artx = new ArtxPage($this);
// Decorate component with Artisteer style:
$view->componentWrapper();
JHtml::_('behavior.framework', true);
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
<jdoc:include type="head" />
<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by Artisteer v4.1.0.60046 -->
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script type="text/javascript" src="<?php echo $templateUrl; ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/time.js"></script>
	
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/js/script.responsive.js"></script>
</head>
<body>

<div id="art-main">
<header class="art-header"><?php echo $view->position('position-30', 'art-nostyle'); ?>

    <div class="art-shapes">
       <div class="art-taimer">
<div id="main">

<div id="time_div" style="font-size:10pt;color:#FEE300;text-shadow: 1.4px 1.4px 0 rgba(23, 23, 23, 0.81);font-weight:700;font-family:Verdana;background-color:;margin-left: 0;width:60px;border:0px solid rgb(250,0,0)">

<script type="text/javascript">
    showTime();
</script></div>
<br><br><br><br><br><br>
<span class="time_div">
<?php echo date('d.m.Y');?>
</span>
</div>
            </div>
</header>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="art-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>
<div class="art-sheet clearfix">
            <?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="art-layout-cell art-sidebar1">
<?php echo $view->position('position-7', 'art-block'); ?>
<?php echo $view->position('position-4', 'art-block'); ?>
<?php echo $view->position('position-5', 'art-block'); ?>
                        </div>
<?php endif; ?>
                        <div class="art-layout-cell art-content">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>
                        </div>
                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="art-layout-cell art-sidebar2">
<?php echo $view->position('position-6', 'art-block'); ?>
<?php echo $view->position('position-8', 'art-block'); ?>
<?php echo $view->position('position-3', 'art-block'); ?>


                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>

<footer class="art-footer">
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 33%">
<?php if ($view->containsModules('position-31')) : ?>
    <?php echo $view->position('position-31', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div><div class="art-layout-cell" style="width: 34%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div><div class="art-layout-cell" style="width: 33%">
<?php if ($view->containsModules('position-33')) : ?>
    <?php echo $view->position('position-33', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%">
<?php if ($view->containsModules('position-34')) : ?>
    <?php echo $view->position('position-34', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 33%">
<?php if ($view->containsModules('position-35')) : ?>
    <?php echo $view->position('position-35', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div><div class="art-layout-cell" style="width: 34%">
<?php if ($view->containsModules('position-36')) : ?>
    <?php echo $view->position('position-36', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div><div class="art-layout-cell" style="width: 33%">
<?php if ($view->containsModules('position-37')) : ?>
    <?php echo $view->position('position-37', 'art-nostyle'); ?>
<?php else: ?>
        <p><br></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>

</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links">СПб ГО ООО "ВОИ" &copy <?php echo date('Y');?>. Все права защищены.</span>
    </p>
</div>

<?php echo $view->position('debug'); ?>
  
</body>
</html>