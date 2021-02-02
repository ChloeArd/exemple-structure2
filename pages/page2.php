<!-- Inclusion du header se trouvant dans le fichier _partials/header.php -->
<?php
$title = "Title page 2";
include $_SERVER["DOCUMENT_ROOT"].'/pages/_partials/header.php';
include $_SERVER["DOCUMENT_ROOT"].'/pages/_partials/menu.php';
?>

<!-- Page content -->
<main>
    <div id="app-root"></div>
</main>

<?php include $_SERVER["DOCUMENT_ROOT"].'/pages/_partials/footer.php';
