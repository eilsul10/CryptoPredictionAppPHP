<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bitcoin Price App in PHP</title>
    <link rel="stylesheet" href="input.css">
    <link rel="shortcut icon" href="/favicon-16x16.png">

</head>
<body>

    <section class="hero-image">
        <div class="hero-text">
            <h1>Bitcoin Price</h1>
            <h2>A simple display of Bitcoin Price using PHP and SASS</h2>
            <h2>By Eileen Sul</h2>
            <div id="price"></div>
        </div>
    </section>

      <script>

      setInterval(async () => {
          const priceResponse = await fetch('/price.php')
          const priceText = await priceResponse.text()
          document.getElementById('price').innerText = priceText
          
      }, 1000);
    
        </script>

    
</body>
</html>