<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\UpdateInfoType;
use App\Entity\UpdatePassword;
use App\Form\RegistrationType;
use App\Form\UpdateAdresseType;
use App\Form\UpdatePasswordType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AccountController extends AbstractController
{
    /**
     * @Route("/login", name="account_login")
     * 
     * @return Response
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();


        //dump($error);
        return $this->render('account/login.html.twig', [
            'hasError' => $error !== null,
            "username" => $username
        ]);
    }
    /**
     * Deconnexion
     * 
     * @Route("/logout", name="account_logout")
     * 
     * @return void
     */
    public function logout()
    { }

    /**
     * @Route("/register", name="account_register")
     * 
     * @return Response
     */
    public function register(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $client = new Client();
        $form = $this->createForm(RegistrationType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($client, $client->getHash());
            $client->setHash($hash);

            $manager->persist($client);
            $manager->flush();

            dump($client);

            $this->addFlash('success', 'Votre compte à bien été enregistré');

            return $this->redirectToRoute('home');
        }

        return $this->render('account/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/password", name="password-update")
     * @IsGranted("ROLE_USER")
     * @return Response
     */
    public function updatePassword(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $updatePassword = new UpdatePassword();

        $client = $this->getUser();

        $form = $this->createForm(UpdatePasswordType::class, $updatePassword);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Vérification du oldPassword dans le formulaire
            if (!password_verify($updatePassword->getOldPassword(), $client->getHash())) {
                //Gestion de l'erreur
                $form->get('oldPassword')->addError(new FormError("Ce n'est pas votre mot de passe actuel"));
            } else {
                $newPassword = $updatePassword->getNewPassword();
                $hash = $encoder->encodePassword($client, $newPassword);

                $client->setHash($hash);

                $manager->persist($client);
                $manager->flush();

                $this->addFlash('success', 'Le mot de passe a bien été modifié');

                return $this->redirectToRoute('home');
            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/dashboard", name="account_dashboard")
     * @IsGranted("ROLE_USER")
     * @return Response
     */
    public function dashboard()
    {
        return $this->render('account/dashboard.html.twig', [
            'client' => $this->getUser()
        ]);
    }
    /**
     * @Route("/info", name="account_profil")
     * @IsGranted("ROLE_USER")
     * @return Response
     */
    public function profil(Request $request, ObjectManager $manager)
    {
        $client = $this->getUser();

        $form = $this->createForm(UpdateInfoType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($client);
            $manager->flush();

            $this->addFlash('success', 'Le profil à été modifié');
        }

        return $this->render('account/info.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/adresses", name="account_adresses")
     * @IsGranted("ROLE_USER")
     * @return Response
     */
    public function adresses(Request $request, ObjectManager $manager)
    {

        $client = $this->getUser();

        $form = $this->createForm(UpdateAdresseType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($client);
            $manager->flush();

            $this->addFlash('success', 'Votre adresse à été modifié');
        }

        return $this->render('account/adresses.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
