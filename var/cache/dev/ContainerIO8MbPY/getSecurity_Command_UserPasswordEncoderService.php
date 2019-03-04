<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.command.user_password_encoder' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Command\\UserPasswordEncoderCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactory.php';

$this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? ($this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory([]))), []);

$instance->setName('security:encode-password');

return $instance;
