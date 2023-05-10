<?php


class InstantlyAPI {

    private $apiKey;

    private $secretKey;


    public function _construct()
    {
        $this->apiKey = get_option('');
        $this->secretKey = get_option('');
    }

    public function main()
    {
        echo json_encode(['test' => 'test']);
        exit();
    }

    public function stored_campaigns()
    {

    }

    public function stored_analytics()
    {

    }
}