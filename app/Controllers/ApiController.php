<?php

namespace App\Controllers;
use App\Models\UserAPIModel;
use App\Controllers\BaseController;
use Mailgun\Model\Message\SendResponse;

class ApiController extends BaseController{

    protected $userAPIModel;

    public function __construct(){
        $this->userAPIModel = new UserAPIModel();
    }

    public function verifyApi(){
        $json = $this->request->getJSON();

        $apiKey = $json->apiKey;

        $result = $this->userAPIModel->verifyApi($apiKey);

        if($result){
            return $this->response->setStatusCode(200)->setJSON(['message' => 'API Key is valid', 'userInfo' => $result]);
        }
        else{
            return $this->response->setStatusCode(401)->setJSON(['message' => 'API Key is invalid']);
        }
    }

    public function getResponse(){
        $json = $this->request->getJSON();

        $apiKey = $json->apiKey;
        if(isset($json->message)){
        $message = $json->message;
        }
        else{
            return $this->response->setJSON(['response'=> 'No message found']);
        }
        

        $res = $this->userAPIModel->verifyApi($apiKey);
        if($res){
            return $this->SendResponse($message);
        }
        return $this->response->setJSON(['message'=> 'Invalid API KEY']);
    }

    public function sendResponse($message){

        if (empty($message)) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Message is required']);
        }

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=AIzaSyBFGJZlbBOTavXTRN6DF3U_x8egA2L4R_c";

        $data = [
            'contents' => [
                [
                    'parts' => [
                        [
                            'text' => "You are a medical chatbot. Given a patient's description of their medical problem, suggest appropriate over-the-counter medicine or advise them to consult a doctor if the issue seems serious. Provide a concise response focusing only on the medical advice. Do not include any disclaimers or additional information. The medicine names should be only those which are available in India.\n\nPatient's problem: $message"
                        ]
                    ]
                ]
            ]
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'Curl error: ' . curl_error($ch)]);
        }
        curl_close($ch);

        $decodedResponse = json_decode($response, true);

        if (isset($decodedResponse['candidates'][0]['content']['parts'][0]['text'])) {
            $text = $decodedResponse['candidates'][0]['content']['parts'][0]['text'];
            return $this->response->setJSON(['text' => $text]);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'Invalid response structure from the API']);
        }
    }
}
