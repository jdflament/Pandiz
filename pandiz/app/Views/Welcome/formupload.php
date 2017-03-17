<form method="post" enctype="multipart/form-data" action="/chanson/cree">
    <label>Nom</label><input type="text" name="nom" placeholder="Le titre" /><br />
    <label>Style</label><input type="text" name="style" placeholder="Rock, Rap ..." /><br />
    <label>Fichier audio</label><input type="file" name="chanson" placeholder="Choisissez une musique" /><br />
     <label>Pochette album</label><input type="file" name="pochette" placeholder="Choisissez une image" /><br />
    <input type="submit" />
</form>