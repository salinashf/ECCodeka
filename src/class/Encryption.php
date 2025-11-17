<?php
class Encryption {
    var $skey = "1324657981324657"; // you can change it

    public  function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }

    public function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    public  function encode($value){ 
        if (!$value) return false;
        $method = 'AES-128-ECB'; // puedes usar AES-256-CBC si ajustas la clave y IV
        $encrypted = openssl_encrypt($value, $method, $this->skey, OPENSSL_RAW_DATA);
        return $this->safe_b64encode($encrypted);
    }

    public function decode($value){
        if (!$value) return false;
        $method = 'AES-128-ECB';
        $decoded = $this->safe_b64decode($value);
        return openssl_decrypt($decoded, $method, $this->skey, OPENSSL_RAW_DATA);
    }
}
?>