<?php

function hackathons_index() {
    echo render('navigation.php');
    echo render('hackathons/h-index.php');
}

function hackathons_show() {
    echo render('navigation.php');
    show_hackathon_page();
}