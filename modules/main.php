<?php

function main_index() {
    echo render('main/navigation.php');
    echo render('main/heading.php');
    echo render('main/hackatone.php');
    echo render('main/arrow.php');
    echo render('main/advantages.php');
    echo render('main/action.php');
    echo render('main/ilovehack.php');
    echo render('main/footer.php');
}

function teams_index() {
    echo render('main/navigation.php');
    echo render('team-list/teams-list.php');
}

function contacts_index() {
    echo render('main/navigation.php');
    echo "contacts page";
}