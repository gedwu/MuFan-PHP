<h2>Prideti matcha</h2>


<form method="post" action="index.php?page=game_validate" class="form-horizontal">

    <div class="form-group">
        <label class="col-sm-2 control-label">Oponentai </label>
        <div class="col-sm-10">
            <input type="text" name="opp"  class="form-control"><br />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"> Data</label>
        <div class="col-sm-5">
            <input type="date" name="match_date"  class="form-control"><br />
        </div>
        <div class=" col-sm-5 alert alert-info">
            <strong>Pavyzdys:</strong> 2017-05-18
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Laikas </label>
        <div class="col-sm-5">
            <input type="time" name="match_time"  class="form-control"><br />
        </div>
        <div class=" col-sm-5 alert alert-info">
            <strong>Pavyzdys:</strong> 21:45
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Vieta | Lyga </label>
        <div class="col-sm-2">
            <input type="radio" name="home" value="1"> Namai <br>
        </div>
        <div class="col-sm-2">
            <input type="radio" name="home" value="0"> Išvyka<br>
        </div>
        <div class="col-sm-6">
            <select name="league" class="form-control">
                <option value="EPL">Premier lyga</option>
                <option value="EL">Europos lyga</option>
                <option value="CL">Čempionų lyga</option>
                <option value="FAC">FA taurė</option>
                <option value="LC">Lygos taurė</option>
                <option value="ICC">Tarptautinė čempionų taurė</option>
                <option value="CS">Bendruominės skydas</option>
                <option value="CLF">Draugiškos</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="processAddMatch">Prideti</button>
        </div>
    </div>
</form>