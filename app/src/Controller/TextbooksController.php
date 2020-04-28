<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class TextbooksController extends AppController
{

    public function index()
    {
        $this->set('textbooks', $this->Textbooks->find('all'));
    }

    public function view($id = null)
    {
        $textbook = $this->Textbooks->get($id);
        $this->set(compact('textbook'));

    }

}
