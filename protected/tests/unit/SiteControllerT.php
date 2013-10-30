<?php

class SiteControllerT extends SiteController {

    public function formatResponseHeader($code) {
        if (!array_key_exists($code, $this->response_code)) {
            $code = '400';
        }

        return 'HTTP/1.1 ' . $code . ' ' . $this->response_code[$code];
    }

}

?>
