<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $pagePermissionsFooter = new Permissions(Page::getCurrentPage()); ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <?php $this->inc('includes/footer.php'); ?>
  <?php View::element('footer_required'); ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo $this->getThemePath() ?>/js/application.js"></script>
</body>
</html>
