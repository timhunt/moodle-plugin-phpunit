<?php

global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

$CFG->dbtype    = '%%DBTYPE%%';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'moodle';
$CFG->dboptions = [];
$CFG->prefix = 'mdl_';

$CFG->wwwroot  = __DIR__ . 'http://localhost/';
$CFG->dataroot  = __DIR__ . '/moodledata';
$CFG->directorypermissions = 02777;

$CFG->phpunit_dataroot = __DIR__ . '/phpunit-moodledata';
$CFG->phpunit_prefix = 'phpunit_';

require_once(dirname(__FILE__) . '/lib/setup.php');
