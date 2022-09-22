<?php
    $neg_cnt = 0;
    $pos_cnt = 0;
    $zero_cnt = 0;
    do {
        $number = (int)readline("Enter the (Positive, Negative, Zero) number: ");
        if ($number > 0)
            $pos_cnt++;
        elseif ($number < 0)
            $neg_cnt++;
        else
            $zero_cnt++;
    $choice = readline("Want more(y/n).");
    } while ($choice == 'y' || $choice == 'Y');
    echo "Negative: $neg_cnt\nPositive: $pos_cnt\nZeroes: $zero_cnt";
?>