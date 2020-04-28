<?php
 
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
 
class CoursesController extends AppController {
 
    public function index(){
        $poststable = TableRegistry::get('Course');
        $this->set('courses', $poststable->find('all'));
    }
     
}
?>