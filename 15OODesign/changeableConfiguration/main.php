<?php

require __DIR__.'/../../vendor/autoload.php';

use OODesign\changeableConfiguration\Truncater;




$truncater = new Truncater();
$actual = $truncater->truncate('one two');
//$this->assertEquals('one two', $actual);
$actual = $truncater->truncate('one two', ['length' => 6]);
//$this->assertEquals('one tw...', $actual);
$actual = $truncater->truncate('one two', ['separator' => '.']);
//$this->assertEquals('one two', $actual);
$actual = $truncater->truncate('one two', ['length' => '3']);
//$this->assertEquals('one...', $actual);

$truncater = new Truncater(['length' => 3]);
$actual = $truncater->truncate('one two');
//$this->assertEquals('one...', $actual);
$actual = $truncater->truncate('one two', ['separator' => '!']);
//$this->assertEquals('one!', $actual);
$actual = $truncater->truncate('one two');
//$this->assertEquals('one...', $actual);

$actual = $truncater->truncate('one two', ['length' => 7]);
var_dump($actual);
