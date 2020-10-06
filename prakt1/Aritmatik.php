<form action="Aritmatik.php" method="GET" />
    <input type="number" name="bil1" <?php if(isset($_GET['bil1'])) echo 'value="'.$_GET['bil1'].'"'; ?>/>
    <select name="operator">
        <!-- <option selected >Pilih operator</option> -->
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option> 
    </select>
    <input type="number" name="bil2" <?php if(isset($_GET['bil2'])) echo 'value="'.$_GET['bil2'].'"'; ?>/>
    <input type="submit" value="=" name="submit" />

    <?php
    if(isset($_GET['submit']) && strlen($_GET['bil1'])&& strlen($_GET['bil2'])) {
        // echo $_GET['bil1'] + $_GET['bil2'] ;
        switch($_GET['operator']) {
            case '+':
                $hsl = $_GET['bil1'] + $_GET['bil2'];
                break;
            case 'x':
                $hsl = $_GET['bil1'] * $_GET['bil2'];
                break;
            case '-':
                $hsl = $_GET['bil1'] - $_GET['bil2'];
                break;
            case '/':
                $hsl = $_GET['bil1'] / $_GET['bil2'];
                break;
        }
        echo $hsl;
        $logKita = "{$_GET['history']} {$_GET['bil1']} {$_GET['operator']} {$_GET['bil2']} = {$hsl} <br />";
    }
    ?>
    <input type="hidden" name="history" 
    <?php 
        if(isset($_GET['submit']) && strlen($_GET['bil1'])&& strlen($_GET['bil2'])) {
            echo "value='$logKita'";
        }else {
            echo 'value=""';
        }
  ?> />
    <h2>Log perhitungan</h2>
    <?php  
    if(isset($_GET['submit']) && strlen($_GET['bil1'])&& strlen($_GET['bil2'])) {
        echo $logKita;
    }
    ?>
<button name="reset">Reset</button>
<?php 


?>
</form>