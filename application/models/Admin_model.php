<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Admin_Model extends Eloquent {

  protected $table      = 'us_admin';
  protected $primaryKey = 'id_admin';
  protected $fillable   = ['nama','password','email','id_admin'];

  public $timestamps = false;

}
?>
