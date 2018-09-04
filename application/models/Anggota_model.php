<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Anggota_model extends Eloquent {

  protected $table      = 'anggota_pkl';
  protected $primaryKey = 'id_anggota';
  protected $fillable   = ['nim','nama','universitas','id_anggota'];

  public $timestamps = false;

}
?>
