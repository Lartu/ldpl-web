<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rev="made" href="mailto:martin@ldpl-lang.org" />
    <link rel="icon" type="image/png" href="graphics/favicon.png" />
    <meta name="DC.title" content="ldpl-lang.org" />
    <link rel="stylesheet" type="text/css" href="ldpl.css" />
    <title>LDPL: Nightly Builds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="text-body">
    <h2><a href="index.html" id="main-link">LDPL</a> Nightly Builds</h2>
    <hr>
    <p>
    As any project out there, the LDPL Programming Language is not by any means
    ever complete. There are features we would like to see introduced into the
    language and traits of it that we might not like in their current form.
    </p>
        
    <p>
    This is a list of features we would like to add to LDPL and changes we
    have to be done to it in order to help the project progress forward.
    If you fix / change / add any of these wanted features, please contact
    us through the <a href="https://github.com/Lartu/ldpl/issues">issues</a>
    section of the LDPL repository (or via any other medium) so
    we can remove it from this page.    
    </p>
    
    <h2>Wanted Features & Changes</h2>
    
    <ul>
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Expressions
            <!-- TYPE: -->
            <small style="color: green">[Feature]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            The LDPL Language needs expression evaluation. At the moment it is
            not possible to write something like <code>if a is greater than a +
            1 then</code> and that sometimes makes coding in LDPL very
            cumbersome. Maybe expressions could be enclosed in some way to
            make parsing easier (e.g., <code>if a is greater than {a + 1}
            then</code>).
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Remove PHP Dependencies
            <!-- TYPE: -->
            <small style="color: orange">[Change]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            When LDPL is built from source, it uses PHP to regenerate the
            <i>ldpl.1</i> man file. Many systems don't have PHP installed by
            default, so this requirement is just excessive. The man regenerator
            (OMFG, the Only Man File Generator) should be ported to LDPL and
            executed after LDPL has been built.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Line-by-line File Reading
            <!-- TYPE: -->
            <small style="color: green">[Feature]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            At the moment when you load a file into memory from LDPL the file
            gets loaded entirely at once. This is a problem when dealing with
            very large files that may not fit in memory. LDPL should provide
            a way to read files one line at a time, otherwise these big files
            won't be able to be opened.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Embedded C++ Compiler
            <!-- TYPE: -->
            <small style="color: green">[Feature]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            The LDPL Compiler takes LDPL code and compiles into C++ code, that
            is then compiled into an executable file by a C++ compiler. This
            forces the user to have a C++ compiler installed whenever they
            want to use LDPL. If we found a way to embed a C++ compiler into
            the LDPL compiler (or we shipped a portable C++ compiler with the
            LDPL binary that the LDPL compiler could use), LDPL would become a
            much more accessible language.
            <!----------->
        </li>
    </ul>
    
    <h2>Wanted Libraries</h2>
    
    <ul>
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            MySQL Library
            <!-- TYPE: -->
            <small style="color: blue">[Library]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            It would be nice to be able to work with databases using LDPL. We
            need a library to make it possible to interface with MySQL
            databases.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            SQL Server Library
            <!-- TYPE: -->
            <small style="color: blue">[Library]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            It would be nice to be able to work with databases using LDPL. We
            need a library to make it possible to interface with SQL Server
            databases.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Regex Library
            <!-- TYPE: -->
            <small style="color: blue">[Library]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            It would be wonderful to be able to match, replace and find text
            using regex in LDPL. A Regex library would make this possible.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            JSON Library
            <!-- TYPE: -->
            <small style="color: blue">[Library]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            It would be wonderful to be able to load and save JSON data into
            and from LDPL maps.
            <!----------->
        </li>
        
        <li><p>
            <b>Title</b>:
            <!-- TITLE: -->
            Request Library
            <!-- TYPE: -->
            <small style="color: blue">[Library]</small>
            <!----------->
            <br><b>Description:</b>
            <!-- DESCRIPTION -->
            Calls from and to APIs could be made from LDPL if we had a
            request library.
            <!----------->
        </li>
    </ul>

</body>
