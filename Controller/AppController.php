<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
      var $uses = array('Package','MemberOptedPlan','User','GeetPuchaseHistory','GeetPurchaseByCustomer','UserTeamMaster');
    public $components = array(
       		
    'Session',
    'Auth' => array(
        'loginRedirect' => array('controller' => 'pages', 'action' => 'dashboard'),
        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
        'authError' => 'You must be logged in to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.'
 
    ),'Email', 'Paginator');
 
// only allow the login controllers only
public function beforeFilter() {
  // die;
 
  $this->Auth->allow('productdetail','user_detail','productdetailarray','cust_fname_lname','user_fname_lname');
  
   
	     
   
}
      public function user_detail($id) {
        if (isset($id) && $id != '') {
            $Userdetail = $this->User->find('first', array(
                'conditions' => array('User.genex_rec_id' => $id)
            ));
            return $Userdetail;
        }
    }
    
     public function cust_detail($id) {
        if (isset($id) && $id != '') {
            $Userdetail = $this->User->find('first', array(
                'conditions' => array('User.id' => $id)
            ));
            return $Userdetail;
        }
    }
    
     public function user_detail_rec_id($id) {
        if (isset($id) && $id != '') {
            $Userdetail = $this->User->find('first', array(
                'conditions' => array('User.id' => $id)
            ));
           return $Userdetail['User']['fname']." ".$Userdetail['User']['lname'];
        }
    }
    
  public function user_fname_lname($id) {
        if (isset($id) && $id != '') {
            $Userdetail = $this->User->find('first', array(
                'conditions' => array('User.genex_rec_id' => $id)
            ));
            return $Userdetail['User']['fname']." ".$Userdetail['User']['lname'];
        }
    }
    
      public function cust_fname_lname($id) {
        if (isset($id) && $id != '') {
            $Userdetail = $this->GeetPurchaseByCustomer->find('first', array(
                'conditions' => array('GeetPurchaseByCustomer.id' => $id)
            ));
           return $Userdetail['GeetPurchaseByCustomer']['fname']." ".$Userdetail['GeetPurchaseByCustomer']['lname'];
        }
    }

      public function UserTeamMasterList($id) {
        if (isset($id) && $id != '') {
            $teamdetail = $this->UserTeamMaster->find('first', array(
                'conditions' => array('UserTeamMaster.id' => $id)
            ));
            return $teamdetail['UserTeamMaster']['GroupName'];
        }
    }
    
  public function productdetail($id) {
        if (isset($id) && $id != '') {
            $productdetail = $this->Package->find('first', array(
                'conditions' => array('Package.id' => $id)
            ));
	//    print_r($productdetail); die;
            return $productdetail['Package']['name'];
        }
    }
    
  public function productdetailarray($id) {
        if (isset($id) && $id != '') {
            $productdetailarray = $this->Package->find('first', array(
                'conditions' => array('Package.id' => $id)
            ));
            return $productdetailarray;
        }
    }
    
  
    
    
    function sendMail($to, $cc, $subject, $template, $from, $params = array(), $attachmentFile = array(), $layout = 'default') {
        App::import('Component', 'Email');
        $Email = new CakeEmail();
        $Email->config('smtp');
        $Email->emailFormat('both');
        $Email->to($to);
        $Email->cc($cc);
        $Email->subject($subject);
        $Email->replyTo($from);
        $Email->from($from);

        $Email->viewVars($params);
        if (!empty($attachmentFile))
            $Email->attachments($attachmentFile);
        $Email->template($template); // note no '.ctp'
        $Email->send();
    }
       function sendMailwithoutcc($to,$subject, $template, $from, $params = array(), $attachmentFile = array(), $layout = 'default') {
        App::import('Component', 'Email');
        $Email = new CakeEmail();
        $Email->config('smtp');
        $Email->emailFormat('both');
        $Email->to($to);
        $Email->subject($subject);
        $Email->replyTo($from);
        $Email->from($from);

        $Email->viewVars($params);
        if (!empty($attachmentFile))
            $Email->attachments($attachmentFile);
        $Email->template($template); // note no '.ctp'
        $Email->send();
    }
    
}

    
    
    