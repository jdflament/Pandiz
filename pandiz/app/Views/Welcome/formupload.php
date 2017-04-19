<form id="form-musique" method="post" enctype="multipart/form-data" action="/chanson/cree">
    <label>Nom</label><input type="text" name="nom" placeholder="Le titre" /><br /><br />
    <label>Style</label><select id="select-genre" name="style">
            <option id="pop">POP</option>
            <option id="rock">Rock</option>
            <option id="electronic">Electronic</option>
            <option id="jazz">Jazz</option>
            <option id="hiphop">Hip-Hop</option>
            <option id="indie">Indie</option>
            <option id="soundtrack">Soundtrack</option>
            <option id="classique">Classique</option>
            <option id="chillout">Chillout</option>
            <option id="ambient">Ambient</option>
            <option id="folk">Folk</option>
            <option id="metal">Metal</option>
            <option id="funk">Funk</option>
            <option id="rap">RAP</option>
            <option id="rnb">RNB</option>
            <option id="punk">Punk</option>
            <option id="reggae">Reggae</option>
            <option id="country">Country</option>
            <option id="house">House</option>
            <option id="dubstep">Dubstep</option>
        </select><br /><br />
    <label>Fichier audio</label><input type="file" name="chanson" placeholder="Choisissez une musique" /><br /><br />
     <label>Pochette album</label><input type="file" name="pochette" placeholder="Choisissez une image" /><br /><br />
    <input type="submit" />
</form>