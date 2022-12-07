<?php
// Несколько получателей
$to = 'martin_koblev789@gmail.com' . ', '; // запятая как разделитель
$to .= 'egorova_b6@mail.com' . ', ';
$to .= 'egorova_b6@mail.com';
$subject = 'Your data';
$message = '
<html>
  <head>
    <title>Your data</title>
  </head>
  <body>
    <p>Your data</p>
    <table>
      <tr>
        <th>Person</th><th>City</th><th>Registration year</th>
      </tr>
      <tr>
        <td>Oksana</td><td>Kharkiv</td><td>2017</td>
      </tr>
      <tr>
        <td>Mark</td><td>Kyiv</td><td>2019</td>
      </tr>
      <tr>
        <td>Oleg</td><td>Dnipro</td><td>2022</td>
      </tr>
    </table>
  </body>
</html>
';
// Заголовки:
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// Дополнительные заголовки
$headers .= 'To: Andrey <alexandr@gmail.com>, Gleb <amarin@mail.ru>' . "\r\n";
$headers .= 'From: Organization of reports <org_report@gmail.com>' . "\r\n";
// Послать письмо
mail($to, $subject, $message, $headers);
