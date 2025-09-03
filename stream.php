<?php

include 'admin/db.php';

if(isset($_POST['submit'])){
$name = $_POST['firstname'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

  $conn->query("INSERT INTO contact (name	,email,	phone,	msg	) VALUES ('$name', '$email', '$phone', '$message')");
    header("Location: ");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MyEventShow - Book Events Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    /* Hero Section */
    .hero {
      background: url('https://via.placeholder.com/1600x400?text=Book+Your+Favorite+Events') no-repeat center center;
      background-size: cover;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero h1 {
      font-size: 3rem;
      background: rgba(0, 0, 0, 0.6);
      padding: 20px;
      border-radius: 10px;
    }

    /* Event Cards */
    .event-card {
      border: none;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    .event-card:hover {
      transform: translateY(-5px);
    }

    .event-card img {
      height: 200px;
      object-fit: cover;
    }

    /* Category Images */
    .category img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
      border: 2px solid #ddd;
      transition: transform 0.3s ease;
    }

    .category img:hover {
      transform: scale(1.1);
      border-color: #dc3545;
    }

    /* Contact Form */
    #contactForm input,
    #contactForm textarea {
      border-radius: 8px;
    }

    #contactForm button {
      border-radius: 8px;
      padding: 10px 25px;
    }

    /* Footer */
    footer {
      background-color: #343a40;
      color: white;
      padding: 40px 0;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MyEventShow</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="event.html">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#categories">Categories</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Book Your Favorite Shows, Movies & Events</h1>
  </div>

  <!-- Featured Events -->
  <div class="container my-5" id="events">
    <h2 class="mb-4 text-center">Featured Events</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card event-card">
          <img src="C3.avif" class="card-img-top" alt="Concert">
          <div class="card-body">
            <h5 class="card-title">Concert Night 2025</h5>
            <p class="card-text">Live performances in Mumbai!</p>
            <p><strong>Date:</strong> Oct 25 | <strong>Venue:</strong> Mumbai Arena</p>
            <a href="#" class="btn btn-danger">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card event-card">
          <img src="C2.avif" class="card-img-top" alt="Comedy">
          <div class="card-body">
            <h5 class="card-title">Comedy Fiesta</h5>
            <p class="card-text">Funniest night of the year!</p>
            <p><strong>Date:</strong> Nov 10 | <strong>Venue:</strong> Delhi Club</p>
            <a href="#" class="btn btn-danger">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card event-card">
          <img src="c1.avif" class="card-img-top" alt="Drama">
          <div class="card-body">
            <h5 class="card-title">Stage Drama - Life</h5>
            <p class="card-text">Heart-touching theatrical experience.</p>
            <p><strong>Date:</strong> Dec 5 | <strong>Venue:</strong> Pune Theater</p>
            <a href="#" class="btn btn-danger">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Event Categories -->
  <div class="container my-5" id="categories">
    <h2 class="text-center mb-4">Event Categories</h2>
    <div class="row text-center g-4">
      <div class="col-md-3">
        <div class="category">
          <img src="c1.avif" alt="Concerts">
          <h5>Concerts</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="category">
          <img src="c2.avif" alt="Comedy">
          <h5>Comedy</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="category">
          <img src="c3.avif" alt="Theatre">
          <h5>Theatre</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="category">
          <img src="c4.avif" alt="Movies">
          <h5>Movies</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Form -->
  <div class="container my-5" id="contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form id="contactForm" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-danger">Send Message</button>
        </form>
        
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; 2025 MyEventShow. All rights reserved.</p>
      <p>
        Follow us on 
        <a href="#" class="text-white text-decoration-underline">Instagram</a> |
        <a href="#" class="text-white text-decoration-underline">Facebook</a>
      </p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 
</body>
</html>
