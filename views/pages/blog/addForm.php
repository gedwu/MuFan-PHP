<h2>Įkelti naujiena</h2>
<form method="post" enctype="multipart/form-data" action="index.php?page=blog_validate">


    <div class="form-group">
        <label>Antraštė</label><br />
        <input type="text" name="pavadinimas" size="40"  class="form-control">
        <div class="alert alert-info">
            <strong>Minimalus simbolių kiekis:</strong> 10. <strong>Maksimalus:</strong>  40
        </div>
    </div>

    <div class="form-group">
        <label>Tūrinys</label><br />
        <textarea class="form-control" name="turinys" rows="8"></textarea>
        <div class="alert alert-info">
            <strong>Minimalus simbolių kiekis:</strong> 30. <strong>Maksimalus:</strong>  300
        </div>
    </div>


    <button type="submit" class="btn btn-default"  name="processAddBlog">Prideti</button>
</form>