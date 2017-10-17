<?php
  require_once("../../../private/initialize.php");

  if (is_post_request()) {
    $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $visible = isset($_POST['visible']) ? $_POST['visible'] : '';

    echo 'Form parameters <br />';
    echo "Menu Name: {$menu_name} <br />";
    echo "Position: {$position} <br />";
    echo "Visible: {$visible} <br />";
  }

 ?>

<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

  <div id="content">

    <a class="back-link" href="<?php echo
    url_for("/staff/pages/index.php"); ?>">&laquo; Back to List</a>

    <div class="page_new">
      <h1>Create Page</h1>

      <form action="<?php echo url_for("/staff/pages/new.php"); ?>" method="post">
        <dl>
          <dt>Menu Name</dt>
          <dd><input type="text" name="menu_name" value="<?php echo isset($menu_name) ? $menu_name : ''; ?>" /></dd>
        </dl>
        <dl>
          <dt>Position</dt>
          <dd>
            <select name="position">
              <option value="1">1</option>
            </select>
          </dd>
        </dl>
        <dl>
          <dt>Visible</dt>
          <dd>
            <input type="hidden" name="visible" value="0" />
            <input type="checkbox" name="visible" value="1" />
          </dd>
        </dl>
        <div id="operations">
          <input type="submit" value="Create Page" />
        </div>
      </form>
    </div> <!-- subject_new -->
  </div> <!-- content -->

<?php include(SHARED_PATH . "/staff_footer.php"); ?>

  <form class="test" action="index.html" method="get">

  </form>
