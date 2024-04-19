<?php
require 'koneksi.php';
$E-mail = $_POST["E-mail"];
$Password = $_POST["Password"];

$query_sql = "SELECT * FROM tbl_users
            WHERE E-mail = '$E-mail' AND Password = '$Password'";

$result = ysqli_connect($conn, $quer_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.html");
}else {
    echo "<center><h1>E-mail atau Password Anda Salah. Silahkan Coba Lagi Kembali.</h1>
            <button><strong><a href='index.html'>Login</a></strong></button></center>";
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="src\style\style.css">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <h1 class="font-bold text-center text-2xl mb-5 flex items-center justify-center">
                <i class="fas fa-cat text-blue-500 mr-2"></i> <!-- Cat Icon -->
                Petshop.id
            </h1>
            <form action="login_process.php" method="POST">
                <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                    <div class="px-5 py-7">
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                        <input type="text" name="email" placeholder="Masukkan email anda..."
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                        <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                        <input type="password" name="password" placeholder="Masukkan password anda..."
                            class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                        <button type="submit"
                            class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2">Login</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
