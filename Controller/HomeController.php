<?php

namespace Controller;

use src\Renderer;
use Model\Project;

class HomeController
{
    public function index(): Renderer
    {
        $project = new Project();
        $projects = $project->all();


        foreach($projects as $projet){
            var_dump($projet);
        }

        return Renderer::make('home/index', compact('projects'));
    }
}