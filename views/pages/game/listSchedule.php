<section>
    <header>
        <h2>Tvarkaraštis:</h2>
    </header>

    <table class="table table-striped">
        <tbody>
        <?php foreach ($nMatches as $nMatch): ?>
            <tr>
                <td class="visible-lg visible-md">
                    <?php echo getDateLong($nMatch['match_date']); ?>
                </td>
                <td class="visible-sm visible-xs">
                    <?php echo getDateShort($nMatch['match_date']); ?>
                </td>
                <td class="text-right hidden-xs">
                    <?php echo getHomeTeamName($nMatch['home'], $nMatch['opp']); ?>
                </td>
                <td style="text-align: right;">
                    <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($nMatch['home'], $nMatch['opp'])); ?>.png" style="width: 30px; height: 30px;">
                </td>
                <td class="text-center"  role="button">
                    <button  style="width: 65px;" type="button" class="btn btn-default" data-toggle="modal" data-target="#preview<?php echo $nMatch['id']; ?>">
                        <?php if (isset($nMatch['match_time'])):  echo substr($nMatch['match_time'], 0, 5); else: echo '----:----'; endif; ?>
                    </button>
                </td>
                <td>
                    <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($nMatch['home'], $nMatch['opp'])); ?>.png" style="width: 30px; height: 30px;">
                </td>
                <td class="hidden-xs">
                    <?php echo getAwayTeamName($nMatch['home'], $nMatch['opp']); ?>
                </td>
                <td class="text-right">
                    <img src="<?php echo IMG_LEAGUES.$nMatch['league']; ?>.png" style="width: 30px; height: 30px; display: inline-block;">
                </td>
                <td class="text-right visible-lg visible-md">
                    <?php echo getLeagueByKey($nMatch['league']); ?>
                </td>

                <?php if ($user['admin']): ?>
                    <td>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#update<?php echo $nMatch['id']; ?>">
                            Atnaujinti
                        </button>
                    </td>
                <?php endif; ?>

            </tr>

            <div class="modal fade" id="preview<?php echo $nMatch['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="text-center">
                            <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getHomeTeamName($nMatch['home'], $nMatch['opp'])); ?>.png">
                            <h1  style="display: inline-block;"> VS </h1>
                            <img  style="display: inline-block; width: 300px; height: 300px;" src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', getAwayTeamName($nMatch['home'], $nMatch['opp'])); ?>.png">
                        </div>
                        <div style="text-align: center;">
                            <h2>Data:<?php echo $nMatch['match_date']; ?>
                            </h2>
                        </div>
                        <div style="text-align: center;">
                            <h2>Rungtynių laikas: <?php if (isset($nMatch['match_time'])):  echo substr($nMatch['match_time'], 0, 5); else: echo 'kol kas nenurodytas'; endif; ?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bs-example-modal-sm" id="update<?php echo $nMatch['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                                    <input type="hidden" name="game_id" value="<?php echo $nMatch['id']; ?>" />

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


