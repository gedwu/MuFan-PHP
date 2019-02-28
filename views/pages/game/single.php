<div class="text-center">
    <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($item['home'], $item['opp'])); ?>.png">
    <h1  style="display: inline-block;"> VS </h1>
    <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($item['home'], $item['opp'])); ?>.png">
</div>
<div style="text-align: center;">
    <h2>Data:<?php echo $item['match_date']; ?>
    </h2>
</div>
<div style="text-align: center;">
    <h2>Rungtynių laikas: <?php if (isset($item['match_time'])):  echo substr($item['match_time'], 0, 5); else: echo 'kol kas nenurodytas'; endif; ?></h2>
</div>