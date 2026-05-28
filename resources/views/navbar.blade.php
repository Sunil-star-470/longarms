<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Single Navbar</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      font-family:Arial, sans-serif;
      background:#f2f2f2;
    }

    /* NAVBAR */
    .navbar{
      width:100%;
      background:#000;
      padding:15px 40px;

      display:flex;
      justify-content:space-between;
      align-items:center;
    }

    .logo img{
      width:120px;
    }

    .menu{
      display:flex;
      gap:35px;
      list-style:none;
    }

    .menu li a{
      color:white;
      text-decoration:none;
      font-size:16px;
      transition:0.3s;
    }

    .menu li a:hover{
      color:#ff4d4d;
    }

    .quote-btn{
      background:#ff4d4d;
      color:white;
      padding:12px 25px;
      border:none;
      border-radius:8px;
      cursor:pointer;
      font-weight:bold;
    }

    .quote-btn:hover{
      background:#e63c3c;
    }
  </style>
</head>

<body>

  <!-- SINGLE NAVBAR -->
  <nav class="navbar">

    <!-- LOGO -->
    <div class="logo w-14 h-14">
     <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

   
    <!-- MENU -->
    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <!-- <li><a href="#">Services</a></li> -->
       <li><a href="{{ route('service.index') }}">Services</a></li>
       
      <li><a href="#">Fleet</a></li>
      <li><a href="#">Areas</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>

    <!-- BUTTON -->
    <button class="quote-btn">GET QUOTE</button>

  </nav>

  <section class="w-full bg-gray-100 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div>
                <!-- Logo -->
                <!-- <div class="logo w-20 h-20 mb-6">
                    <img src="{{ asset('images/truck.png') }}" 
                         alt="LongArmsTransport Logo"
                         class="w-full h-full object-contain">
                </div> -->

                <!-- Small Tag -->
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                    Trusted Transport Services
                </span>

                <!-- Heading -->
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Fast & Reliable <br>
                    <span class="text-orange-500">LongArmsTransport</span>
                </h1>

                <!-- Description -->
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    From local delivery to long-distance transportation, 
                    LongArmsTransport ensures safe, fast, and reliable logistics 
                    for businesses and customers nationwide.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="#quote"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-medium shadow-md transition">
                        Get Free Quote →
                    </a>

                    <a href="tel:+911234567890"
                        class="border border-gray-300 hover:bg-white px-6 py-3 rounded-lg font-medium text-gray-700 transition">
                        📞 Call Now
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">10K+</h3>
                        <p class="text-gray-500 text-sm">Deliveries Done</p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">99%</h3>
                        <p class="text-gray-500 text-sm">On-Time Rate</p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">50+</h3>
                        <p class="text-gray-500 text-sm">Vehicles</p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">15+</h3>
                        <p class="text-gray-500 text-sm">Years Experience</p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/truck.png') }}"
                         alt="Transport Truck"
                         class="w-full h-96 w-96 object-cover">
                </div>

                <!-- Floating Card -->
                <!-- <div class="absolute bottom-6 left-6 bg-white shadow-lg rounded-xl px-5 py-3">
                    <h4 class="font-semibold text-gray-800">✔ Fully Insured</h4>
                    <p class="text-sm text-gray-500">Safe & secure transportation</p>
                </div> -->
            </div>

        </div>
    </div>
</section>





 
</body>
</html>