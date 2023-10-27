<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{

    public function testIsTrue()
    {
        $user = new User();
        
        $user->setEmail('true@test.com')
                ->setPrenom('Prenom')
                ->setNom('Nom')
                ->setAPropos('A propos')
                ->setPassword('Password')
                ->setInstagram('Instagram');
        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'Prenom');
        $this->assertTrue($user->getNom() === 'Nom');
        $this->assertTrue($user->getAPropos() === 'A propos');
        $this->assertTrue($user->getPassword() === 'Password');
        $this->assertTrue($user->getInstagram() === 'Instagram');

    }


public function testIsFalse()
{
    $user = new User();
        
    $user->setEmail('true@test.com')
            ->setPrenom('Prenom')
            ->setNom('Nom')
            ->setAPropos('A propos')
            ->setPassword('Password')
            ->setInstagram('Instagram');
    $this->assertFalse($user->getEmail() === 'false@test.com');
    $this->assertFalse($user->getPrenom() === 'false');
    $this->assertFalse($user->getNom() === 'false');
    $this->assertFalse($user->getAPropos() === 'false');
    $this->assertFalse($user->getPassword() === 'false');
    $this->assertFalse($user->getInstagram() === 'false');

}

public function testIsEmpty()
{
    $user = new User();
        
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom() );
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getInstagram());
}

}