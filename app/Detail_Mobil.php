<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Mobil extends Model
{
	protected $table = 'detail_mobils';
    protected $fillable = ['mobil_id','warna','transmisi','varian','cakupan_mesin','penumpang','kilometer','tahun_keluar','harga','deskripsi'];

    public function Mobil(){
    		return $this->belongsTo('App\Mobil' , 'mobil_id');
    	}

}
