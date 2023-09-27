<?php

function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
} // End show Function
function check_error($value)
{
    if (isset($_POST['sub_signup']) || isset($_POST['login'])) {
        if (isset($_SESSION['error'][$value]) && !empty($_SESSION['error'][$value])) {
            echo $_SESSION['error'][$value];
        } // end if 
        if (!empty($_SESSION['a']) && isset($_SESSION['a']) && $value  == 1) {
            echo $_SESSION['a'];
        }
    }
}
