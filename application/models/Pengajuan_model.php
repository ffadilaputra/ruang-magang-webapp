<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pengajuan_model extends Eloquent {

  protected $table      = 'pengajuan_pkl';
  protected $primaryKey = 'id_pengajuan';
  protected $fillable   = ['id_pengaju','status_kesbangpol','status_dinas'];
  public $timestamps = true;

  public function detailPengaju(){
    return $this->belongsTo('Pengaju_model','id_pengaju');
  }
}
?>
