<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'component/meta.php';
    ?>
</head>

<body style="font-family:poppins;">
   


    <!-- Page Content -->
    <div>
        <!-- Simulated Navbar that is not visible even after page loader is done -->
        <nav class="bg-red-200 fixed w-full font-source font-extralight">
            <!-- Logo -->
            <p>LOGO
            <p>
        </nav>
    </div>
    <script>
        const loader = document.getElementById('page-loader');
        document.onreadystatechange = function () {
            if (document.readyState == "complete") {
                loader.classList.replace('opacity-100', 'opacity-0');
            } 
        };
    </script>
</body>

</html>