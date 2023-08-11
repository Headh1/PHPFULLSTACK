<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;

    public function __construct() {
        $this->obj_jwt = new JWT();
    }
    
    function issueToken(Request $req) {
        Log::debug("--- issueToken Start ---");
        Log::debug("id" , $req->only('id'));

        $token = $this->obj_jwt->createJWT($req->only('id'));

        Log::debug("id : ".$token);
        Log::debug("--- issueToken End ---");

        $res = [
            'errflg' => '0',
            'token' => $token
        ];

        return response(json_encode($res),200);
    }

    public function chk(Request $req){
        $token = $req->header('Authorization');

        $res = [
            'errflg' => '0',
            'token' => 'OK'
        ];

        $status = 200;

        $result = $this->obj_jwt->chkToken($token);
        if( is_array($result)) {

        // if(!($this->obj_jwt->chkToken($token))) {
            $res = [
                'errflg' => '1',
                'errpr_info' =>[
                    "code" => $result["code"]
                    ,"msg" => $result["msg"]
                ]
            ];

            $status = 401;
        }
        // }

        return response(json_encode($res),$status);
    }
}
