 <?php
  

function send_LINE($msg){
 $access_token = 'DBNQqwH+sVA/qiTYktq0T3H4hQlL0Kqrco5ci2/jLhch/t4ybrqvRxU/P0RSYWXCWsQ8xNteDofsLe4LjMDVRu/D0PtTruamt/25xZVSolqc5imtrhCkno5GfqSqg5ZRE3HcCdEdHBZRPl5IED1+kwdB04t89/1O/w1cDnyilFU='; 
//$access_token = '7UKEzfselRAhrFX1aGcEzWqEDoi491E7bYHd2DY9QDu'; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender//7UKEzfselRAhrFX1aGcEzWqEDoi491E7bYHd2DY9QDu//multicast
      $url = 'https://api.line.me/v2/bot/message/push';
      //$url = 'https://api.line.me/v2/bot/message/multicast';

      $data = [
        
       //'to' => '7UKEzfselRAhrFX1aGcEzWqEDoi491E7bYHd2DY9QDu',Ua50df8c342d8b4f6bd5bc2c78946b2ed
        'to' => ['Ua50df8c342d8b4f6bd5bc2c78946b2ed','U95cd710be6f56cb058ac06119b077f86',]
        //'to' => 'U95cd710be6f56cb058ac06119b077f86',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
