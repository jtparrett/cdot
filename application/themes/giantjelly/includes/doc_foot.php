<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $pagePermissionsFooter = new Permissions(Page::getCurrentPage());
    
    $c = Page::getCurrentPage();
    $p = new Permissions($c);    
?>

  <?php $this->inc('includes/footer.php'); ?>
  <?php Loader::element('footer_required'); ?>
  </div>

  <?php if(!$p->canViewToolbar()) : ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php endif; ?>
  <script src="<?php echo $this->getThemePath() ?>/js/application.js"></script>
</body>
</html>
