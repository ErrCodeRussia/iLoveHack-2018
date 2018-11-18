<?php

function users_index() {
    echo render('main/navigation.php');
    echo render('users/u-index.php');
}

function users_reg() {
    echo render('main/navigation.php');
    echo render('users/u-reg.php');
}

function users_auth() {
    echo render('main/navigation.php');
    echo render('users/u-auth.php');
}

function users_userpage() {
    echo render('main/navigation.php');
}