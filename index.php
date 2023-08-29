<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/banner.css">
   <link rel="stylesheet" href="indexcss.css">
      
    <title>Home</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
      <div class="slider-container">
        <div id="slider">
        </div>
        <script src="js/bannerSlider.js"></script>
      </div>
      <div>
        <?php 
          if (isset($_SESSION["email"])) {
            echo "Welcome " . $_SESSION["email"];
          }
        ?>
      </div>
      <div class="post">
    <h2>Article 1: Fun Facts About Sunflower</h2>
    <h3>Introduction</h3>
    <p>The sunflower (Helianthus annuus L.) is a member of the Asteraceae plant family, a plant family which is noted for large, bright flowers. The sunflower is botanically related to chrysanthemum, gerbera, calendula and dahlia. Sunflowers are an annual plant and are easily identifiable by a large, bright yellow flower head (actually a collection of many small flowers clustered together).  They grow to a height of up to 15 feet and the flower head of a sunflower can reach 15 inches in width. In order to grow well, sunflowers need a lot of sun, hence their English name of sunflower.</p>
    
    <h3>The Sunflower in Traditional Use</h3>
    <p>Sunflower seeds were a great food source for ancient South American cultures and were sometimes toasted. The Native American Indians used the root of the sunflower in an infusion to treat snake bites; they used sunflower oil (extracted from the sunflower head) as a hair conditioner. In traditional Russian remedies, the head of the sunflower and sunflower leaves were used to treat conditions such as bronchitis and rheumatism.</p>
    
    <h3>The Sunflower as a Food</h3>
    <p>Both the seeds and the oil of the sunflower are used in food preparations; sunflower oil is used in salads and as a frying oil (not to be confused with cold-pressed sunflower oil used for therapeutic aromatherapy purposes). Sunflower seeds are a good source of nutrition and are high in vitamin D, vitamin B, niacin, and protein.</p>
  </div>
  
  <div class="post">
    <h2>Article 2: Five Fun Facts About the Number Five</h2>
    <h3>Fact 1: Fibonacci Sequence</h3>
    <p>In the famous Fibonacci sequence, each number is the sum of the two preceding ones. Interestingly, the ratio of any two consecutive Fibonacci numbers approaches the golden ratio, approximately equal to 1.618, which is often associated with aesthetic beauty and harmony.</p>
    
    <h3>Fact 2: Pentagram</h3>
    <p>A pentagram is a five-pointed star. It has been used in various contexts, including mathematics, art, and symbolism. The pentagram is often associated with mysticism and magic.</p>
    
    <h3>Fact 3: Five Senses</h3>
    <p>Humans have five primary senses: sight, hearing, taste, smell, and touch. These senses play a crucial role in our perception and interaction with the world.</p>
  </div>
  
  <div class="post">
    <h2>Article 3:Fun Facts About Car</h2>
    <h3>Introduction</h3>
    <p>A car is a vehicle that has wheels, carries a small number of passengers, and is moved by an engine or a motor. Cars are also called automobiles or motor vehicles. Trucks and buses are motor vehicles as well. However, trucks and buses are larger than cars, and they carry heavier loads.</p>
    
    <h3>Concept Cars</h3>
    <p>When auto companies want to test out a new style or a new technology, they design a concept car. Concept cars are usually unveiled at auto shows, which are large exhibitions of cars from all over the world. Auto companies can then see how customers react to concept cars and decide what concepts should be developed. At first, an idea in a concept car may seem impractical, but after many years of development it may be found in every car on the market. For instance, the first concept car was revealed in 1938, and it included power windows. </p>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>