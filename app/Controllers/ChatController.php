<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ChatController extends BaseController{

    public function sendResponse(){

        $json = $this->request->getJSON();
        $message = $json->message;

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
