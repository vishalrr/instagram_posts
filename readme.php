 function fetchData($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $result = curl_exec($ch);
  curl_close($ch); 
  return $result;
  }


  $result = fetchData("https://api.instagram.com/v1/users/4977676194/media/recent/?access_token=4977676194.1677ed0.9036351c813a4fcda42e59bf4ceae048");
  $result = json_decode($result,true);


  these functions used after authentication to access posts
  