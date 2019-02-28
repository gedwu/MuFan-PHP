<div class="page-header">
    <h1>
        <?php echo $item['name_first'] . ' ' . $item['name_last']; ?>
    </h1>
</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo IMG_ROOT.'thumbnails/karusele3.jpg'; ?>" class="img-responsive">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="<?php echo IMG_ROOT.'thumbnails/karusele2.jpg'; ?>" class="img-responsive">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="<?php echo IMG_ROOT.'thumbnails/karusele1.png'; ?>" class="img-responsive">
            <div class="carousel-caption"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<br><br>

<div class="row">

    <div class="col-md-5 col-lg-5">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Asmeninė informacija: </strong></div>
            <table class="table table-striped">
                <tr>
                    <td>
                        Tautybė:
                    </td>
                    <td>
                        <?php echo getNationalityByKet($item['nat']); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Gimimo vieta:
                    </td>
                    <td>
                        <?php echo $item['birth_place']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Gimimo data:
                    </td>
                    <td>
                        <?php echo getDateLong($item['birth_date']); ?>
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Transferio istorija: </strong></div>
            <table class="table table-striped">
                <tr>
                    <td>
                        Buvęs klubas:
                    </td>
                    <td>
                        <?php echo $item['transfer_club']; ?>
                        <img src="<?php echo IMG_CLUBS; ?><?php echo str_replace(' ', '', $item['transfer_club']); ?>.png" style="width: 22px; height: 22px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        Perėjimo suma:
                    </td>
                    <td>
                        <?php if (!$item['transfer_cost']): echo 'nemokamai'; else: echo $item['transfer_cost']; ?>
                            <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Perėjimo data
                    </td>
                    <td>
                        <?php echo getDateLong($item['transfer_date']); ?>
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Fiziniai duomenys: </strong></div>
            <table class="table table-striped">
                <tr>
                    <td>
                        Ūgis:
                    </td>
                    <td>
                        <?php echo $item['height']; ?> cm.
                    </td>
                </tr>
                <tr>
                    <td>
                        Svoris:
                    </td>
                    <td>
                        00 kg.
                    </td>
                </tr>
            </table>
        </div>
        <br>
    </div>

    <?php if (isset($item['info_img'])): ?>
    <div class="col-md-7 col-lg-7">
        <img src="http://www.fctables.com/uploads/infographics/profil/<?php echo $item['info_img']; ?>/.jpg" class="img-responsive"/>
    </div>
    <?php endif; ?>

</div>

