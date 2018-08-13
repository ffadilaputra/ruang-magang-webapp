<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Subdinas_model extends Eloquent {

  protected $table      = 'kuota_sub_bidang';
  protected $primaryKey = 'id_sub_bidang';
  protected $fillable   = ['nama_dinas'];
  public $timestamps = false;

}
?>
