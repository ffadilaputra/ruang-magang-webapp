<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Ususer_model extends Eloquent {

  protected $table      = 'us_user';
  protected $primaryKey = 'id_user';
  protected $fillable   = ['nama','password','email'];
  public $timestamps = false;

}
?>
