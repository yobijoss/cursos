<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

use function PHPUnit\Framework\assertTrue;

class ValidateTest extends TestCase
{
  public function test_email()
  {
    $email = Validate::email("i@yobijos.com");
    $this->assertTrue($email);

    $email = Validate::email('sadfasdfasdf');
    $this->assertFalse($email);
  }

  public function test_url()
  {
    $url = Validate::url('https://platzi.com');
    $this->assertTrue($url);

    $url = Validate::url('platzi.com');
    $this->assertFalse($url);
  }

  public function test_password()
  {
    $pass = Validate::password('12335');
    $this->assertTrue($pass);

    $pass = Validate::password('41635456463515341654');
    $this->assertFalse($pass);
  }
}