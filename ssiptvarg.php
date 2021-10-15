$handler = curl_init("https://raw.githubusercontent.com/mortal251/ssiptvarg/main/fase2");  
   $response = curl_exec ($handler);  
   curl_close($handler); 
   echo $response;
