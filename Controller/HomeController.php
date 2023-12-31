<?php

namespace Controller;

use src\Renderer;
use Model\Project;

class HomeController
{
    public function index(): Renderer
    {
        $project = new Project();
        $projects = $project->findByLast();

        return Renderer::make('home/index', compact('projects'));
    }
}