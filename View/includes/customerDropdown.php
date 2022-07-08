<?php
declare(strict_types=1);

/*$dsn='mysql:host=127.0.0.1;port=4306;dbname=pricecalcutatordatabase;';
$conn = new PDO($dsn, 'admin', 'admin1234');*/

/*$sql = "SELECT * FROM customer";
$all_customers = $conn->query($sql);*/
print_r($customerList);
?>


<!--<form method="POST">
    <label>Name of Customer:</label>
    <select name="Customer">

        <?php
/*        while ($customer = $all_customers->fetch()){ */?>
            <option value="<?php /*echo $customer['id'] */?>"><?php /*echo $customer['firstname'] . ' ' . $customer['lastname'] */?>
            </option>
        <?php /*} */?>
    </select>
    <br>
    <input type="submit" value="submit" name="submit">
</form>-->
<br>