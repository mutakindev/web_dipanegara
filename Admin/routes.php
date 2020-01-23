<?php

  if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
    switch ($page) {
      case 'admin':
        include 'login.php';    
        break;
    
     case 'daftar':
        include 'Template/Form/create-admin.php';    
        break;

     case 'welcome':
        include 'Template/Home/home.php';
        break;
    
    case 'data-admin':
        include 'Template/Table/data-admin.php';
        break;

      case 'tabel':
        include 'Template/Table/table.php';
        break;

      case 'create-berita':
        include 'Template/Form/create-berita.php';
        break;

      case 'logout':
        include 'Template/Aksi/logout.php';
        break;

    //   case 'karya':
    //     include 'Templates/nilai/view.php';
    //     break;

      default:
        // code...
        break;
    }
  }
 ?>
