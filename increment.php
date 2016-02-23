<?php
    //I think everything looks correct. try it.
    if(isset($_GET['linkname']))
    {// i see
        $dbUserName = "dealldsx_dealers";
        $dbPassword = "Qq03049835";
        $dataBaseName = "dealldsx_dealers";
        $dataBaseHost = "localhost";
        $dbh = new PDO("mysql:host=$dataBaseHost;dbname=$dataBaseName", $dbUserName, $dbPassword);
        $linkname = $_GET['linkname'];
        //Fix this query..... To
        $q = $dbh->prepare("SELECT * FROM articles WHERE uid = :linkname");
        $q->bindValue(":linkname",(string)$linkname, PDO::PARAM_STR);
        $q->execute();
        $row = $q->fetch();
        $count = $row['counter'];
        $newCount = $count + 1;
        $q2 = $dbh->prepare("UPDATE articles SET counter = :newcount WHERE uid = :linkname"); // it should b good..
        $q2->bindValue(":newcount",(integer)$newCount, PDO::PARAM_INT);
        $q2->bindValue(":linkname",(string)$linkname, PDO::PARAM_STR);
        $q2->execute();
        echo $newCount;
    }
?> 