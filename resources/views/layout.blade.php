<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <header class="container-fluid flex-row justify-between bg-grey">
        <div class="brand">
            Barangay Health Management System
        </div>
        <div class="search-bar flex-row justify-between">
            <form action="#" method="get">
                <input type="search" name="search" id="search">
                <label for="search">Search</label>
            </form>
        </div>
        <div class="profile flex-row justify-between">
            <div class="username">Username</div>
            <div class="user-photo"></div>
        </div>
    </header>
    <div class="main container-fluid flex-row">
        <nav class="sidebar flex-column bg-grey">
            <a href="/home">Home</a>
            <a href="/user">Users</a>
            <a href="/appointment">Appointments</a>
            <a href="/inventory">Inventory</a>
            <a href="/setting">Settings</a>
        </nav>
        <main class="bg-grey">
            @yield('content')
        </main>
    </div>
</body>
</html>