<form method="GET">
    <input type="number" name="bil" />

    <input type="submit" value="Jumlahkan" />

    <?php
    if(isset($_GET['bil'])) {
        if(isset($_GET['bils'])) {
            $data = $_GET['bils'];
        }else{
            $data = array();
        }
        array_push($data, $_GET['bil']);
        foreach($data as $d) {
            echo "<input type='hidden' name='bils[]' value='{$d}' />";
            // echo '<input type="hidden" name="bils[]" value="'.$d.'" />';           
            }
            echo "<br />";
            $sum = 0;
            foreach($data as $s) {
                echo "$s <br>";
                $sum+=$s;
            }
        echo "----------+  <br /> $sum";
        // print_r($data);
    }

?>
</form>