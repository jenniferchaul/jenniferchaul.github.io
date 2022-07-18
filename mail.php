<?php
    require_once(__DIR__.'/vendor/autoload.php');
    use \Mailjet\Resources;

    define('API_USER', '9908c56b6ddedabdfe758536cec22523');
    define('API_LOGIN', '09551f87013fa2b5b3bd0ca6a3ccb522');
    $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);
    
    if (!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message =htmlspecialchars($_POST['message']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "chaul.jennifer@gmail.com",
                            'Name' => "Mailjet Pilot"
                        ],
                        'To' => [
                            [
                                'Email' => "chaul.jennifer@gmail.com",
                                'Name' => "Mailjet Pilot"
                            ]
                        ],
                        'Subject' => "Your email",
                        'TextPart' => "$email, $message",
                    ]
                ]
            ];

            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Message envoyé avec succès !";
        } else {
            echo "Email non valide";
        }
    }else{
        header('Location:index.html');
        die();
    }

