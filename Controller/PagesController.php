<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
use Classes\PHPExcel\IOFactory;

/**s
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {
   public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');
    public $uses = array("user_detail");

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
    
      public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
        $this->loadModel('Page');
          date_default_timezone_set('asia/kolkata');
    }
	public function index() { 
           
             if($this->request->is('post')){
                 
                                     $data = $this->request->data;
//                                     print_r($data);
//                                     die();
 
                 if(isset($_FILES['user_detail']['name']) && $_FILES['user_detail']['name'] ==0){
					$allowedExtensions = array("xls","xlsx","csv");
					$ext = pathinfo($_FILES['user_detail']['name'], PATHINFO_EXTENSION);
					if(in_array($ext, $allowedExtensions)) {
						$file_size = $data['user_detail']['size'] / 1024;
						if($file_size < 50) {
							$file = "uploads/".$_FILES['user_detail']['name'];
							$isUploaded = copy($_FILES['user_detail']['tmp_name'], $file);
                                                        if($isUploaded) {
								try {
									
									$objPHPExcel = PHPExcel_IOFactory::load($file);
								} catch (Exception $e) {
									die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME). '": ' . $e->getMessage());
								}
                                                               
                                                        
                                                        $file= $data['user_detail']['name']; 
                                                        $file= $data['user_detail']['mobile'];   
                                                        $file = $data['user_detail']['country'];
                                                        $this->user_detail->save($file);
                                                        return $this->redirect("/"); 
             }
       
}

}
             }
        }
}
}
