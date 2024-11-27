<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Solution Management System</title>
    <link rel="icon" href="{{ asset('assets/images/skyscraper.ico') }}" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Additional Styles for Smooth Transitions */
        .nav-menu {
            transition: max-height 0.3s ease-in-out;
        }

    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header Section -->
    <header class="bg-blue-600 bg-opacity-90 text-white py-4 shadow-md fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">Building Solution</h1>
            <!-- Desktop Navigation -->
            <div class="flex items-center space-x-6">
                <nav class="hidden md:flex space-x-6">
                    <a href="#features" class="hover:text-yellow-300">Features</a>
                    <a href="#benefits" class="hover:text-yellow-300">Benefits</a>
                    <a href="#contact" class="hover:text-yellow-300">Contact</a>
                </nav>
                <!-- Apply Button -->
                <a href="{{ route('login') }}" class="hidden md:inline-block bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 active:bg-yellow-600 transition duration-200">
                    Apply
                </a>
            </div>
            <!-- Mobile Menu Icon -->
            <button id="menu-btn" class="block md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="nav-menu max-h-0 overflow-hidden md:hidden bg-black bg-opacity-75 text-white">
            <a href="#features" class="block px-4 py-2 hover:text-yellow-300">Features</a>
            <a href="#benefits" class="block px-4 py-2 hover:text-yellow-300">Benefits</a>
            <a href="#contact" class="block px-4 py-2 hover:text-yellow-300">Contact</a>
            <!-- Apply Button for Mobile -->
            <a href="{{ route('login') }}" class="block text-center bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 active:bg-yellow-600 transition duration-200">
                Apply
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-cover bg-center" style="
        background-image: url('https://img.freepik.com/free-photo/construction-site_53876-31720.jpg?t=st=1732657788~exp=1732661388~hmac=9aa6fa5fd42c10e2c2e49482bcb76d304e8372e11557525289c4138c63848d06&w=2000');
      ">
        <div class="bg-black bg-opacity-60 p-8 md:p-10 rounded-lg text-center text-white max-w-4xl mx-4">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Transforming Building Management
            </h1>
            <p class="text-base md:text-lg leading-relaxed mb-8">
                Simplify and optimize your building operations with a complete
                solution for tracking activities, managing resources, handling tenant
                and contractor requests, and ensuring smooth workflows for
                construction sites and established buildings.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="#features" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-blue-700 transition duration-300">
                    Explore Features
                </a>
                <a href="#apply" class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-yellow-500 transition duration-300">
                    Get Started
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center px-4">
            <h3 class="text-3xl font-bold mb-8">Key Features</h3>
            <!-- Features Grid -->
            <div id="features-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- First 6 Features (Always Visible) -->
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-vector/user-login-landing-page-with-memphis-design_23-2148267062.jpg?w=2000" alt="User Authentication" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">User Authentication</h4>
                    <p class="text-gray-600">
                        Secure login for different user roles (e.g., building managers,
                        maintenance staff, tenants).
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-vector/blue-smart-phone-management-smartphone-app-template_23-2148627916.jpg?w=2000" alt="Dashboard" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Dashboard</h4>
                    <p class="text-gray-600">
                        An intuitive dashboard displaying key metrics and quick access to
                        various functions.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/architecture-concept-with-notepad_23-2147813119.jpg?w=2000" alt="Maintenance Scheduling" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Maintenance Scheduling</h4>
                    <p class="text-gray-600">
                        Tools for scheduling and tracking maintenance tasks effectively.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/business-partners-meeting-office-hall_74855-1162.jpg?w=2000" alt="Tenant Management" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Tenant Management</h4>
                    <p class="text-gray-600">
                        Manage tenant information, requests, and communication
                        efficiently.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/flat-lay-people-working-desk_23-2149762512.jpg?w=2000" alt="Resource Tracking" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Resource Tracking</h4>
                    <p class="text-gray-600">
                        Monitor and manage the allocation of resources such as utilities
                        and staff.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/business-scene-top-view-with-laptop_23-2147626519.jpg?w=2000" alt="Reports and Analytics" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Reports and Analytics</h4>
                    <p class="text-gray-600">
                        Generate reports on maintenance performance, resource allocation,
                        and tenant satisfaction.
                    </p>
                </div>
            </div>

            <!-- Additional Features (Initially Hidden) -->
            <div id="extra-features" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 hidden">
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-vest-safety-helmet-standing-with-arms-crossed-holding-putty-knife-looking-confident_141793-19066.jpg?w=2000" alt="Safety and Compliance" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Safety and Compliance</h4>
                    <p class="text-gray-600">
                        Ensure regulatory compliance with automated safety checklists,
                        incident reporting, and log inspections.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/side-view-man-making-plans-redecorate-household_23-2148814367.jpg?w=2000" alt="Progress Monitoring" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Progress Monitoring</h4>
                    <p class="text-gray-600">
                        Track milestones and phases of a construction project in real-time
                        with Gantt charts and progress bars.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/still-life-supply-chain-representation_23-2149827289.jpg?w=2000" alt="Inventory Management" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">Inventory Management</h4>
                    <p class="text-gray-600">
                        Track supplies and materials, receive low-stock alerts, and
                        generate inventory reports.
                    </p>
                </div>
                <div class="feature bg-white shadow-lg p-6 rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="https://img.freepik.com/free-photo/african-american-people-looking-supplies-list-pc-working-with-computer-check-inventory-logistics-employees-organizing-merchandise-shelves-warehouse-space-handheld-shot_482257-63029.jpg?w=2000" alt="User Management" class="w-full rounded-lg mb-4" />
                    <h4 class="text-xl font-semibold mb-4">User Management</h4>
                    <p class="text-gray-600">
                        Create and manage roles for administrators, tenants, contractors,
                        and staff with customized permissions.
                    </p>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="mt-8">
                <button id="load-more-btn" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-blue-700 transition duration-300">
                    Load More
                </button>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="bg-blue-600 text-white py-16">
        <div class="container mx-auto text-center px-4">
            <h3 class="text-3xl font-bold mb-8">Why Choose Us?</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Efficiency -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Efficiency</h4>
                    <p>
                        Streamline processes for hassle-free building management with
                        automated workflows.
                    </p>
                </div>

                <!-- Tenant Satisfaction -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 6H4m16 6H4m16 6H4" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Tenant Satisfaction</h4>
                    <p>
                        Provide quick responses to tenant requests and ensure smooth issue
                        resolution.
                    </p>
                </div>
                <!-- Data-Driven Decisions -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Data-Driven Decisions</h4>
                    <p>
                        Leverage real-time analytics to optimize building operations and
                        resources effectively.
                    </p>
                </div>
                <!-- Cost Savings -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2M5 12h14m-4 6h4m-6 0h-6" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Cost Savings</h4>
                    <p>
                        Reduce operational costs with our efficient management tools and
                        predictive maintenance.
                    </p>
                </div>
                <!-- Scalability -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14L4 20M14 10l6-6M4 4h6v6H4z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Scalability</h4>
                    <p>
                        Expand your building projects effortlessly with a system designed
                        to grow with you.
                    </p>
                </div>
                <!-- Security -->
                <div class="p-6 bg-blue-700 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v6m8-6a9 9 0 11-16 0h16z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-4">Security</h4>
                    <p>
                        Ensure data privacy and system reliability with state-of-the-art
                        encryption and backups.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Section -->
    <section id="ceo" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-8">
                Message from Our CEO
            </h3>
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
                <!-- CEO Image -->
                <div class="flex-shrink-0 mb-6 md:mb-0">
                    <img src="https://media.licdn.com/dms/image/v2/D4D03AQFOF3j1P1ioZw/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1675936318011?e=1738195200&v=beta&t=L5Oy8YPN808oU7VNOYgECCQW5r7d7n9f2KpUh7dBYHg" alt="CEO Image" class="rounded-full w-48 h-48 object-cover shadow-lg border-4 border-blue-800" />
                </div>
                <!-- CEO Details -->
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-blue-800 mb-2">
                        Irakoze Aurore
                    </h3>
                    <p class="text-lg text-gray-600 mb-4 font-medium">
                        Chief Executive Officer
                    </p>
                    <p class="text-gray-700 text-lg italic mb-6">
                        "At Building Solution, we are committed to innovation,
                        sustainability, and customer satisfaction. We aim to make your
                        journey smooth, efficient, and rewarding."
                    </p>
                    <!-- Social Media Links -->
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="https://linkedin.com/in/ceo-profile" target="_blank" class="text-blue-800 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 10-4 0v6h-4v-6a6 6 0 016-6z" />
                                <rect width="4" height="12" x="2" y="9" rx="2" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <a href="mailto:ceo@company.com" class="text-blue-800 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16.8 3H7.2a3 3 0 00-3 3v12a3 3 0 003 3h9.6a3 3 0 003-3V6a3 3 0 00-3-3zm-1.2 3l-4.2 3.15L7.2 6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional Content -->
            <div class="mt-12 text-center">
                <h4 class="text-xl font-bold text-blue-800 mb-4">Our Vision</h4>
                <p class="text-gray-700 text-lg max-w-2xl mx-auto">
                    "To revolutionize the building management industry by integrating
                    cutting-edge technology, fostering collaboration, and ensuring that
                    our solutions meet the evolving needs of our clients."
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-8">Get in Touch</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Map Section -->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17537.747689375297!2d30.074003387935036!3d-1.9519634248496467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca747d682ecdf%3A0x4d9e04beee610a6f!2sNational%20Land%20Authority!5e0!3m2!1sen!2srw!4v1732648972792!5m2!1sen!2srw" width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                </div>
                <!-- Contact Form Section -->
                <div>
                    <p class="text-lg text-gray-600 mb-8">
                        Contact us to learn more about the Building Solution Management
                        System. Fill out the form below and we'll get back to you soon!
                    </p>
                    <form action="/submit-contact" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-left text-gray-700 font-semibold mb-2">Your
                                Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required />
                        </div>
                        <div>
                            <label for="message" class="block text-left text-gray-700 font-semibold mb-2">Your
                                Message:</label>
                            <textarea id="message" name="message" rows="4" placeholder="Enter your message" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required></textarea>
                        </div>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- About Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">About Us</h3>
                <p class="text-sm text-gray-400">
                    Building Solution Management System is committed to providing
                    innovative and efficient building permit solutions. Your
                    satisfaction is our priority.
                </p>
                <p class="text-sm text-gray-400">
                    The <span class="text-blue-300 font-medium">Building Solution Management System</span>
                    is dedicated to delivering innovative and efficient solutions for managing buildings,
                    construction projects, and permits. We strive to enhance your experience with seamless
                    processes, advanced features, and exceptional service.
                    <span class="text-blue-300">Your satisfaction is our priority.</span>
                </p>
            </div>
            <!-- Quick Links Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#features" class="text-gray-400 hover:text-blue-400">Features</a>
                    </li>
                    <li>
                        <a href="#benefits" class="text-gray-400 hover:text-blue-400">Benefits</a>
                    </li>
                    <li>
                        <a href="#contact" class="text-gray-400 hover:text-blue-400">Contact</a>
                    </li>
                    <li>
                        <a href="#ceo" class="text-gray-400 hover:text-blue-400">CEO Message</a>
                    </li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Contact Us</h3>
                <p class="text-sm text-gray-400">
                    Phone:
                    <a href="tel:+250780961542" class="hover:text-blue-400">+250 780 961 542</a><br />
                    Email:
                    <a href="mailto:info@buildingsolution.com" class="hover:text-blue-400">info@buildingsolution.com</a>
                </p>
                <div class="flex justify-start space-x-4 mt-4">
                    <a href="#" class="text-blue-400 hover:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 10-4 0v6h-4v-6a6 6 0 016-6z" />
                            <rect width="4" height="12" x="2" y="9" rx="2" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-400 hover:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7.29a12.94 12.94 0 01-9.29-4.72A4.48 4.48 0 004.92 9 4.48 4.48 0 011 8v.05A4.48 4.48 0 004.92 13a4.48 4.48 0 01-2.12.08A4.48 4.48 0 007.29 17a9 9 0 01-6.63 2A12.94 12.94 0 007.29 21" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4 text-center text-sm text-gray-500">
            &copy; 2024 Building Solution Management System. All rights reserved.
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            if (mobileMenu.classList.contains("max-h-0")) {
                mobileMenu.classList.remove("max-h-0");
                mobileMenu.classList.add("max-h-screen");
            } else {
                mobileMenu.classList.remove("max-h-screen");
                mobileMenu.classList.add("max-h-0");
            }
        });

    </script>

    <!-- JavaScript for Load More -->
    <script>
        document
            .getElementById("load-more-btn")
            .addEventListener("click", function() {
                const extraFeatures = document.getElementById("extra-features");
                const loadMoreBtn = this;

                if (extraFeatures.classList.contains("hidden")) {
                    extraFeatures.classList.remove("hidden");
                    loadMoreBtn.textContent = "Show Less";
                } else {
                    extraFeatures.classList.add("hidden");
                    loadMoreBtn.textContent = "Load More";
                }
            });

    </script>
</body>

</html>
