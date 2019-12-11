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
</div>
      <div class="table-container">
        <table>
          <tr>
            <th> #ID </th>
            <th> TRACK </th>
            <th> ARTIST </th>
            <th> ALBUM </th>
            <th> DURATION </th>
          </tr>
      <?php foreach ($MusicData as $key => $data): ?>
        <tr class="Songs">
          <th id="column-data"><?php echo e($data->id); ?></th>
          <th id="column-data"><?php echo e($data->Name); ?></th>
          <th id="column-data"><?php echo e($data->Artist); ?></th>
          <th id="column-data"><?php echo e($data->Album); ?></th>
          <th id="column-data"><?php echo e($data->Duration); ?></th>
      <?php endforeach; ?>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/quovadis/YorickMusic/resources/views/home.blade.php ENDPATH**/ ?>