<form action="copyAritmatik.php" method="GET">
    <input type="number" name="bil1" <?php if(isset($_GET['bil1'])) echo "value='{$_GET['bil1']}'";  ?>/>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="bil2" <?php if(isset($_GET['bil2'])) echo "value='{$_GET['bil2']}'";  ?> />
    <input type="submit" value="=" name="submit" />

    <?php
    if(isset($_GET['submit']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
        switch($_GET['operator']) { 
            case '+':
                $hsl = $_GET['bil1'] + $_GET['bil2'];
                break;
            case '-':
                $hsl = $_GET['bil1'] - $_GET['bil2'];
                break;
            case 'x':
                $hsl = $_GET['bil1'] * $_GET['bil2'];
                break;
            case '/':
                $hsl = $_GET['bil1'] / $_GET['bil2'];
                break;
        }
        echo $hsl;
        $theLog = "{$_GET['log']} {$_GET['bil1']} {$_GET['operator']} {$_GET['bil2']} = {$hsl} <br />";
    }
    ?>

<input type="hidden" name="log" 
    <?php
    if(isset($_GET['submit']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
        echo "value='{$theLog}'";
    }else {
        echo "value=''";
    }
    ?>
/>
<h2>Log perhitungan</h2>
<?php
if(isset($_GET['submit']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
    echo $theLog;
}

?>


</form>
