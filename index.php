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

        <div id="price">Price</div>
        <div id="updatedTime"></div>

    </div>

      <script>

      setInterval(async () => {
          // loler way 0
        //   const priceResponse = await fetch('/cryptopredictions/priceJson.php')
        //   const priceJson = await priceResponse.json()
        //   document.getElementById('price').innerText = priceJson

          // troller way 1
          const priceResponse = await fetch('/price.php')
          const priceText = await priceResponse.text()
          document.getElementById('price').innerText = priceText

          document.getElementById('updatedTime').innerText = new Date().toISOString()
          
      }, 2000);


    
        </script>





    
</body>
</html>