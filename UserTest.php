<?php
require_once "User.php";
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    public function testTalk() {
        $user = new User();
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}