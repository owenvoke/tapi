<?php
use pxgamer\tAPI\Client;

include '../vendor/autoload.php';
$uTP = new Client;

$response = '';
if (isset($_POST) && isset($_POST['api_key']) && isset($_FILES['torrent_file'])) {
    $uTP->setApiAuth($_POST['api_key']);
    $response = json_decode($uTP->upload($_FILES['torrent_file']['tmp_name']));
    $uTP->unsetApiAuth();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>tAPI</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">tAPI</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="torrent_file">Torrent File</label><input type="file" class="form-control" name="torrent_file"
                                                                 id="torrent_file" accept=".torrent"/>
        </div>
        <div class="form-group">
            <label for="api_key">API Key</label><input type="text" class="form-control" name="api_key" id="api_key"
                                                       value="<?= (isset($_POST['api_key']) ? $_POST['api_key'] : '') ?>"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Upload" class="btn btn-default">
        </div>
    </form>
    <?= ($response !== '') ? '<pre>' . json_encode($response, JSON_PRETTY_PRINT) . '</pre>' : '' ?>
</div>
</body>
</html>
