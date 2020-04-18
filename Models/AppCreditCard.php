
<?php

class AppCreditCard
{
    /** @var string */
    private $apiurl;

    /** @var string */
    private $apikey;

    /** @var string */
    private $endpoint;

    /** @var array */
    private $build;

    /** @var string */
    private $callback;


    public function transaction(string $amount): ? AppCreditCard
    {
        $this->build = [
            "amount" => intval ($amount),
            "sellReference" => 'Pagamento de doação ao JuntosES',
            "userIdentifier" => "24a0ea3f-7e69-46e2-9550-43e828171385",
            "paymentReceiptEmail" => "contato@juntoses.org",
            "notificationUrl" => ''
        ];
        var_dump(json_encode($this->build, true));
        die();
      
        $this->endpoint = "https://ecommerce.dev.liftpay.com.br/v1/payment-order";
        $this->post();

        if (empty($this->callback->status) || $this->callback->status != "paid") {
            http_response_code(400);
            echo "Erro ao efetuar pagameto, tente novamente.";
            exit;
        }

        return $this;
    }

  
    public function callback()
    {
        return $this->callback;
    }


    private function post()
    {
        $url = $this->apiurl . $this->endpoint;
        $api = ["api_key" => $this->apikey];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array_merge($this->build, $api)));
        curl_setopt($ch, CURLOPT_HTTPHEADER, []);
        $this->callback = json_decode(curl_exec($ch));
        curl_close($ch);
    }
}