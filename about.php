<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>About</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    .person {
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    
    .person img {
      width: 100px;
      height: 120px;
      border-radius: 50%;
      margin-right: 20px;
      object-fit: cover;
    }
    
    .person h3 {
      margin: 0;
    }
    
    .person .details {
      display: none;
    }
    
    .person .details p {
      font-size: 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main class="center">
        <div class="person" onclick="toggleDetails('miken')">
    <img src="miken.png" alt="Miken">
    <div>
      <h3>Miken Thakur</h3>
      <div class="details" id="miken">
        <p>Miken Thakur is an enthusiastic and dedicated student pursuing their studies at NCIT. Miken has a strong passion for computer science and is currently enrolled in the Bachelor's program in Softeare at NCIT. With a keen interest in software development and programming, Miken actively engages in coding competitions, hackathons, and collaborative projects to enhance their practical skills. Miken is known for their strong analytical thinking, problem-solving abilities, and commitment to academic excellence. They actively participate in various student clubs and organizations, fostering a vibrant and inclusive learning environment at NCIT.</p>
      </div>
    </div>
  </div>
  
  <div class="person" onclick="toggleDetails('samrat')">
    <img src="Samrat.JPG" alt="Samrat">
    <div>
      <h3>Samrat Giri</h3>
      <div class="details" id="samrat">
        <p>Samrat Giri is an ambitious and hardworking student studying at NCIT. Samrat is pursuing a Bachelor's degree in Software  at NCIT. With a focus on business and technology, Samrat strives to bridge the gap between the two disciplines. They actively engage in coursework that combines business management principles with IT applications.</p>
      </div>
    </div>
  </div>
  
  <div class="person" onclick="toggleDetails('krishna')">
    <img src="Krishna.jpeg" alt="Krishna">
    <div>
      <h3>Krishna Gaderi</h3>
      <div class="details" id="krishna">
        <p>Krishna is an enthusiastic and talented student currently studying at NCIT. Krishna is pursuing a Bachelor's degree in Software Engineering. With a deep passion for coding and software development, Krishna actively engages in various programming projects and practical assignments. They have a strong foundation in programming languages and frameworks, and they constantly explore new technologies and tools. Krishna is known for their attention to detail, critical thinking, and problem-solving abilities. They actively collaborate with fellow students, fostering a collaborative and supportive learning environment at NCIT.</p>
      </div>
    </div>
  </div>

  <script>
    function toggleDetails(id) {
      var details = document.getElementById(id);
      details.style.display = details.style.display === 'none' ? 'block' : 'none';
    }
  </script>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>