<?php
    session_start();
?>

<meta charset = "utf-8">

<?php
    $sId = "nukim";
    $sPwd = "0000";

    $uId = $_GET["uId"];
    $uPwd = $_GET["uPwd"];

    if($uId == $sId && $uPwd == $sPwd){
        $_SESSION["check"] = "Yes";
        header("Location: success.php");
    }
    else{
        $_SESSION["check"] = "No";
        header("Location: fail.php");
    }
?>
