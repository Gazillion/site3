<?php

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_task')]
    public function list(TaskRepository $taskRepository): JsonResponse
    {
        $tasks = $taskRepository->findAll();

        $data = [];
        foreach ($tasks as $task) {
            $data[] = [
                'id' => $task->getId(),
                'title' => $task->getTitle(),
                'description' => $task->getDescription(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    
    #[Route('/task/{id}', name: 'task_show', methods: ['GET'])]
    public function show(Task $task): JsonResponse
    {
        $data = [
            'id' => $task->getId(),
            'title' => $task->getTitle(),
            'description' => $task->getDescription(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }
    
     /**
     * @Route("/tasks", name="task_create", methods={"POST"})
     */
    #[Route('/task', name: 'task_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $task = new Task();
        $task->setTitle($data['title']);
        $task->setDescription($data['description']);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($task);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task created!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/tasks/{id}", name="task_update", methods={"PUT"})
     */
    public function update(Request $request, Task $task): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $task->setTitle($data['title']);
        $task->setDescription($data['description']);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/tasks/{id}", name="task_delete", methods={"DELETE"})
     */
    public function delete(Task $task): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($task);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Task deleted!'], Response::HTTP_NO_CONTENT);
    }
}
