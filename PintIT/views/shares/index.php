<div>
  <a class="btn btn-success btn-share" href=" <?php echo ROOT_PATH; ?>shares/add">Pin To Board</a>
  <?php foreach ($viewModel as $item) : ?>
    <div class="well">
      <h3><?php echo $item['title']; ?></h3>
      <small><?php echo $item['create_date']; ?></small>
      <hr>
      <p><?php echo $item['body']; ?></p>
      <br>
      <a class="btn btn-default" href="<?php echo $item['link']?>" target="_blank">Go to website</a>
    </div>
  <?php endforeach ?>
</div>
