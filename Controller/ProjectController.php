<?php

namespace Controller;

use src\Renderer;
use Model\Project;


class ProjectController
{
    public function index(): Renderer
    {
        $project = new Project();
        $projects = $project->all();

        return Renderer::make('project/index', compact('projects'));
    }
}