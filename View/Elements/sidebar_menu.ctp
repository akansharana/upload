<?php
//echo $userdetail['User']['role_rec_id'];die;
//
// print_r($userdetail); die;
?>
<?php

          if($userdetail['User']['role_rec_id']==2 || $userdetail['User']['role_rec_id']==3){

          ?>
<ul class="nav">
  <li class="nav-item nav-profile">
    <a href="#" class="nav-link">
      <div class="nav-profile-image">
        <img
          src="<?php echo BASEURL; ?>img/profile/<?php echo $userdetail['User']['profile_img']?$userdetail['User']['profile_img']:'user.png';?>"
          alt="profile">
        <span class="login-status online"></span>
        <!--change to offline or busy as needed-->
      </div>
      <div class="nav-profile-text d-flex flex-column">
        <span
          class="font-weight-bold mb-2"><?php echo $userdetail['User']['fname']." ".$userdetail['User']['lname']; ?></span>
        <span class="text-secondary text-small"><?php echo $userdetail['User']['username']; ?></span>
      </div>
      <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo BASEURL; ?>users/dashboard">
      <span class="menu-title">Dashboard</span>
      <i class="mdi mdi-home menu-icon"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo BASEURL; ?>users/goforliveaccount">
      <span class="menu-title">Go For Live Account</span>
      <i class="mdi mdi-account-settings-variant menu-icon"></i>
    </a>
  </li>
  
    <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#page-layouts1" aria-expanded="false" aria-controls="page-layouts">
      <span class="menu-title">Profile</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-account-circle menu-icon"></i>
    </a>
    <div class="collapse" id="page-layouts1">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/profile">My Profile</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/signup">Complete Your Profile</a></li>
      </ul>
    </div>
  </li>
  
  
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
      <span class="menu-title">Doc Locker</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-image-area-close menu-icon"></i>
    </a>
    <div class="collapse" id="page-layouts">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>docs/uploaddocs">Upload Document</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>docs/doclist">All Document</a></li>
      </ul>
    </div>
  </li>
  <?php

          if($userdetail['User']['role_rec_id']==2){

          ?>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Make a Request</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-file-import menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
       <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/deposit_request_to_admin">Deposit
            Request to admin</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/withdraw_request">Withdraw
            Request to admin</a></li>
      </ul>
    </div>
  </li>
  <?php
	  }
	  ?>
   <?php

          if($userdetail['User']['role_rec_id']==3){

          ?>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Make a Request</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-file-import menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
       <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/deposit_request_to_president">Deposit
            Request to president</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/withdraw_request">Withdraw
            Request to admin</a></li>
      </ul>
    </div>
  </li>
  <?php
	  }
	  ?>
  
    <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">My Transaction</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-cash-multiple menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic9">
      <ul class="nav flex-column sub-menu">
<?php

          if($userdetail['User']['role_rec_id']==3){

          ?>
  <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/deposit_history_of_associate">Deposit
            Reports</a></li>
	    
	<?php
	  }
	  if($userdetail['User']['role_rec_id']==2){
	?>
	      <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/deposit_history_of_admin">Deposit
            History</a></li>
	    <?php
	  }
	  ?>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/withdraw_history">Withdraw
            Reports</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/wallet_reports">Wallet Report </a>
        </li>
	      <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/income_history">Income Report </a>
        </li>
		      <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/cabinet_package_detail">My Packages Detail </a>
        </li>
	





      </ul>
    </div>
  </li>
  
  
<?php

          if($userdetail['User']['role_rec_id']==2){

          ?>
 <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Cabinet</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-account-multiple menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic1">
      <ul class="nav flex-column sub-menu">
        
	  <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/wallet_reports_all">Cabinet Wallet Report </a>
        </li>
	<li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/cabinet_income_report">Cabinet Income Report </a>
        </li>
	        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/fund_request">Received Request for fund
            </a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/cabinat_report">Fund Distribution Reports
            </a></li>
	        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/cabinet_packages_reports">Cabinet Packages detail
            </a></li>
      </ul>
    </div>
  </li>
  <?php
	  }
	  ?>
  

  <?php

          if($userdetail['User']['role_rec_id']==2){

          ?>
	
  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Team" aria-expanded="false" aria-controls="page-layouts">
              <span class="menu-title">Team</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-apps menu-icon"></i>
            </a>
            <div class="collapse" id="Team">
              <ul class="nav flex-column sub-menu">
                <!--li class="nav-item"> <a class="nav-link" href="<?php// echo BASEURL; ?>users/mydirectreferal">My Direct</a></li-->
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/mydirectreferal">My Team</a></li>
                <!--li class="nav-item"> <a class="nav-link" href="<?php //echo BASEURL; ?>users/genealogy">
                    Genealogy</a></li-->
              </ul>
            </div>
          </li>
	<?php
	
	  }
	  ?>
	  
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#Ticket" aria-expanded="false" aria-controls="page-layouts">
      <span class="menu-title">My Ticket</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-assistant menu-icon"></i>
    </a>
    <div class="collapse" id="Ticket">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>tickets/new_ticket">New Ticket</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>tickets/pending_ticket">Pending Ticket</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>tickets/closed_ticket">Closed Ticket</a>
        </li>

      </ul>
    </div>
  </li>


 <li class="nav-item">
    <a class="nav-link" href="<?php echo BASEURL; ?>Utilityactions/utility">
      <span class="menu-title">Utility</span>
      <i class="mdi mdi-account-settings-variant menu-icon"></i>
    </a>
  </li>

</ul>

<?php
	  }
	  if($userdetail['User']['role_rec_id']==1){
	  
	      ?>
<ul class="nav">
  <li class="nav-item nav-profile">
    <a href="#" class="nav-link">
      <div class="nav-profile-image">
        <img
          src="<?php echo BASEURL; ?>img/profile/<?php echo $userdetail['User']['profile_img']?$userdetail['User']['profile_img']:'user.png';?>"
          alt="profile">
        <span class="login-status online"></span>
        <!--change to offline or busy as needed-->
      </div>
      <div class="nav-profile-text d-flex flex-column">
        <span
          class="font-weight-bold mb-2"><?php echo $userdetail['User']['fname']." ".$userdetail['User']['lname']; ?></span>
        <span class="text-secondary text-small"><?php echo $userdetail['User']['desg_rec_id']; ?></span>
      </div>
      <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Deposit Management</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">

        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/admindepositrequest">Deposit
            Request</a></li>

        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/admindeposithistory">Deposit
            History</a></li>


      </ul>
    </div>
  </li>





  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Withdraw Management</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic1">
      <ul class="nav flex-column sub-menu">

        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/adminwithdrawrequest">Withdraw
            Request</a></li>

        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>wallets/adminwithdrawhistory">Withdraw
            History</a></li>


      </ul>
    </div>
  </li>




  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
      <span class="menu-title">Reports</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-chart-bar menu-icon"></i>
    </a>
    <div class="collapse" id="ui-basic11">
      <ul class="nav flex-column sub-menu">

        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>reports/teamwisebusiness">Team wise
            business reports</a></li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>reports/adminreferralreport">Referral
            reports</a></li>
        <li class="nav-item"> <a class="nav-link"
            href="<?php echo BASEURL; ?>reports/adminreferralincomereport">Referral income report</a></li>
        <li class="nav-item"> <a class="nav-link"
            href="<?php echo BASEURL; ?>wallets/admindepoasdfasdfsitrequest">Transaction Wallet Reports</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Profit and loss report</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Trade report</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Profit and loss report</a></li>



      </ul>
    </div>
  </li>

    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Contactmail" aria-expanded="false"
              aria-controls="page-layouts" >
              <span class="menu-title">Contact us Mails</span>
               <i class="menu-arrow"></i>
              <i class="mdi mdi-home menu-icon"></i>
            </a> 
                <div class="collapse" id="Contactmail">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/contact_mails">Mail list</a></li>
                
                </li>
		
              </ul>
            </div>
          </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
      <span class="menu-title">Setting</span>
      <i class="menu-arrow"></i>
      <i class="mdi mdi-crosshairs-gps menu-icon"></i>

    </a>
    <div class="collapse" id="charts">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/change_password">Change Password</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL; ?>users/logout">Logout</a></li>

      </ul>
    </div>
  </li>


</ul>



<?php
	  }
	  ?>