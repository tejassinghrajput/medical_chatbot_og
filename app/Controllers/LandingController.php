<?php

namespace App\Controllers;
use App\Models\FeedbackModel;

class LandingController extends BaseController{

    protected $feedbackModel;

    public function __construct(){
        $this->feedbackModel = new FeedbackModel();
    }

    public function index(): string{
        return view('landingPage.php');
    }

    public function submitFeedback(){
        $json = $this->request->getJSON();

        $name = $json->name;
        $email = $json->email;
        $message = $json->message;

        $res = $this->feedbackModel->submitFeedback($name, $email, $message);

        if($res){
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Feedback submitted successfully'
            ]);
        }
        return $this->response->setJSON([
            'status' => false,
            'message' => 'Failed to submit feedback'
        ]);
    }
}
