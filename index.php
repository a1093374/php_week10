<meta charset = "utf-8">

<?php
    //連接資料庫
    $link = @mysqli_connect(
                'localhost',
                'root',
                '00000000',
                'imdance');
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";

    //SQL語法
    $SQL = "SELECT * FROM information";

    //送出查詢
    $result = mysqli_query($link, $SQL);

    //結果轉陣列
    echo "<table border = '1'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Gender"]."</td><td>".$row["Birthday"]."</td><td>".$row["PeopleNum"]."</td><td>".$row["Time"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Food"]."</td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a></td><td><a href = 'update.php?No=".$row["No"]."'>修改</td><br/>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($link);
?>
