<div class="navwrapper">
<ul class="navigation">
  <li><a href="<?php echo site_url('main'); ?>" title="Home">Home</a></li>
  <?PHP if(isset($_SESSION['Username'])){ ?>
   <li><a href="<?php echo site_url('user/view'); ?>">Account</a>
    <ul>
      <li><a href="<?php echo site_url('user/view'); ?>">Profile</a></li>
      <li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
    </ul>
  </li>
  <?PHP if($_SESSION['PermissionSet']>=1){ ?>
  <li><a href="#" title="Veiw">Veiw</a>
    <ul>
      <li><a href="<?php echo site_url('country'); ?>">Countries</a></li>
      <li><a href="<?php echo site_url('disease_definition'); ?>">Disease Definitions</a></li>
      <li><a href="<?php echo site_url('diagnosis_summary'); ?>">Diagnosis Summary</a></li>
      <li><a href="<?php echo site_url('disease_category'); ?>">Disease Catogory</a></li>
      <li><a href="<?php echo site_url('state'); ?>">State</a></li>
      </ul>
  </li>
    <li><a href="#" title="Veiw">Add</a>
    <ul>
      <li><a href="<?php echo site_url('country/add'); ?>">Countries</a></li>
      <li><a href="<?php echo site_url('disease_definition/add'); ?>">Disease Definitions</a></li>
      <li><a href="<?php echo site_url('diagnosis_summary/add'); ?>">Diagnosis Summary</a></li>
      <li><a href="<?php echo site_url('disease_category/add'); ?>">Disease Catogory</a></li>
      <li><a href="<?php echo site_url('state/add'); ?>">State</a></li>
      </ul>
  </li>
   <?PHP if($_SESSION['PermissionSet']>=2){ ?>
    <li><a href="#">People</a>
      <ul>
        <li><a href="<?php echo site_url('visiting_patron'); ?>">Veiw Visiting Patrons</a></li>
        <li><a href="<?php echo site_url('user/create'); ?>">Create User</a></li>
      </ul>
    </li>
  <?PHP }}} else{ ?>
    <li><a href="<?php echo site_url('user/login'); ?>">Login</a></li>
  <?PHP } ?>
  <div class="clear"></div>
</ul>
</div>