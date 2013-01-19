<?php

/*
    An ugly test for the String class
*/

// TODO FIXME - Add better tests with PHPUnit

// dependancies
require('../src/classes/String.class.php');
require('classes/Test.class.php');

// init String
$start_string = "java4php";
$String = new String($start_string);

// test toString
Test::Create('toString()')->assertEquals((string)$String, $start_string);

// test length
Test::Create('length')->assertEquals($String->length(), 8);

