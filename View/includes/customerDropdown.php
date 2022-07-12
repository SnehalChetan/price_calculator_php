<?php
declare(strict_types=1);

/*$dsn='mysql:host=127.0.0.1;port=4306;dbname=pricecalcutatordatabase;';
$conn = new PDO($dsn, 'admin', 'admin1234');*/

/*$sql = "SELECT * FROM customer";
$all_customers = $conn->query($sql);*/
// print_r($customerList);
$customer = new CustomerLoader();
$customList = $customer->getCustomerList();

?>


<form method="POST">
    <label>Name of Customer:</label>
    <select name="Customer">
        <?php
        foreach ($customList as $customer):
           print_r($customer);
        ?>
        <option value="<?= $customer['id'] ?>"><?= $customer['firstname'] . ' ' . $customer['lastname'] ?>
        </option>-->

        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<br>