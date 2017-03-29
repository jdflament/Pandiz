<div id="banner-user" style="background: url(img/rome3.jpg); background-size:cover; background-position: center; border:1px solid black;">
    <input type="file" class="hidden"/>
    <label for="files" id="btn-add-banner" >Ajouter une bannière</label>
</div>

<div id="profil-photo-name">
    <div id="profil-user" style="background: url(img/rome3.jpg); background-size:cover; background-position: center;">
        <div id="hover-profil-user">
            <input type="file" class="hidden"/>
            <label for="files" id="btn-add-photo-profil" >+</label>
        </div>
    </div>
    
    <div id="profil-name-username">
        <span id="profil-name"><?= $user->realname ?></span><span> - </span><span id="profil-username"><?= $user->username ?></span>
    </div>
</div>