<?php require_once("../../../private/initialize.php"); ?>

<?php
  $page_title="Pages";
  $page = isset($_GET['page']) ? $_GET['page'] : '1';
?>

<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
  <a class="back link" href="<?php echo url_for("/staff/pages/index.php");?>">&laquo; Back to List</a>
  <br/>
  Page ID: <?php echo h(u($_GET['page'])); ?>
</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
