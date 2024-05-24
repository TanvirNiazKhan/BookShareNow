<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <!-- tailwindcss and flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
</head>

<body class="bg-gray-100 dark:bg-gray-700">

    <?php
    include '../components/header.php';
    ?>

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Left column: Book image -->
            <div>
                <img src="book_image.jpg" alt="Book Cover" class="w-full rounded-lg shadow-md">
            </div>
            <!-- Right column: Book details -->
            <div>
                <h1 class="text-2xl font-semibold mb-2 dark:text-white">Book Title</h1>
                <p class="text-gray-600 mb-4 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Order Now</button>
            </div>
        </div>
    </div>
    <?php
    include '../components/footer.php';
    ?>

</body>

</html>