<?php 	
  if (isset($_GET['hal'])) {
  	 $page = $_GET['hal'];
  } else {
  	 $page = null;
  }

  switch ($page) {
  	default:
  	  include "konten/home.php";
  	break;
  	case 'berita':
  	  include "konten/berita.php";
  	break;
  	case 'tambah_berita':
  	  include "konten/tambah_berita.php";
  	break;
  	case 'edit_berita':
  	  include "konten/edit_berita.php";
  	break;
    case 'jadwal':
      include "konten/jadwal.php";
    break;
    case 'kamar':
      include "konten/kamar.php";
    break;
    case 'profil':
      include "konten/profil.php";
    break;         
   }
   
?>