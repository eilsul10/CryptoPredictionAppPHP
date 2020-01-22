<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto Prediction App in PHP</title>
    <link rel="stylesheet" href="input.css">
    <link rel="shortcut icon" href="/aspientrelationship/images/00da4ad5acf86d5f802038c527dbf635 (1).ico">

</head>
<body>

    <section class="hero-image">
        <div class="hero-text">
            <h1>Bitcoin Price</h1>
            <p>A simple display of Bitcoin Price using PHP and SASS</p>
            <p>By Eileen Sul</p>
        </div>
    </section>

        <div id="price"></div>


      <script>

      setInterval(async () => {
          const priceResponse = await fetch('/price.php')
          const priceText = await priceResponse.text()
          document.getElementById('price').innerText = priceText
          
      }, 1000);


    
        </script>





    
</body>
</html>