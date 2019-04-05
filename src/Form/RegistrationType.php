<?php

namespace App\Form;

use App\Entity\Client;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, $this->getConfiguration("Nom","Nom"))
            ->add('prenom', TextType::class, $this->getConfiguration("Prénom","Prénom"))
            ->add('email', EmailType::class, $this->getConfiguration("Email", "Email"))
            ->add('hash', PasswordType::class, $this->getConfiguration("Mot de Passe","Mot de Passe"))
            ->add('passwordConfirm', PasswordType::class, $this->getConfiguration("Confirmation Mot de Passe","Confirmation Mot de Passe"))
            ->add('adresse', TextType::class, $this->getConfiguration("Adresse","Adresse"))
            ->add('codePostal', TextType::class, $this->getConfiguration("Code Postal","Code Postal"))
            ->add('telephone', TextType::class, $this->getConfiguration("Telephone","Telephone"))
            ->add('ville', TextType::class, $this->getConfiguration("Ville","Ville"))
            ->add('pays', TextType::class, $this->getConfiguration("Pays","Pays"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
