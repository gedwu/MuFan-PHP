<h2> Žaidėjai:</h2>
<?php foreach($players as $player):  ?>

    <div class="col-sm-3 col-md-3 col-xs-12">
        <div class="thumbnail">
            <img src="<?php echo IMG_PLAYERS; ?><?php echo $player['name_last']; ?>.jpg" alt="" style="width:100%"  class="img-rounded">
            <div class="caption" style="font-weight: 300; font-size: 16px;">
                <span class="badge"><?php echo $player['nr']; ?></span>
                <a href="index.php?page=player_single&id_player=<?php echo $player['id']; ?>">
                    <?php echo $player['name_first'].' '.$player['name_last']; ?>

                </a>
                <span style="float:right">
                        <img src="<?php echo IMG_FLAGS; ?><?php echo $player['nat']; ?>.png" alt=""> <?php echo $player['birth_date']; ?>m.
                    </span>
            </div>
        </div>
    </div>

<?php endforeach; ?>

