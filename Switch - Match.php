<?php
$paymentStatus = 1;
    switch($paymentStatus){
        case 1:
            echo 'Paid';
            break;
        case 2:
        case 3:
            echo 'Payment Declined';
            break;
        case 0:
            echo'Payment Pending';
            break;
        default:
            echo 'Unknown Payment Status';
    }
    echo '<br/>';

    $paymentStatusDisplay = match($paymentStatus){
        1=>'Paid',
        2,3=>'Payment Declined',
        0=>'Payment Pending'
    };

    echo $paymentStatusDisplay;