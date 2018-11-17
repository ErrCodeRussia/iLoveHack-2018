<?php

function hackathons_index() {
    echo render('main/navigation.php');
    echo render('hackathons/h-index.php');
}

function hackathons_show() {
    echo render('main/navigation.php');
    show_hackathon_page();
}