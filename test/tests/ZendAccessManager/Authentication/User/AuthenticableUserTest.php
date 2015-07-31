<?php

namespace Tests\ZendAccessManager\Authentication\User;

class AuthenticableUserTest extends \PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters(){
        $user = new AuthenticableUser();
        $user->setUsername('lucas');
        $user->setPassword('12345');
    }
}