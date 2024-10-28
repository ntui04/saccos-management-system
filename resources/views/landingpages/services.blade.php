<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - SACCOS Management System</title>
    <link rel="stylesheet" href="{{ asset('css/landingpage/services.css') }}"> <!-- Link to your CSS file -->
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

    <main class="services-content">
        <h2>Our Services</h2>

        <section class="service-box">
            <h3>Onboarding & Member Enrollment</h3>
            <p>Effortlessly onboard new members and manage existing ones. Our user-friendly interface simplifies the enrollment process, ensuring that you can quickly add and organize members.</p>
        </section>

        <section class="service-box">
            <h3>Loans Management</h3>
            <p>Simplify the loan processes from application to repayment. Our system allows you to track loan applications, approvals, and repayments, providing clear insights into your loan portfolio.</p>
        </section>

        <section class="service-box">
            <h3>Contributions Management</h3>
            <p>Manage member contributions and deposits efficiently. Monitor contributions in real-time, generate reports, and ensure accurate record-keeping with ease.</p>
        </section>
    </main>

    <footer class="footer">
        <div class="containe">
            <p>&copy; 2024 SACCOS Management System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
