<div id="homepage-banner">
    <div id="homepage-banner-content">
        <h1 id="homepage-banner-title">Pandiz</h1>
        <p id="homepage-banner-subtitle">Partagez, Écoutez, Appréciez</p>
    </div>
</div>

<div class="container">

<div id="select-items">
    <div class="section-select">
        <i class="icon fa fa-chevron-down chevron-down-left"></i>
        <select id="select-filter" onChange="recup()">
            <option id="nouveautes" selected="selected">Nouveautés</option>
            <option id="top20">Top 20</option>
            <option id="tendances">Tendances</option>
        </select>
    </div>

    <p id="le-titre"></p>
    <?php
            

    $touslesstyles = array("tous", "pop" , "rock", "electronic", "jazz", "hiphop", "indie", "soundtrack", "classique", "chillout", "ambient", "folk", "metal", "funk", "rnb", "punk", "reggae", "country", "house", "dubstep");?>
    <div class="section-select">
        <i class="icon fa fa-chevron-down chevron-down-right"></i>
        <form method="post" action="/">
        <select name="style" id="select-genre" onchange="this.form.submit()">
            <?php
            foreach($touslesstyles as $st) {
                echo "<option ".($style==$st?"selected":"").">$st</option>";
            }?>
            
            
            <!--<option id="tous">Tous</option>
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
            <option id="rnb">RNB</option>
            <option id="punk">Punk</option>
            <option id="reggae">Reggae</option>
            <option id="country">Country</option>
            <option id="house">House</option>
            <option id="dubstep">Dubstep</option>-->
        </select>
        </form>
    </div>
</div>
    
<div style="clear:both;"></div>

<table id="table-music">
    <th class="table-music-headers" id="table-music-date">Date</th>
    <th class="table-music-headers" id="table-music-titre">Titre</th>
    <th class="table-music-headers" id="table-music-actions">Actions</th>
    <?php
    foreach ($all as $c) { ?>
        
        <tr class="table-music-song">
            <td class="table-music-date-content"><?php echo "<p class='song-post-date'>" . $c->post_date . "</p>"; ?></td>
            
            <td class="table-music-titre-content"><?php 
                          echo "<div class='album-cover-content'><img class='album-cover' src='$c->fichier2' alt='pochette' style='width: 150px; height: auto;'/></div>"; 
                          echo "<div class='song-user-content'>" . "<p class='artist-username'>" . $c->utilisateur->username. "</p>" . "<p class='song-name'>" . $c->nom ."</p>"  . "<p class='song-duration'>" . $c->duree . " - " . $c->style . "</p></div>";
            ?></td>
            
            <td class="table-music-actions-content"><?php echo "<a href='#' class='listen' data-file='$c->fichier'><i class='fa fa-play fa-2x'></i></a><a href='#' class='pause' data-file='$c->fichier'><i class='fa fa-pause fa-2x'></i></a>"; ?></td>
        </tr>
    <?php } ?>
</table>

<script>
    $(document).ready(function() {
       $('a.listen').on('click', function(e) {
           e.preventDefault();
           var audio = $("#player");
           var file = $(this).attr('data-file');
           console.log(file);
           audio[0].src = file;
           audio[0].play();
       });
        $('a.pause').on('click', function(e) {
           e.preventDefault();
           var audio = $("#player");
           var file = $(this).attr('data-file');
           audio[0].src = file;
           audio[0].pause();
       });
    });
</script>