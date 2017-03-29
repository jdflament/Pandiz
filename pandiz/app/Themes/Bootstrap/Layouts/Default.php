<?php
Assets::js([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    vendor_url('dist/js/bootstrap.min.js', 'twbs/bootstrap'),
    theme_url('css/functions.js', 'Bootstrap'),
]);

echo isset($js) ? $js : ''; // Place to pass data / plugable hook zone

echo isset($footer) ? $footer : ''; // Place to pass data / plugable hook zone
?>

<?php
/**
 * Default Layout - a Layout similar with the classic Header and Footer files.
 */

// Generate the Language Changer menu.
$language = Language::code();

$languages = Config::get('languages');

//
ob_start();

foreach ($languages as $code => $info) {
?>
<li <?php if($language == $code) echo 'class="active"'; ?>>
    <a href='<?= site_url('language/' .$code); ?>' title='<?= $info['info']; ?>'><?= $info['name']; ?></a>
</li>
<?php
}

$langMenuLinks = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="<?= $language; ?>">
<head>
    <meta charset="utf-8">
    <title>Pandiz</title>
<?php
echo isset($meta) ? $meta : ''; // Place to pass data / plugable hook zone

Assets::css([
    vendor_url('dist/css/bootstrap.min.css', 'twbs/bootstrap'),
    vendor_url('dist/css/bootstrap-theme.min.css', 'twbs/bootstrap'),
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    theme_url('css/style.css', 'Bootstrap'),
]);

echo isset($css) ? $css : ''; // Place to pass data / plugable hook zone
    
?>
</head>
<body style="padding-top:0px;">

<nav class="navbar" role="navigation">
    <div id="navbar-content">
        <img id="menu-icon" src="<?= theme_url('images/menu.png', 'Bootstrap'); ?>" style="cursor:pointer;"/>
        <a href="/login" ><img id="login-icon" src="<?= theme_url('images/login.png', 'Bootstrap'); ?>" /></a>
    </div>
</nav>
<div id="menu-open" class="displaynone">
    <img id="cross-icon" src="<?= theme_url('images/cross-icon.png', 'Bootstrap'); ?>" />
    <div id="menu-open-content">
        <a class="menu-button" href="/">ACCUEIL</a>
        <?php if(Auth::id()){
            echo "<a class='menu-button' href=/utilisateur/".Auth::id().">MON PROFIL</a>";} ?>
        <a class="menu-button" href="">MA PLAYLIST</a>
        <a class="menu-button" href="">CONTACT</a>
        <a class="menu-button" href="/about">À PROPOS</a>
    </div>
</div>
    


<?= isset($afterBody) ? $afterBody : ''; // Place to pass data / plugable hook zone ?>

    <?= $content; ?>
    <audio id="player" class="displaynone" controls="controls">
          Your browser does not support the audio element.
    </audio>

<footer class="footer">
    <img id="logo-pandiz-footer" src="<?= theme_url('images/logo-pandiz-black.png', 'Bootstrap'); ?>" alt="logo-pandiz" />
    <p>&copy; Pandiz 2017, tous droits réservés.</p>
</footer>
    
<!-- DO NOT DELETE! - Forensics Profiler -->
    
</body>
</html>
