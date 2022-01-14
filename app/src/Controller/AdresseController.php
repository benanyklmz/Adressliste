<?php

namespace App\Controller;

use Doctrine\DBAL\Types\TextType;
use Doctrine\DBAL\Types\Type;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Twig\Node\TextNode;
use App\Entity\Adresse;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\ManagerRegistry;


class AdresseController extends AbstractController
{
   
 
    #[Route('/list', name: 'adresse')]
    public function index(EntityManagerInterface $em): Response
    {

        $productRepository = $em->getRepository(Adresse::class);
        $adresses = $productRepository->findAll();


        return $this->render(
            'adresse/list.html.twig',[
                'adresses' => $adresses
                ]);
        
        
    }

    #[Route('/new', name: 'new')]
    public function createNew(EntityManagerInterface $em, Request $request)
    {
            $adress = new Adresse();
            $form = $this->createFormBuilder($adress)
            ->add('Vorname')
            ->add('Nachname')
            ->add('Strasse')
            ->add('Hausnummer')
            ->add('PLZ')
            ->add('Ort')
            ->add('Telefonnumer')
            ->add('email_adresse')
            ->add('Speichern', SubmitType::class)
            ->getForm();

            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                $data = $form->getData();
                // $adress = new Adresse();
                // $adress->setVorname($data["Vorname"]);
                // $adress->setNachname($data["Nachname"]);
                // $adress->setStrasse($data["Strasse"]);
                // $adress->setHausnummer($data["Hausnummer"]);
                // $adress->setPlz($data["PLZ"]);
                // $adress->setOrt($data["Ort"]);
                // $adress->setEmailAdresse($data["email_adresse"]);
                // $adress->setTelefonnumer($data["Telefonnumer"]);
                
            
            
                $em->persist($data);
                $em->flush();
                return $this->redirect('/list');
                
            }
            
            return $this->render('adresse/form.html.twig', [
            'user_form' => $form->createView()
            ]);
        }



        #[Route('/edit/{id}', name: 'edit')]
        public function edit(EntityManagerInterface $em, Request $request, String $id)
        {
            
            $productRepository = $em->getRepository(Adresse::class);
            $adress = $productRepository->find($id);
                


                $form = $this->createFormBuilder($adress)
                ->add('Vorname')
                ->add('Nachname')
                ->add('Strasse')
                ->add('Hausnummer')
                ->add('PLZ')
                ->add('Ort')
                ->add('Telefonnumer')
                ->add('Email_Adresse')
                ->add('Speichern', SubmitType::class)
                ->getForm();
    
                $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $data = $form->getData();

                    $em->merge($data);
                    $em->flush();
                    return $this->redirect('/list');
                    
                }
                return $this->render('adresse/form.html.twig', [
                'user_form' => $form->createView()
                ]);
            }



        #[Route('/delete/{id}', name: 'delete')]
        public function delete(EntityManagerInterface $em, Request $request, String $id)
        {
            
            $productRepository = $em->getRepository(Adresse::class);
            $adress = $productRepository->find($id);

            $em->remove($adress);
            $em->flush();
            return $this->redirect('/list');
        }     

}