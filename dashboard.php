<?php
session_start();
if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) != true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwindcss and flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include './components/header.php';
    ?>


    <div class="p-5 bg-cover bg-center" style="background-image: url('./components/dashboard_back.png');">

        <section class=" ">
            <!-- header for the search  -->
            <h2 class="text-3xl leading-9  tracking-tight text-center  sm:text-4xl sm:leading-10 text-[#cac7bd] p-4">
                READ YOUR WAY TO NEW HORIZONS
            </h2>
            <form class="max-w-md mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-[#191919] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search books...." required />
                    <button type="submit" class="text-[#cac7bd] absolute end-2.5 bottom-2.5  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 bg-[#191919] dark:hover:bg-[#cac7bd] dark:hover:text-[#191919] dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </section>
        <section class=" p-6 ">

            <!-- header for the table  -->
            <h2 class="text-3xl leading-9  tracking-tight text-center my-4 sm:text-4xl sm:leading-10 text-[#cac7bd] p-4">
                YOUR CONTRIBUTION TO THE COMMUNITY
            </h2>
            <div class="relative overflow-x-auto w-2/3 mx-auto">
                <table class="w-full text-sm text-left rtl:text-right text-[#cac7bd] rounded-lg border-2 border-[#cac7bd]">
                    <thead class="text-xs  bg-[#191919] uppercase   text-[#cac7bd]">
                        <tr class="bg-[#191919]">
                            <th scope="col" class="px-6 py-3 bg-[#191919]">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </div>
    <?php
    include './components/footer.php';
    ?>

</body>

</html>