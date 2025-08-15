<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jhed Harond Igot - Portfolio</title>
  <style>
   
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f5f3ef; 
      color: #2e2a24; 
      line-height: 1.6;
    }

    header {
      background: linear-gradient(rgba(34, 49, 34, 0.9), rgba(34, 49, 34, 0.9)), url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      color: #fff;
      text-align: center;
      padding: 60px 20px;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
      color: #d9cbb3; 
    }

    section {
      padding: 40px 20px;
      max-width: 900px;
      margin: auto;
    }

    h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #3b2f2f; 
      border-bottom: 2px solid #c7a17a; 
      display: inline-block;
      padding-bottom: 5px;
    }

    .about, .hobbies, .contact {
      margin-bottom: 50px;
    }

    .hobbies ul {
      list-style: square inside;
      padding-left: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea, button {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }

    button {
      background-color: #3b2f2f; 
      color: #fff;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #c7a17a; 
      color: #2e2a24;
    }

    footer {
      text-align: center;
      background-color: #2e2a24;
      color: #fff;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Jhed Harond Igot</h1>
    <p>20 years old • Cebu City • Sports & Music Enthusiast</p>
  </header>

  <section class="about">
    <h2>About Me</h2>
    <p>Hello! I'm Jhed, a 20-year-old student from Cebu City. I love sports, music, and exploring new ways to grow in life. This portfolio is my simple way of showcasing myself.</p>
  </section>

  <section class="hobbies">
    <h2>Hobbies</h2>
    <ul>
      <li>🏀 Playing sports </li>
      <li>🎶 Listening and playing music</li>
      <li>🌿 Exploring nature and coffee shops</li>
    </ul>
  </section>

  <section class="contact">
    <h2>Get in Touch</h2>
    <form onsubmit="sendMessage(event)">
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    <p>☕ Made with love, coffee, and nature vibes by Jhed</p>
  </footer>

  <script>
    function sendMessage(event) {
      event.preventDefault(); 
      alert("☕🌿 Your message has been sent!");
      event.target.reset(); 
    }
  </script>
</body>
</html>
