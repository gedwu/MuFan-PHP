<h2>Įkelti naujiena</h2>
<form method="post" enctype="multipart/form-data" action="index.php?page=article_validate">
    <div class="form-group">
        <label>Antraštė</label><br />
        <input type="text" name="pavadinimas" size="40"  class="form-control">
        <div class="alert alert-info">
            <strong>Minimalus simbolių kiekis:</strong> XX. <strong>Maksimalus:</strong>  100
        </div>
    </div>

    <div class="form-group">
        <label>Įžanga</label><br />
        <textarea class="form-control" name="intro" rows="3"></textarea>
        <div class="alert alert-info">
            <strong>Minimalus simbolių kiekis:</strong> YY. <strong>Maksimalus:</strong>  300
        </div>
    </div>

    <div class="form-group">
        <label>Tūrinys</label><br />
        <textarea class="form-control" name="turinys" rows="9"></textarea>
        <div class="alert alert-info">
            <strong>Minimalus simbolių kiekis:</strong> ZZ. <strong>Maksimalus:</strong>  300
        </div>
    </div>

    <div class="form-group">
        <label>Nuotrauka</label><br />
        <input type="file" name="nuotrauka">
        <div class="alert alert-info">
            <strong>Failo dydis:</strong> 500x333 px. <strong>Formatai:</strong>  .jpg .png
        </div>
    </div>
    <div class="form-group">
        <label>Video nuoroda</label><br />
        <input type="url" name="video" size="70"  class="form-control">
    </div>


    <button type="submit" class="btn btn-default"  name="processAddNew">Prideti</button>
</form>