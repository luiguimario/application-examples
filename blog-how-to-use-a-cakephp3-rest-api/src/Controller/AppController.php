<?php
namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller {

    use \Crud\Controller\ControllerTrait;

    public $components = [
        'RequestHandler',
        'Crud.Crud' => [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete'
            ],
            'listeners' => [
                'Crud.Api',
                'Crud.ApiPagination',
                'Crud.ApiQueryLog'
            ]
        ],
        'Paginator' => [
            'page' => 1,
            'limit' => 10,
            'maxLimit' => 100,
            'fields' => [
                'id', 'name', 'description'
            ],
            'sortWhitelist' => [
                'id', 'name', 'description'
            ]
        ]
    ];
}
