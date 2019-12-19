<?php $__env->startSection('content'); ?>
<div class="Quotes">
<p id="QuoteText">"Crazy, but that's how it goes
millions of people living as foes
maybe it's not too late
to learn how to love and forget how to hate.
<br>
Mental wounds not healing
Life's a bitter shame
I'm going off the rails on a crazy train."</p>
<p id="AuthorText">Ozzy Osbourne</p>

<script>
function btn(x) {
  x.classList.toggle("fas fa-pause");
}
</script>

</div>
      <div class="table-container">
        <table>
          <tr id="trborder" class="w3-border-bottom">
            <th class="rows"></th>
            <th class="rows"> #ID </th>
            <th class="rows"> TRACK </th>
            <th class="rows"> ARTIST </th>
            <th class="rows"> ALBUM </th>
            <th class="rows"> DURATION </th>
          </tr>
      <?php foreach ($MusicData as $key => $data): ?>
        <tr class="Songs" class="w3-border-bottom">
          <th class="rows" id="column-data">
            <a href="<?php echo e($data->Music); ?>" id="nowPlay">
                <i class="fas fa-play" onclick="btn(this)"></i>
            </a>
          </th>
          <th class="rows" id="column-data"><?php echo e($data->id); ?></th>
          <th class="rows" id="column-data"><?php echo e($data->Name); ?></th>
          <th class="rows" id="column-data"><?php echo e($data->Artist); ?></th>
          <th class="rows" id="column-data"><?php echo e($data->Album); ?></th>
          <th class="rows" id="column-data"><?php echo e($data->Duration); ?></th>
        </tr>
      <?php endforeach; ?>
</div>

<div class="nbar">
  <audio controls>
    <source src="">
  </audio>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/quovadis/YorickMusic/resources/views/home.blade.php ENDPATH**/ ?>