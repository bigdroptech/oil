<?php

include "dbconnect.php";


$sql =" 
     CREATE TABLE OILINPLACE
    (OilInPlaceId INT PRIMARY KEY NOT NULL,
    F TEXT  NOT NULL,
    Eo TEXT  NOT NULL,
    mEg TEXT  NOT NULL,
    WeBw TEXT  NOT NULL,
    N TEXT  NOT NULL
    );";


$sql1 =" 
     CREATE TABLE TERMF
    (TermFId INT PRIMARY KEY NOT NULL,
    Date TEXT  NOT NULL,
    Presure TEXT  NOT NULL,
    Np TEXT  NOT NULL,
    Rp TEXT  NOT NULL,
    Pbubble TEXT  NOT NULL,
    row TEXT  NOT NULL,
    Bo TEXT  NOT NULL,
    rm3 TEXT  NOT NULL,
    OIP_RC TEXT  NOT NULL,
    OIP_SC TEXT  NOT NULL,
    GRAT TEXT  NOT NULL,
    ) ;";


  $sql2 =" 
     CREATE TABLE OILPHASE
    (OilPhaseId INT PRIMARY KEY NOT NULL,
    Rs TEXT  NOT NULL,
    B0 TEXT  NOT NULL,
    Row TEXT  NOT NULL,
    Uo TEXT  NOT NULL
    );";

$sql3 =" 
     CREATE TABLE OILEXPANSION
    (OilExpansionId INT PRIMARY KEY NOT NULL,
    Bg TEXT  NOT NULL,
    B0 TEXT  NOT NULL,
    Rs TEXT  NOT NULL,
    Eo TEXT  NOT NULL
    );";

$sql4 =" 
     CREATE TABLE GASCAPEXPANSION
    (GasCapExpansionId INT PRIMARY KEY NOT NULL,
    Bg TEXT  NOT NULL,
    B0 TEXT  NOT NULL,
    m TEXT  NOT NULL,
    Eg TEXT  NOT NULL
    );";

$sql4 =" 
     CREATE TABLE Compressibility
    (CompressibilityId INT PRIMARY KEY  NOT NULL,
    Boi TEXT  NOT NULL,
    Cf TEXT  NOT NULL,
    m TEXT  NOT NULL,
    Cw TEXT  NOT NULL,
    Ec TEXT  NOT NULL
    );";


$ret = $db->exec($sql);
$ret1 = $db->exec($sql1);
$ret2 = $db->exec($sql2);
$ret3 = $db->exec($sql3);
$ret4 = $db->exec($sql4);

if(!$ret||!$ret1||!$ret2||!$ret3||!$ret4){
    echo $db->lastErrorMsg();  
} else {
    echo "Table created successfully";
}

$db->close();