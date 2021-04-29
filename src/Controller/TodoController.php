<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class TodoController
 * @package App\Controller
 * @Route("todo")
 */
class TodoController extends AbstractController
{
    /**
     * @Route("/", name="todo")
     */
    public function index(SessionInterface $session): Response
    {
        if(! $session->has('todos') || sizeof($session->get('todos'))==0) {
            $todos = [
                'lundi' => 'HTML',
                'mardi' => 'CSs',
                'mercredi' => 'Js',
            ];
            $session->set('todos', $todos);
            $this->addFlash('info', "Bienvenu dans votre plateforme de gestion des todos");
        }
        return $this->render('todo/index.html.twig');
    }

    /**
     * @Route("/add", name="addTodo")
     */
    public function addTodo(SessionInterface $session,Request $request) {
        $name = $request->query->get('name');
        $content = $request->query->get('content');
        // Vérifier que ma session contient le tableau de todo
        if (!$session->has('todos')) {
            //ko => messsage erreur + redirection
            $this->addFlash('error', "La liste des todos n'est pas encore initialisée");
        } else {
            //ok
            // Je vérifie si le todo existe
            $todos = $session->get('todos');
            if (isset($todos[$name])) {
                //ko => messsage erreur + redirection
                $this->addFlash('error', "Le todo $name existe déjà");
            } else {
                //ok => j ajoute et je redirige avec message succès
                $todos[$name] = $content;
                $session->set('todos', $todos);
                $this->addFlash('success', "Le todo $name a été ajouté avec succès");
            }
        }
        return $this->redirectToRoute('todo');
    }
    /**
     * @Route("/delete/{name}", name="deleteTodo")
     */
    public function deleteTodo($name, SessionInterface $session){
        if (!$session->has('todos')) {
            //ko => messsage erreur + redirection
            $this->addFlash('error', "La liste des todos n'est pas encore initialisée");
        } else {
            //ok
            // Je vérifie si le todo existe
            $todos = $session->get('todos');
                //ko => messsage erreur + redirection
                unset($todos[$name]);
                $session->set('todos',$todos);
                $this->addFlash('success', "Le todo $name est supprimé avec succés");
            
        }
        return $this->redirectToRoute('todo');
    }
    /**
     * @Route("/modify/{name}/{content}", name="modifyTodo")
     */
    public function modifyTodo($name,$content, SessionInterface $session){
        if (!$session->has('todos')) {
            //ko => messsage erreur + redirection
            $this->addFlash('error', "La liste des todos n'est pas encore initialisée");
        } else {
            //ok
            // Je vérifie si le todo existe
            $todos = $session->get('todos');
            if (isset($todos[$name]) && (sizeof($todos)>0)) {
                //ko => messsage erreur + redirection
                $todos[$name] = $content;
                $session->set('todos',$todos);
                $this->addFlash('success', "Le todo $name est modifié avec succés");
            } else {
                //ok => j ajoute et je redirige avec message succès
                
                $this->addFlash('error', "Le todo $name n'existe pas");
            }
        }
        return $this->redirectToRoute('todo');
    }
    /**
     * @Route("/clear", name="clear")
     */
    public function clear(SessionInterface $session){
        $session->clear('todos');
        $this->addFlash('success', "Le todolist reset");
        return $this->redirectToRoute('todo');
    }
}
