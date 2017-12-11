<?php

namespace App;

use Session;

class FlashMessage
{   
   public static function success($message, $title)
   {     
      Session::flash('flash_toastr', '');      
      Session::flash('flash_mensaje', $message);
      Session::flash('flash_titulo', $title);                                 
      Session::flash('flash_tipo', 'success'); 
   }

   public static function error( $message, $title)
   {
      Session::flash('flash_swal', 'swal');
      Session::flash('flash_mensaje', $message);
      Session::flash('flash_titulo', $title);                                 
      Session::flash('flash_tipo', 'error'); 
   }   
}