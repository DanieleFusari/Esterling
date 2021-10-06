<?php
require 'data.php';
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="POST">
      <label for="">category id</label>
      <input min="1" max="8" type="number" name="category" value="0">
      <label for="">separator</label>
      <input type="text" name="separator" placeholder="separator">
      <input type="submit" value="Search">
    </form>

    <section>
      <div class="">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $input = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $list = getCategory($input['category'], $input['separator']);
        }
        ?>
        <br>
        <br>
        <br>
        <h2><?php if (isset($list)) {
            echo $list;
        }
        ?>
        </h2>
      </div>
    </section>
  </body>
</html>
