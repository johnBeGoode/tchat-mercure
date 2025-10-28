<?php

// src/Controller/ChatController.php
namespace App\Controller;

use App\Entity\Message;
use App\Form\ChatFormType;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChatController extends AbstractController
{
    #[Route('/', name:'app_chat')]
    public function chat(Request $request, HubInterface $hub, EntityManagerInterface $em, MessageRepository $messageRepository): Response
    {
        $messages = $messageRepository->findAll();

        $message = new Message();
        $message->setSender($this->getUser());

        $form = $this->createForm(ChatFormType::class, $message);
        $emptyForm = clone $form;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $em->persist($message);
            $em->flush();

            $hub->publish(new Update(
                'chat',
                $this->renderView('chat/message.stream.html.twig', ['message' => $message])
            ));

            $form = $emptyForm;
        }

        return $this->render('chat/index.html.twig', [
            'form' => $form,
            'messages' => $messages
         ]);
    }
}
