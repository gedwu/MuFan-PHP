<h2>Mačai:</h2>
<table class="table table-striped">
    <tbody>
    <?php foreach ($games as $game): ?>
        <tr>
            <td>
                <?php echo $game['match_date']; ?>
            </td>
            <td style="text-align: right;">
                <?php echo getHomeTeamName($game['home'], $game['opp']); ?>
            </td>
            <td style="text-align: right;">
                <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($game['home'], $game['opp'])); ?>.png" style="width: 22px; height: 22px;">
            </td>
            <td style="text-align: center;" class="<?php if ($game['goals_in'] > $game['goals_out']): echo 'success'; elseif ($game['goals_in'] < $game['goals_out']): echo 'danger'; else: echo 'warning'; endif; ?>">
                <?php echo  $game['goals_in'].'-'.$game['goals_out']; ?>
            </td>
            <td>
                <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($game['home'], $game['opp'])); ?>.png" style="width: 22px; height: 22px;">
            </td>
            <td>
                <?php echo getAwayTeamName($game['home'], $game['opp']); ?>
            </td>
            <td>
                <?php echo $game['league']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
