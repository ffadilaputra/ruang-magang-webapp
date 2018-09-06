<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Saran_model extends Eloquent {

  protected $table      = 'saran';
  protected $primaryKey = 'id_saran';
  protected $fillable   = ['nama','email','keterangan'];

  public $timestamps = false;

}
?>
