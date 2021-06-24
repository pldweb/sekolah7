<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{   
    protected $table = 'siswa';
    // maksudnya adalah karena nama table yang kita buat menggunakan bahasa indonesia 
    // yaitu table siswa
    // maka jika kita membuat protected ini akan dipertegas bahwa table yang kita buat adalah 
    // table siswa

    protected $fillable = ['nama_depan', 'nama_belakang','nis', 'jenis_kelamin', 'agama', 'alamat', 'foto'];
    

    public function FotoProfile(){
      if (!$this->foto) {
        return asset('images/default.jpg');
      }
      return asset('images/'.$this->foto);
    }
}
