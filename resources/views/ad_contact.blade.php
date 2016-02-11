<?php

    $name = \Request::input('contact_name');
    $lastname = \Request::input('contact_lastname');
    $email = \Request::input('contact_email');
    $subject = \Request::input('contact_subject');
    $message = \Request::input('contact_message');
    $date_time = date("F j, Y, g:i a");
    $userIpAddress = \Request::getClientIp();

?>

<h1>milProfes. Feedback</h1>

<p>
    Nombre: {{ $name }}<br>
    Apellidos: {{ $lastname }}<br>
    E-mail: {{ $email }}<br>
    Date: {{ $date_time }}<br>
    User IP address: {{ $userIpAddress }}<br>
    Asunto: {{ $subject }}<br>
    Mensaje:<br>
    {{ $message }}
</p>