<?php
namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected $alg = 'SHA256';
    protected $sec_key = 'php506';

    protected $error_base = [
        "E01" => "not",
        "E02" => "unknown",
        "E03" => "unauthorization",
        "E04" => "expirted",
        "E99" => "system"
    ];

    public function createJWT(Array $data) {
        Log::debug("--- createJWT Start ---");

        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);

        Log::debug("header : ".$header);

        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id' => $data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);

        $payload = base64_encode($payload_json);
        Log::debug("payload : ".$payload);
        
        $signature = hash($this->alg,$header.$payload.$this->sec_key);
        Log::debug("signature : ".$signature);

        Log::debug("--- createJWT End ---");

        return $header.".".$payload.".".$signature;
    }

    public function chkToken($token) {
        // $arr_token = explode(".",$token);

        // $header = $arr_token[0];
        // $payload = $arr_token[1];
        // $signature = $arr_token[2];

        // $verify = hash($this->alg,$header.$payload.$this->sec_key);
        
        // if($signature !== $verify) {
        //     return false;
        // }

        // return true;

        Log::debug("--- chkToken Start ---");
        Log::debug("token".$token);

        try {
            if($token === "") {
                throw new Exception('E01');
            }
            
            $decode_token = base64_decode($token);

            $arr_token = explode(".",$decode_token);

            // Log::debug("arr_token : ".$token);
            if( count($arr_token) !== 3) {
                throw new Exception('E02');
            }
            
            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            Log::debug("signature : ".$signature);

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));

            if(time() > $arr_payload->exp) {
                throw new Exception('E04');
            }
            
            $verify = hash($this->alg,$header.$payload.$this->sec_key);

            Log::debug("verify : ".$verify);

            if($signature !== $verify) {
                throw new Exception('E03');
            }
        } 
        catch (Throwable $th) {
        Log::debug("Error : ". $th->getMessage());
        return $this->create_error_info($th->getMessage());
        }
        finally{
            Log::debug("--- chkToken End ---");    
        }
        return "";
    }

    public function create_error_info($error_code) {
        $code = array_key_exists($error_code , $this->error_base) ? $error_code : "E99";

        $error_info = [
            "code" => $code,
            "msg" => $this->error_base[$code]
        ];

        return $error_info;
    }
}