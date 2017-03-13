<?php
foreach ($all as $c) {
    //echo $c->utilisateur->username;die(1);
    echo $c->nom . " uploadé par " . $c->utilisateur->username . 
        "<a href='#' class='listen' data-file='$c->fichier'>Listen</a>"
        . "<br />";
}
?>

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
    });
</script>