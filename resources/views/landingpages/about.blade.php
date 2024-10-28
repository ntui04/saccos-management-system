<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SACCOS Management System</title>
    <link rel="stylesheet" href="{{ asset('css/landingpage/about.css') }}"> <!-- Link to your CSS file -->
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

    <main class="about-content">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to the SACCOS Management System, a comprehensive platform designed to streamline the management of Savings and Credit Cooperative Organizations (SACCOs) in Tanzania. Our system is tailored to meet the needs of SACCOs, providing a range of features that enhance efficiency and improve service delivery.</p>

            <h3>Our Mission</h3>
            <p>To empower SACCOs through innovative technology, enabling them to serve their members better and foster community development.</p>

            <h3>Our Features</h3>
            <ul>
                <li>On-boarding & Member Enrollment</li>
                <li>Loans Management</li>
                <li>Contributions Management</li>
                <li>Accounts and Finance Management</li>
                <li>Asset Management</li>
                <li>HR & Payroll Management</li>
            </ul>

            <h3>Why Choose Us?</h3>
            <p>Our platform is user-friendly, efficient, and designed with the unique challenges of SACCOs in mind. We prioritize security, ensuring that member information is protected and accessible only to authorized personnel.</p>
        </div>
    </main>

    <footer class="footer">
        <div class="containe">
            <p>&copy; 2024 SACCOS Management System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
