<?php

namespace Tests\ZendAccessManager\Authentication\User;

/**
 * Class AuthenticableUserTest
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Authentication\User
 */
class AuthenticableUserTest extends \PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters(){
        $user = new AuthenticableUser();
        $user->setUsername('lucas');
        $user->setPassword('12345');

        $this->assertEquals($user->getUsername(), 'lucas');
        $this->assertEquals($user->getPassword(), '12345');
    }
}