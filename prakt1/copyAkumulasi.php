<form action="copyAkumulasi.php" method="GET">
<input type="number" name="bil">
<input type="submit" name="submit" value="Jumlahkan">

<?php
if(isset($_GET['bil'])) {
    if(isset($_GET['bils'])) {
        $data = $_GET['bils'];
    }else {
        $data = array();
    }
    array_push($data, $_GET['bil']);
    foreach($data as $d) {
        echo "<input type='hidden' name='bils[]' value='{$d}' />";
    }
    echo "<br />";
    $sum = 0;
    foreach($data as $d) {
        echo $d."<br />";
        $sum += $d;
    }
    echo "------------- + <br /> {$sum}";

}


?>

</form>