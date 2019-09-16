<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class ApiController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index() 
    {
        return $this->response->withType('application/json')
            ->withStringBody(json_encode([
                'message' => 'Hello PHP World!'
            ]));
    }

    public function products() 
    {
        return $this->response->withType('application/json')
            ->withStringBody(json_encode([
                'products' => [
                    ['id' => 1, 'name' => 'Product n.1'],
                    ['id' => 2, 'name' => 'Product n.2'],
                    ['id' => 3, 'name' => 'Product n.3'],
                    ['id' => 4, 'name' => 'Product n.4'],
                    ['id' => 5, 'name' => 'Product n.5'],
                    ['id' => 6, 'name' => 'Product n.6'],
                    ['id' => 7, 'name' => 'Product n.7'],
                    ['id' => 8, 'name' => 'Product n.8'],
                    ['id' => 9, 'name' => 'Product n.9'],
                    ['id' => 10, 'name' => 'Product n.10']
                ]
            ]));
    }

    public function product($id)
    {
        return $this->response->withType('application/json')
            ->withStringBody(json_encode([
                'product' => [
                    'id' => $id, 
                    'name' => 'Product n.' . $id,
                    'description' => 'Lorem ipsum, bla bla'
                ]
            ]));
    }
}