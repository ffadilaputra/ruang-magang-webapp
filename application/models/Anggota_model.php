<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Anggota_model extends Eloquent {

  protected $table      = 'anggota_pkl';
  protected $primaryKey = 'id_anggota';
  protected $fillable   = ['fk_user','nama_anggota','nim'];

  public $timestamps = false;

}
?>
