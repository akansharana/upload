l̥<?php
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

/**s
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');
	public $uses = array("Page");

	/**
	 * Displays a view
	 *
	 * @return void
	 * @throws NotFoundException When the view file could not be found
	 *    or MissingViewException in debug mode.
	 */
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
		$this->loadModel('Page');
		date_default_timezone_set('asia/kolkata');
	}

	public function index()
	{
		if ($this->request->is('post')) {
			$data = $this->request->data;

			if (isset($data['user_detail'])) {
				$allowedExtensions = array("xls", "xlsx", "csv");
				$ext               = pathinfo($data['user_detail']['name'], PATHINFO_EXTENSION);
				if (in_array($ext, $allowedExtensions)) {
					$file_size = $data['user_detail']['size'] / 1024;
					if ($file_size < 50) {
						$file       = WWW_ROOT.'uploads'.DS.rand(10000, 99999).'_'.$data['user_detail']['name'];
						$isUploaded = copy($data['user_detail']['tmp_name'], $file);
						if ($isUploaded) {
							try {
								App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'Classes/PHPExcel/IOFactory.php'));

								$objReader   = PHPExcel_IOFactory::createReader(strtoupper($ext));
								$objPHPExcel = $objReader->load($file);
								$worksheet   = $objPHPExcel->getActiveSheet();
								$toStore     = $keys = array();
								$index       = 0;
								foreach ($worksheet->getRowIterator() as $r => $row) {
									$cellIterator = $row->getCellIterator();
									$cellIterator->setIterateOnlyExistingCells(false);
									foreach ($cellIterator as $c => $cell) {
										if (!is_null($cell)) {
											if ($r === 1) {
												$keys[$c] = $cell->getValue();
											} else {
												$toStore[$index % count($keys)][$keys[$c]] = $cell->getValue();
											}
										}
									}
									$index++;
								}
								$this->Page->saveAll($toStore);

								return $this->redirect("/");
							} catch (Exception $e) {
								die('Error loading file "'.pathinfo($file, PATHINFO_BASENAME).'": '.$e->getMessage());
							}
						}
					}
				}
			}
		}
	}
}
