<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Mailgun\Mailgun;

class SendEmail extends Controller
{
    public function index()
    {

        $apiKey = getenv('MAILGUN_API_KEY');
        $domain = getenv('MAILGUN_DOMAIN');

        $mgClient = Mailgun::create($apiKey);

        $params = [
            'from'    => 'support_team@mbot.org',
            'to'      => 'tejas.pythonproject@gmail.com',
            'subject' => 'Welcome to Mbot',
            'text'    => 'Hey user, Welcome to Mbot.'
        ];

        try {
            $response = $mgClient->messages()->send($domain, $params);

            echo "Email sent successfully: " . $response->getId();
        } catch (\Exception $e) {
            echo 'Error sending email: ' . $e->getMessage();
        }
    }
}
