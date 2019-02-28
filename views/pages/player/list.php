<section>
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong><?php echo $position['name']; ?></strong>
        </div>

        <div class="panel-body text-center">
            <?php foreach($players as $player):  ?>
<!--                @todo: fix bug with defender md4 NOT inline-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail">
                        <img src="<?php echo IMG_PLAYERS; ?><?php echo $player['name_last']; ?>.jpg" class="img-rounded img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <span class="badge">#<?php echo $player['nr']; ?></span>
                                </div>
                                <div class="col-md-9 text-left">
                                    <a href="index.php?page=player_single&id_player=<?php echo $player['id']; ?>"><?php echo $player['name_first'].' '.$player['name_last']; ?></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <img src="<?php echo IMG_FLAGS; ?><?php echo $player['nat']; ?>.png" class="img-responsive" style="display: inline-block; width: 27px; height: 21px;">
                                </div>
                                <div class="col-md-9 text-left">
                                    <?php echo getCountryByKey($player['nat']); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <?php echo $player['birth_date']; ?>
                                </div>
                                <div class="col-md-9 text-left">
                                    metai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
