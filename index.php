<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto Prediction App in PHP</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>

    <div class="header">
    <div class="hero-image">
        <div class="hero-text">
            <h1>Bitcoin Price</h1>
            <p>A simple display of Bitcoin Price using PHP and SASS</p>
            <p>By Eileen Sul</p>
        </div>
    </div>


        <h1>Bitcoin Price and Data</h1>
        <p>By eilsul10</p>

        <img src="https://www.blockchains-expert.com/wp-content/uploads/2019/03/Bitcoin-gold.jpg" alt="Bitcoin">

        <div id="price"></div>




    </div>

      <script>

      let priceID = document.getElementById('price').innerHTML =
      "<?php

      $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.coinbase.com/v2/prices/BTC-USD/spot',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ]);
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        $json = json_decode($resp, true);

        echo $json['data']['amount'];

        ?>";

        setInterval(() => {
            priceID();
        }, 2000);

      


        // setInterval(function(){alert("<?php echo $json['data']['amount'] ?>")}, 1000);

        </script>





    
</body>
</html>