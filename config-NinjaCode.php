/* This is config-NinjaCode.php - Manual Creation  */

/* Download IFSC Website Script https://ninjacode.tech/download-ifsc-webiste-script/ */

<?php

/*==============================
    @part config-NinjaCode.php
    @package NinjaCode IFSC Code Script
    @version v2.0
    @author MohammadSharfuddin
    @organization NinjaCode.tech
    @web www.NinjaCode.tech
==============================*/

// -- Basic setup

$homeUrlNinjaCode = "URL"; // Path where this script is installed without traling slash (no slash at the end)
$homepageTitle = "IFSC Directory - Search IFSC/MICR Code"; // Title for pages

// -- Database setup

$databaseHost = "HOST"; // Database host, usually 'localhost'
$databaseUser = "USERNAME"; // Database user
$databasePwd = "PASSWORD"; // Database password
$databaseName = "DATABASE-NAME"; // Database name

// ---- to edit pages title, description and keywords please edit `header.php` file under `parts` folder

// -- Add $homepageTitle value to page's title at the end
$appendHomepageTitle = false; // false = off; true = on

// -- Show suggestions like banks, states, districts, branches when not selected on homepage
$showSuggestions = true; // false = off; true = on

// -- Search page
$numberOfRecordsPP = 20; // total number of records to show per page on search page
$showBankNamesDropdown = true; // show bank names in a dropdown with the search field

// -- Google site verification code
$googleSVC = ""; // if empty then meta tag will not be included

// -- Set default timezone to India (GMT+5:30)
date_default_timezone_set("Asia/Kolkata");

// -- Log errors, if any, in error_log file
error_reporting(0); // 0 = off; 1 = on

// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
// --- DO NOT EDIT FROM BELOW ---
// ------------------------------------------------------------------------
// ------------------------------------------------------------------------

// -- Database connection
$dbNinjaCode = mysqli_connect($databaseHost, $databaseUser, $databasePwd, $databaseName);

if(mysqli_connect_errno()) {
    echo "Database error! Please contact tech at www.NinjaCode.tech";
    exit;
}

require 'functions-NinjaCode.php';

?>
