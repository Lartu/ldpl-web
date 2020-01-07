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

<style>
    table{
        border-collapse: collapse;
    }
    td, th{
        padding: 5px;
    }
    th{
        background-color: lightgray;
    }
</style>

<body id="text-body">
    <h2><a href="../index.html" id="main-link">LDPL</a> Nightly Builds</h2>
    <hr>
    <p>
    Every day at 22:00 (GMT -3) / 01:00 (GMT +0) the latest available development
    version of LDPL is automatically compiled, packaged and uploaded here. If
    you want to get the newest, cutting edge version of LDPL but you don't
    want to build it yourself, you should get a nightly build.
    </p>
        
    <p>
    Please bear in mind that as these nightly builds are automatically
    compiled binaries of a <b>development</b> version of LDPL, they may
    contain unknown bugs or stability issues. Use them at your own risk!
    </p>
    
    <table width=100% border=1>
        <tr>
            <th>
                OS
            </th>
            <th>
                Architecture
            </th>
            <th>
                Build Date
            </th>
            <th>
                File Size
            </th>
            <th>
                Download
            </th>
        <tr>
        <?php
        $files = array_reverse(array_diff(scandir("."),
                    array('..', '.', 'index.php', '.gitignore')));
        foreach($files as $file){
            $tokens = explode("_", $file);
            $date = str_replace("_", "-", $tokens[0]);
            $arch_os = explode("-", $tokens[1]);
            $arch = $arch_os[1];
            if($arch == "x86") $arch = "x86 (32 bits)";
            if($arch == "amd64") $arch = "amd64 (64 bits)";
            $os = ucfirst(explode(".", $arch_os[2])[0]);
            $size = ceil(filesize($file) / 1024);
            if($size > 1024){
                $size = number_format((float)$size, 2, '.', '') . " MiB";
            }else{
                $size = $size . " KiB";
            }
            echo "<tr>";
            echo "<td>$os</td>";
            echo "<td>$arch</td>";
            echo "<td>$date</td>";
            echo "<td>$size</td>";
            echo "<td><a href=\"$file\">$file</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
