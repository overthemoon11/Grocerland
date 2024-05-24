<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="../assets/styles/header.css">
</head>
<body>
    <header class="main-header">
        <span class="logo-container">
            <img src="../assets/images/logo.png" alt="logo" class="logo-img">
        </span>
        <form action="/search" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Search for products..." class="search-input">
            <button type="submit" class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="search-icon" fill="#FFFFFF">
                    <path d="M16.5 15h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L16.5 15zm-5 0C8.01 15 6 12.99 6 10.5S8.01 6 10.5 6 15 8.01 15 10.5 12.99 15 10.5 15z"/>
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                </svg>
            </button>
        </form>
        <nav class="main-nav">
            <ul>
                <li><a href="../pages/homepage.php">Home</a></li>
                <li><a href="../pages/cart.php">Cart</a></li>
                <li><a href="../pages/faq.php">FAQ</a></li>
                <li><a href="../pages/register.php">Sign Up</a></li>
                <li><a href="../pages/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
