<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rev="made" href="mailto:martin@ldpl-lang.org" />
    <link rel="icon" type="image/png" href="../graphics/favicon.png" />
    <meta name="DC.title" content="ldpl-lang.org" />
    <link rel="stylesheet" type="text/css" href="../ldpl.css" />
    <title>LDPL: Nightly Builds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="text-body">
    <h2><a href="../index.html" id="main-link">LDPL</a> Nightly Builds</h2>
    <hr>
    <p>
    Every day at 22:00 (GMT -3) / 01:00 (GMT +0) the latest available development
    version of LDPL is automatically compiled, packaged and uploaded here. If
    you want to get the newst, cutting edge version of LDPL but you don't
    want to build it yourself, you should get a nightly build.
    </p>
        
    <p>
    Please bear in mind that as these nightly builds are automatically
    compiled binaries of a <b>development</b> version of LDPL, they may
    contain unknown bugs or stability issues. Use them at your own risk!
    </p>
    <?php
    $files = array_diff(scandir("."), array('..', '.', 'index.php'));
    foreach($files as $file){
        echo "<a href=\"$file\">$file</a> (";
        echo ceil(filesize($file) / 1024);
        echo " KiB)";
        $date = str_replace("_", "-", explode("-", $file)[2]);
        $date = explode(".", $date)[0];
        echo " (built on $date)";
        echo "<br>";
    }
    ?>
</body>
