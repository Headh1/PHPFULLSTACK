<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 테이블 정의
    protected $table = 'boards';

    // pk 정의
    protected $primaryKey = 'bno';

    // 대량 할당을 이용한 취약성 대비 
    // 화이트리스트 : 수정가능
    // protected $fillable = ['컬럼1','컬럼2'];
    // 블랙리스트 : 수정불가능
    // protected $guarded = ['컬럼1','컬럼2'];
    protected $guarded = [];

}
