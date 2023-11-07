<div class="wrap">
		
    <h1>Super Simple Site Offline</h1>

    <?php
    $default_tab = null;
    $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
    ?>
	
    <nav class="nav-tab-wrapper">
      <a href="?page=bcSOFF_offline_settings" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">General</a>
      <a href="?page=bcSOFF_offline_settings&tab=design" class="nav-tab <?php if($tab==='design'):?>nav-tab-active<?php endif; ?>">Design</a>      
      <a href="?page=bcSOFF_offline_settings&tab=access" class="nav-tab <?php if($tab==='access'):?>nav-tab-active<?php endif; ?>">Access</a>
    </nav>
    
    <div class="tab-content" style="margin-top: 40px;">
    <?php switch($tab) :
      case 'access': 
        include_once('wp-admin-access.php');
        break;
      case 'design': 
        include_once('wp-admin-design.php');
        break;
      default: 
        include_once('wp-admin-form.php');
        break;
    endswitch; ?>
    </div>
			
</div>


<p style="text-align: right; padding-right: 20px;"><span>By:</span> <a href="https://www.fkprojeto.com/" target="_blank">fkprojeto.com</a></p>

