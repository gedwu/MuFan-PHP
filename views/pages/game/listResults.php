<section>
    <header>
        <h2>Rezultatai:</h2>
    </header>

    <table class="table table-striped">
        <tbody>
        <?php foreach ($lMatches as $lMatch): ?>
            <tr>
                <td class="visible-lg visible-md">
                    <?php echo getDateLong($lMatch['match_date']); ?>
                </td>
                <td class="visible-sm visible-xs">
                    <?php echo getDateShort($lMatch['match_date']); ?>
                </td>
                <td class="text-right hidden-xs">
                    <?php echo getHomeTeamName($lMatch['home'], $lMatch['opp']); ?>
                </td>
                <td style="text-align: right;">
                    <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($lMatch['home'], $lMatch['opp'])); ?>.png" style="width: 30px; height: 30px;">
                </td>
                <td class="text-center"  role="button">
                    <button style="width: 65px;" type="button" class="btn btn-<?php if ($lMatch['goals_in'] > $lMatch['goals_out']): echo 'success'; elseif ($lMatch['goals_in'] < $lMatch['goals_out']): echo 'danger'; else: echo 'warning'; endif; ?>" data-toggle="modal" data-target="#preview<?php echo $lMatch['id']; ?>">
                    <?php echo  $lMatch['goals_in'].'-'.$lMatch['goals_out']; ?>
                    </button>
                </td>
                <td>
                    <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($lMatch['home'], $lMatch['opp'])); ?>.png" style="width: 30px; height: 30px;">
                </td>
                <td class="hidden-xs">
                    <?php echo getAwayTeamName($lMatch['home'], $lMatch['opp']); ?>
                </td>
                <td class="text-right">
                    <img src="<?php echo IMG_LEAGUES.$lMatch['league']; ?>.png" style="width: 30px; height: 30px; display: inline-block;">
                </td>
                <td class="text-right visible-lg visible-md">
                    <?php echo getLeagueByKey($lMatch['league']); ?>
                </td>

                <?php if ($user['admin']): ?>
                    <td>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#update<?php echo $lMatch['id']; ?>">
                            Atnaujinti
                        </button>
                    </td>
                <?php endif; ?>

            </tr>

            <div class="modal fade" id="preview<?php echo $lMatch['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="text-center">
                            <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($lMatch['home'], $lMatch['opp'])); ?>.png">
                            <h1  style="display: inline-block;"> VS </h1>
                            <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($lMatch['home'], $lMatch['opp'])); ?>.png">
                        </div>
                        <div style="text-align: center;">
                            <h2>Data:<?php echo $lMatch['match_date']; ?>
                            </h2>
                        </div>
                        <div style="text-align: center;">
                            <h2>Rungtynių laikas: <?php if (isset($lMatch['match_time'])):  echo substr($lMatch['match_time'], 0, 5); else: echo 'kol kas nenurodytas'; endif; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-sm" id="update<?php echo $lMatch['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">KAZKAS VS KAZKAs</h4>
                        </div>

                        <form  method="post" action="index.php?page=game_upd_validate">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Įmušta</label>
                                    <input type="text" name="goals_in" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Praleista</label>
                                    <input type="text" name="goals_out" class="form-control" id="exampleInputEmail1">
                                    <input type="hidden" name="game_id" value="<?php echo $lMatch['id']; ?>" />

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                <button type="submit" class="btn btn-primary" name="processUpdateGame">Atnaujinti</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        </tbody>
    </table>

</section>