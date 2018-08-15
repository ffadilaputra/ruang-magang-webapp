<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Usdinas_model extends Eloquent {

  protected $table      = 'us_dinas';
  protected $primaryKey = 'id_admin';
   protected $fillable   = ['nama','password','email','id_admin'];
  public $timestamps = false;

}
?>
