<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class PayController extends Controller
{
    public function payment()
    {
        $curl = curl_init();
        $url = "https://sandbox2.nganluong.vn/vietcombank-checkout/vcb/api/web/checkout/version_1_0";

        $merchant_passcode ='123456789';
        $params = [
            'function' => 'CreateOrder',
            'merchant_site_code' => '7',
            'order_code' =>  $_POST['order_id'],
            'order_description' => null,
            'amount' => $_POST['price'],
            'currency' => 'VND',
            'buyer_fullname' => 'Ngo hoang anh',
            'buyer_email' => 'nha@gmail.com',
            'buyer_mobile' => '012345678',
            'buyer_address' => 'ha noi',
            'return_url' => 'https://www.google.com/1',
            'cancel_url' => 'https://www.google.com/2',
            'notify_url' => 'https://www.google.com/3',
            'language' => 'Vi',
            'version' => '1.0',

        ];
//        dd($params);
        $params['checksum'] = md5($params['merchant_site_code'].'|'.$params['order_code'].'|'.$params['order_description'].'|'.$params['amount'].'|'.$params['currency'].'|'.$params['buyer_fullname'].'|'.$params['buyer_email'].'|'.$params['buyer_mobile'].'|'.$params['buyer_address'].'|'.$params['return_url'].'|'.$params['cancel_url'].'|'.$params['notify_url'].'|'.$params['language'].'|'.$merchant_passcode);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params
        ));

        $response = curl_exec($curl);

        $data = json_decode($response,true);//chuyển chuỗi
//        var_dump($data);die;
        $url=$data['result_data']['checkout_url'];//lấy url
//        dd($url);

        header("Location: {$url}");die();

//        curl_close($curl);
//        echo $response;
    }
}
