<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pengaju_model extends Eloquent {

  protected $table      = 'pengaju_pkl';
  protected $primaryKey = 'id_pengaju_pkl';
  protected $fillable   = ['id_user','nama_pengaju','asal_instansi','jml_pengaju','dinas_tujuan','sub_dinas_tujuan'];
  public $timestamps = false;

  public function pengaju(){
    return $this->hashMany('Pengajuan_model','id_pengaju');
  }
}
?>
