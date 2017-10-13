<?php require_once("../../../private/initialize.php"); ?>

<?php
  $page_title="Show Subject";
  $page = isset($_GET['id']) ? $_GET['id'] : '1';
?>

<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
  <a class="back link" href="<?php echo url_for("/staff/subjects/index.php");?>">&laquo; Back to List</a>
  <br/>
  Subject ID: <?php echo h(u($_GET['id'])); ?>
</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
