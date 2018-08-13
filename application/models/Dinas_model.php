<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Dinas_model extends Eloquent {

  protected $table      = 'dinas';
  protected $primaryKey = 'id_dinas';
  protected $fillable   = ['nama_dinas'];
  public $timestamps = false;

}
?>
