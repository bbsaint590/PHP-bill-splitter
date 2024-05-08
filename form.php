<?php

if (isset($_POST['NumberofPeople']) && isset($_POST['BillAmount']) && isset($_POST['tip'])) {
    $number = (float)$_POST['NumberofPeople'];
    $bill = (float)$_POST['BillAmount'];
    $tip = (float)$_POST['tip'];

    function error($number, $bill, $tip) {
        if ($number <= 0 || $bill <= 0 || $tip <= 0) {
            echo "error, missing information!";
            return true;
        } else {
            echo "Thank you!";
            echo '<br>';
            return false;
        }
    }

    if (error($number, $bill, $tip)) {
        exit; //could just use return here.
    }

    $tip_amount = $bill * ($tip / 100);
    $final_bill = $bill + $tip_amount;
    $amount = $final_bill / $number;

    echo "Your party has $number people and your bill is £$bill.";
    echo '<br>';
    echo "The tip amounts to £$tip_amount.";
    echo '<br>';
    echo "Each person will need to pay £$amount.";
}
?>

