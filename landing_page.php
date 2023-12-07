<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renewable Energy Hub</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #2ecc71;
            padding: 1em 0;
            text-align: center;
            color: #fff;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #2ecc71;
            padding: 1em 0;
            text-align: center;
            color: #fff;
        }

        footer p {
            margin: 0;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .feature img {
            flex: 0 0 150px;
            margin-right: 20px;
        }

        @media (max-width: 600px) {
            nav a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Renewable Energy Hub</h1>
    </header>

    <nav>
        <a href="#home" onClick="add_project">Home</a>
        <a href="#technologies">Technologies</a>
        <a href="#about">About Us</a>
        <a href="#contact" onclick="openContactForm()">Contact</a>
    </nav>

    
        <h2>Welcome to Our Renewable Energy Hub</h2>
        <p>Discover sustainable and eco-friendly energy solutions to power a greener future.</p>
        <p>Explore the latest advancements in renewable technologies and join us in making a positive impact on the environment.</p>
    </section>

    <section id="technologies">
        <h2>Featured Technologies</h2>
        <div class="feature">
            <img src="solar-panel.jpg" alt="Solar Panel">
            <div>
                <h3>Solar Power</h3>
                <p>Harness the power of the sun to generate clean and renewable energy.</p>
            </div>
        </div>
        <div class="feature">
            <img src="wind-turbine.jpg" alt="Wind Turbine">
            <div>
                <h3>Wind Energy</h3>
                <p>Utilize wind turbines to convert wind energy into electricity.</p>
            </div>
        </div>
        <!-- Add more features as needed -->
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Learn more about our mission and commitment to promoting sustainable energy practices.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or would like to learn more, feel free to contact us.</p>
        <button onclick="openContactForm()">Contact Form</button>
    </section>

    <footer>
        <p>&copy; 2023 Renewable Energy Hub</p>
    </footer>

    <script>
        function openContactForm() {
            alert("Contact form functionality goes here!"); // Replace this with your contact form implementation
        }
    </script>

</body>

</html>
