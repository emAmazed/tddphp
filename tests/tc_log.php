<?php
require_once(dirname(__FILE__).'/simpletest/autorun.php');
require_once('../classes/log.php');

class TestOfLoggin extends UnitTestCase {
  function testFirstLogMessagesCreatesFileIfNonexistent() {
    @unlink(dirname(__FILE__).'/../temp/test.log');
    $log = new Log(dirname(__FILE__).'/../temp/test.log');
    $log->message('Should write this to a file');
    $this->assertTrue(file_exists(dirname(__FILE__).'/../temp/test.log'));
  }
}
?>
