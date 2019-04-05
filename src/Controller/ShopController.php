<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commande;
use App\Entity\LignePanier;
use App\Entity\Panier;
use App\Entity\Mercanet;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
     * @Route("/shopping/cart", name="shopping_cart")
     */
    public function cart(ObjectManager $manager, Request $request)
    {

        $id = $request->get("id");
        $qtt = $request->get("qtt");

        $cart = $this->get("session")->get("cart");

        if ($cart === null) {
            $cart = array();
        }

        /*if (!empty($cart)) {
            if (!array_key_exists($id, $cart)) {
                $article = $this->getDoctrine()->getRepository(Article::class)->find($request->get("id"));
                $cart[$id] = array("article" => $article, "qtt" => $qtt);
            } else {
                $cart[$id]["qtt"] += $qtt;
            }
        }*/


        $this->get("session")->set("cart", $cart);

        return $this->render('shop/shopping-cart.html.twig');
    }
    /**
     * @Route("/shopping/confirm", name="shopping_confirm")
     * @IsGranted("ROLE_USER")
     */
    public function confirmcart(ObjectManager $manager, Request $request)
    {
        $cart = $this->get("session")->get("cart");

        $panier = new Panier();

        $totalpanier = 0;

        foreach ($cart as $article_id => $ligne) {
            $lp = new LignePanier();
            $art = $manager->getRepository(Article::class)->find($article_id);
            $lp->setArticle($art);
            $lp->setQuantite($ligne["qtt"]);
            $totalpanier += $art->getPrix() * $ligne["qtt"];
            $panier->addLignePanier($lp);
        }


        $commande = new Commande();
        $commande->setPanier($panier);
        $commande->setClient($this->getUser());
        $manager->persist($commande);

        $manager->flush();

        return $this->render('shop/shopping-confirm.html.twig', [
            'nb_articles' => count($panier->getLignePaniers()),
            'total' => $totalpanier
        ]);
    }

    /**
     * @Route("/shopping/commande-ok", name="commande_ok")
     * @IsGranted("ROLE_USER")
     */
    public function succes()
    {
        return $this->render('shop/commande-ok.html.twig', []);
    }
    /**
     * @Route("/shopping/commande-echec", name="commande_echec")
     * @IsGranted("ROLE_USER")
     */
    public function echec()
    {
        return $this->render('shop/commande-echec.html.twig', []);
    }

    public function mercanet()
    {
        // Initialisation de la classe Mercanet avec passage en parametre de la cle secrete
        $paymentRequest = new Mercanet('S9i8qClCnb2CZU3y3Vn0toIOgz3z_aBi79akR30vM9o');

        // Indiquer quelle page de paiement appeler : TEST ou PRODUCTION 
        $paymentRequest->setUrl(Mercanet::TEST);

        // Renseigner les parametres obligatoires pour l'appel de la page de paiement 
        $paymentRequest->setMerchantId('211000021310001');
        $paymentRequest->setKeyVersion('1');
        $paymentRequest->setTransactionReference("test" . rand(100000, 999999));
        $paymentRequest->setAmount(100);
        $paymentRequest->setCurrency('EUR');
        if (empty($_SERVER["HTTPS"])) {
            $http = "http://";
        } else {
            $http = "https://";
        }
        $urlReturn = reponse();
        $paymentRequest->setNormalReturnUrl($urlReturn);

        // Renseigner les parametres facultatifs pour l'appel de la page de paiement 
        $paymentRequest->setLanguage('fr');
        // $paymentRequest->setCustomerContactEmail('assistance.mercanet@bnpparibas.com');
        // ...

        // Verification de la validite des parametres renseignes
        $paymentRequest->validate();
    }

    public function reponse()
    {
        // Initialisation de la classe Mercanet avec passage en parametre de la cle secrete
        $paymentResponse = new Mercanet('S9i8qClCnb2CZU3y3Vn0toIOgz3z_aBi79akR30vM9o');

        $paymentResponse->setResponse($_POST);

        if ($paymentResponse->isValid() && $paymentResponse->isSuccessful()) {
            // Traitement pour les paiements valides
            return $this->render('shop/commande-ok.html.twig');
        } else {
            // Traitement pour les paiements en echec
            return $this->render('shop/commande-echec.html.twig');
        }
    }
}
