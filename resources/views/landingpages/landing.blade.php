<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACCOS Management System</title>
    <link rel="stylesheet" href="{{ asset('css/landingpage/style.css') }}"> <!-- Link to your CSS file -->
</head>
<body>

    <header class="header">
        <div class="container">
            <h1 class="title">SACCOS Management System</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section class="welcome-section">
            <h2>Welcome to the SACCOS Management System</h2>
            <p>Streamlining the management of your SACCO with ease and efficiency.</p>
            <a href="#" class="get-started">Get Started</a>
        </section>

        <section class="services-section">
            <div class="service-box">
                <img src="{{ asset('images/growith.jpeg') }}" alt="On-boarding & Member Enrollment" class="service-image">
                <h3>On-boarding & Member Enrollment</h3>
                <p>Effortlessly onboard new members and manage existing ones.</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('images/images.jpeg') }}" alt="Loans Management" class="service-image">
                <h3>Loans Management</h3>
                <p>Simplify loan processes from application to repayment.</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('images/profit.jpeg') }}" alt="Contributions Management" class="service-image">
                <h3>Contributions Management</h3>
                <p>Manage member contributions and deposits efficiently.</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="containe">
            <p>&copy; 2024 SACCOS Management System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
