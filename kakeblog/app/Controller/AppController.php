<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
        'DebugKit.Toolbar',
        'Flash',
	    'Session',
		'Auth' => array(
            'loginRedirect' => array(
				'controller' => 'posts',
				'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
	
	//----------------------------------------------------------

    public function beforeFilter() {
        $this->Auth->allow('index', 'view','addd');
    }
	
	//----------------------------------------------------------
}
?>