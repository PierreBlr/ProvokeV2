<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class UpdatePassword
{

    private $oldPassword;
    /**
     * @Assert\Length(min ="8", minMessage="Votre mot de passe doit comporter au moins 8 caractères")maxMessage="Votre mot de passe ne doit pas comporter plus de 10 caractères")
     * @Assert\Length(max ="10", maxMessage="Votre mot de passe ne doit pas comporter plus de 10 caractères")
     * @Assert\Regex(pattern="/^[a-zA-Z0-9\-\*]+$/", message="Votre mot de passe doit contenir un chiffre ou un caractère spécial")
     */
    private $newPassword;
    /**
     * @Assert\EqualTo(propertyPath="newPassword", message="Les champs doivent être identiques")
     */
    private $confirmPassword;

    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }

    public function setOldPassword(string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }
}
