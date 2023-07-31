<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'component/meta.php';
    ?>
</head>

<body style="font-family:poppins;">

    <?php
    include 'component/navbar-home.php';
    ?>

    <!-- slider -->
    <div id="default-carousel" class="relative w-full z-30" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden md:h-[850px]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a target="_blank" href="https://forms.gle/4L2kX7tyU1Nh34Ux7">
                <img src="images/slider/1.png" class="object-fill absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/slider/2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/slider/3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a target="_blank" href="https://youtube.com/playlist?list=PLjhA2yPw10ZIC3Oy-cjaWXng7tjRjlWB7">
                    <img src="images/slider/4.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </a>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a target="_blank" href="https://m.youtube.com/@streesafety/featured">
                    <img src="images/slider/5.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </a>
            </div>

            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a target="_blank" href="https://youtube.com/playlist?list=PLjd4bTvfVmleyQ0EP_527aaONLvngRwky">
                    <img src="images/slider/6.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </a>
            </div>

            <!-- Item 7 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/slider/7.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <!-- Item 8 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a target="_blank" href="https://streesafety.com/home">
                    <img src="images/slider/8.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </a>
            </div>


        </div>
        <!-- Slider indicators --
        <div class="absolute z-30 flex space-x-3  -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 bg-green-300 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <!-- about us -->
    <div>
        <div class="container mx-auto p-4 mt-6">
            <div class="mb-5 w-full">
                <div class="text-4xl md:text-left text-center tracking-wider">About Us</div>
                <div class="flex md:justify-start justify-center ">
                    <div class="flex w-44">
                        <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                        <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                        <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                    </div>
                </div>

            </div>
            <div class="flex md:flex-row flex-col-reverse text-xl w-full mb-6">
                <div id="expandableContent" class="mb-2 transition-all duration-300  leading-loose text-justify">
                    <iframe class="float-right ml-8 mt-3 w-full h-72 md:w-1/2 md:h-[450px] border border-gray-200 rounded-lg " src="https://www.youtube.com/embed/ryFybCODyyI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen>

                    </iframe>
                    An Initiative to Revive Rural India '', launched on India’s 75th Independence Day with the vision to bridge the Rural-Urban economic divide at the grass-root level by providing quality education for children and generating employment for struggling youth to make them self-reliant.

                    Our model is designed to address the key underlying problems of development through a practical and sustainable process. Poor quality education for young kids would be tackled by providing e-tutorial apps and books and setting up Smart and Unique learning centers in small towns and villages.

                    Trained, motivated youth would be employed here as well. To promptly tackle unemployment on a larger scale, our JobUWant Portal will provide free alerts for all government job vacancies, along with exam strategies and skill development programs.

                    Lastly, we envisage a safe and independent environment for women through safety training, skill development workshops, and most importantly, through our one-of-a-kind STREE Podcast.

                    With Empower Bharat, we strive to make a unified, empowered India a reality.

                </div>

                <!-- <div class="md:w-1/2 w-full md:flex justify-end md:ml-20 ">

                    <iframe class="w-full my-2 md:h-72 max-w-full border border-gray-200 rounded-lg dark:border-gray-700" src="https://www.youtube.com/embed/ryFybCODyyI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen>

                    </iframe>
                </div> -->

            </div>

        </div>

    </div>

    <!-- did you know -->
    <div>
        <div class="container mx-auto p-4">
            <div class="mb-5">
                <div class="text-4xl md:text-left text-center tracking-wider">Did You Know</div>
                <div class="flex md:justify-start justify-center ">
                    <div class="flex w-72">
                        <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                        <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                        <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                    </div>
                </div>
            </div>
            <div class="md:flex w-full mb-6">
                <div class="w-full md:flex justify-center ">
                    <video class="md:w-2/3  max-w-full my-4 border border-gray-200 rounded-lg dark:border-gray-700" controls preload="none" autoplay muted loop>
                        <source src="animation/diduknow.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>



        </div>

    </div>

    <!-- our work -->
    <div style="background: #43816D;">
        <div class=" container mx-auto p-4 my-6">
            <div class="mb-5">
                <div class="text-4xl tracking-wider text-white">Our Work</div>
                <div class="flex w-44">
                    <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                    <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                    <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                </div>
            </div>

            <div class="md:flex w-full mb-6">
                <div class="grid md:grid-cols-3 gap-4">

                    <div class="bg-white rounded-lg p-4 flex flex-col items-center justify-between">
                        <div class="mt-6  flex justify-center items-center">
                            <a target="_blank" href="https://m.youtube.com/watch?v=g_VKoYCIeQk">
                                <img class="h-40" src="images/work/sutra.png" />
                            </a>
                        </div>
                        <div class=" text-center my-4 font-bold text-2xl text-green-800">
                            SUTRA for Kids
                        </div>
                        <div class="text-center text-xl font-light text-gray-500 p-4 mb-6">
                            With Smart and Unique Teaching in Rural Areas (SUTRA), our team plans to bridge the gap.
                        </div>
                        <div class="text-green-800 text-center p-4 font-bold">
                            <a target="_blank" href="https://m.youtube.com/watch?v=g_VKoYCIeQk">See more ></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 flex flex-col items-center justify-between">
                        <div class="mt-6  flex justify-center items-center">
                            <a target="_blank" href="https://youtube.com/playlist?list=PLjhA2yPw10ZIC3Oy-cjaWXng7tjRjlWB7">
                                <img class="h-40" src="images/work/jobuwant.png" />
                            </a>
                        </div>
                        <div class="uppercase text-center my-4 font-bold text-2xl text-green-800">
                            JOB U WANT
                        </div>
                        <div class="text-center text-xl font-light text-gray-500 p-4 mb-6">
                            A curated one-stop platform for youth to keep them posted with free alerts of all the jobs.
                        </div>
                        <div class="text-green-800 text-center p-4 font-bold">
                            <a target="_blank" href="https://youtube.com/playlist?list=PLjhA2yPw10ZIC3Oy-cjaWXng7tjRjlWB7">
                                See more ></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 flex flex-col items-center justify-between">
                        <div class="mt-6  flex justify-center items-center">
                            <a target="_blank" href="https://streesafety.com">
                                <img class="h-40 " src="images/work/streesafety.png" />
                            </a>
                        </div>
                        <div class=" text-center my-4 font-bold text-2xl text-green-800">
                            STREE Safety
                        </div>
                        <div class="text-center text-xl font-light text-gray-500 p-4 mb-6">
                            To promote self-dependance initiated STREE - Safety Training for Rural Equality and
                            Empowerment
                        </div>
                        <div class="text-green-800 text-center p-4 font-bold">
                            <a target="_blank" href="https://streesafety.com">See more ></a>
                        </div>
                    </div>

                </div>


            </div>



        </div>

    </div>

    <!-- Join us -->
    <div>
        <div class="container mx-auto p-4 my-6">
            <div class="mb-5">
                <div class="text-4xl md:text-left text-center tracking-wider">Join Us</div>
                <div class="flex md:justify-start justify-center ">
                    <div class="flex w-44">
                        <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                        <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                        <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                    </div>
                </div>
            </div>

            <div class="flex w-full mb-6 justify-center">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-4 w-4/5">
                    <div class="bg-white rounded-lg md:h-72 h-52 border border-2 border-green-800  flex flex-col items-center justify-between">
                        <div class="md:m-6 m-2 flex md:h-64 justify-center items-center">
                            <img src="images/join/Sponsers.jpg" class="h-36 md:h-48 md:w-48" />

                        </div>
                        <div class="bg-green-800 w-full p-2 text-xl text-white text-center font-bold">
                            <a href="#" class="tracking-widest uppercase">Sponser</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg md:h-72 h-52 border border-2 border-green-800  flex flex-col items-center justify-between">
                        <div class="md:m-6 m-2 flex md:h-64 justify-center items-center">
                            <img src="images/join/partner.jpg" class="h-36 md:h-48 md:w-48" />

                        </div>
                        <div class="bg-green-800 w-full p-2 text-xl text-white text-center font-bold">
                            <a href="#" class="tracking-widest uppercase">Partner</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg md:h-72 h-52 border border-2 border-green-800  flex flex-col items-center justify-between">
                        <div class="md:m-6 m-2 flex md:h-64 justify-center items-center">
                            <img src="images/join/employee.jpg" class="h-36 md:h-48 md:w-48" />

                        </div>
                        <div class="bg-green-800 w-full p-2 text-xl text-white text-center font-bold">
                            <a href="#" class="tracking-widest uppercase">Employee</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg md:h-72 h-52 border border-2 border-green-800  flex flex-col items-center justify-between">
                        <div class="md:m-6 m-2 flex md:h-64 justify-center items-center">
                            <img src="images/join/intern.jpg" class="h-36 md:h-48 md:w-48" />

                        </div>
                        <div class="bg-green-800 w-full p-2 text-xl text-white text-center font-bold">
                            <a href="#" class="tracking-widest uppercase">Intern</a>
                        </div>
                    </div>


                </div>


            </div>



        </div>

    </div>

    <!--Empowerers -->
    <div>
        <div class="container mx-auto p-4 my-6">
            <div class="mb-5">
                <div class="text-4xl md:text-left text-center tracking-wider">Empowerers</div>
                <div class="flex md:justify-start justify-center ">
                    <div class="flex w-60">
                        <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                        <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                        <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                    </div>
                </div>
            </div>

            <div class="tracking-widest w-4/5 mb-6 md:text-left text-center mx-auto text-green-800 font-bold md:text-2xl text-xl">
                WHAT THEY SAY ABOUT US
            </div>

            <div class="h-96 md:w-4/5 mb-6 rounded-lg mx-auto" style="background: #7AC3A3;">

                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative  overflow-hidden rounded-lg h-96 xs:h-[300px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-2 md:p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8   md:p-2 w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose  text-xs  md:text-xl md:h-40 flex items-center p-1 text-justify">
                                                I am grateful to Empower Bharat for giving me the opportunity and choosing me to work. Empower Bharat gave me my first job internship and introduced me to the working world. I was a little nervous because it was my first experience working remotely for an internship, but the encouraging environment made everything easier.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8  md:p-2  md:h-8 w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Muzamil Naik.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-xl ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">Muzamil Naik
                                            </div>
                                            <div>Book Content Writer,</div>
                                            <div>Jammu & Kashmir</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                मेरा हमेशा से यह मानना रहा है कि गांवों की बेहतरी के बिना हमारे देश की बेहतरी नहीं हो सकती है। गांव कोई अतीत नहीं हैं बल्कि भविष्य हैं। मुझे इंपावर भारत का विचार काफी अच्छा लगा। मुझे इस बात से बेहद खुशी हुई की आज भी ऐसी सस्थाएं हैं जो गांव केंद्रित काम करना चाहती हैं। मैं एंपावर भारत के बेहतर भविष्य की कामना करता हूं |

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Atul Pandey.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">Atul Pandey



                                            </div>
                                            <div>Hindi Script Writer,</div>
                                            <div>Delhi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                It's a matter of great pride for me to be associated with "Empower Bharat". For me, it is more than a company where the employees are like a family and always ready to help each other. After joining EB, I learned a lot of new things. This is not just a company, it's an emotion for me.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Shweta Prasad.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Shweta Prasad
                                            </div>
                                            <div>Script Writer & Animator,</div>
                                            <div>Dhanbad (Jharkhand)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                Thank you so much for giving me the opportunity to intern with Empower Bharat. I have learned so much and had the chance to work with some amazing people and on great projects. I am so grateful to have you as a mentor and appreciate your mentorship and the healthy environment you provided.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Komal Rawat.jpeg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Komal Rawat
                                            </div>
                                            <div>UI & UX Designer,</div>
                                            <div>Mumbai (Maharashtra)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                I feel pleasure to work in Empower Bharat as an intern. Just felt as I was In my family. Gained a lot of knowledge from my colleagues. Developed my communication skills and had good support and guidance from my fellow colleagues. Thank you for believing in me and giving me this opportunity to me.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Srikar.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Kodukula Srikar Narayan



                                            </div>
                                            <div>Video Editor,</div>
                                            <div>Chennai (Tamilnadu)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                Empower Bharat is an incredible place to work. The team's support, collaboration, and encouragement to be creative have enhanced my skills. Work flexibility allows for a free flow of ideas. The humble team leaders inspire us to make a lasting impact while working for a meaningful social cause.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Shraddha.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Shraddha Kakadiya
                                            </div>
                                            <div>Content Developer,</div>
                                            <div>Mumbai (Maharashtra)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                I'm thrilled to be part of this prestigious organization with an amazing concept. The humble team leaders and flexible work environment foster continuous learning. The thoughtful concept of the organization and the great team coordination make it a recipe for success. Wishing continued success to this remarkable team!


                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Sushmitha.jpeg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Sushmitha Prakash
                                            </div>
                                            <div>Graphic Designer,</div>
                                            <div>Tumkur (Karnataka)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                I feel incredibly fortunate to be part of Empower Bharat, a great initiative for empowering Bharat. My internship has been an enjoyable and invaluable experience. Working under a dedicated leader and alongside a talented and cooperative team has been inspiring. I'm grateful for this opportunity and everything I've learned.
                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Ajay Chhapola.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Ajay Chhapola
                                            </div>
                                            <div>Designer,</div>
                                            <div>Jhunjhunu (Rajasthan)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                This internship has been a journey of accomplishments. I developed strong teamwork and communication skills. The connections made have been invaluable. I extend my gratitude to the initiative leader and the entire design team for their support. The online meetings were refreshing and enjoyable. Thank you!

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Omprakash.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Omprakash Kuldeep
                                            </div>
                                            <div>Designer,</div>
                                            <div>Jaipur (Rajasthan)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden duration-700 md:p-12 p-4 ease-in-out" data-carousel-item>
                            <div class="">
                                <div class="h-24">
                                    <div class="bg-white p-4 mx-12 rounded-lg">
                                        <div class="flex ">
                                            <div class="flex item-start">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                            -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                            832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                            325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                            -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                            -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                            498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                            6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                            -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                            -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                            -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                            2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                            226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                            -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                            265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                            45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                            371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                            -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="md:leading-loose text-justify text-xs md:text-lg md:text-xl md:h-40 flex items-center p-1 ">
                                                For me, working with Team Empower Bharat is not just an internship or earning opportunity; it's about being part of a dedicated team. Their agenda to uplift education in rural India resonates deeply. Working under a great leader as a developer is a true achievement. Grateful for this opportunity.

                                            </div>

                                            <div class="flex items-end">
                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="md:w-8 md:h-8 md:p-2  w-4 h-4 rotate-180" viewBox="0 0 980.000000 830.000000" preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,830.000000) scale(0.100000,-0.100000)" fill="#255F4C" stroke="none">
                                                        <path d="M2750 8283 c-942 -96 -1772 -598 -2266 -1370 -230 -360 -385 -770
                                                        -456 -1208 l-22 -140 -4 -2250 c-2 -1555 0 -2275 8 -2332 59 -452 394 -832
                                                        832 -944 147 -37 270 -40 1508 -36 1069 3 1203 5 1270 20 241 54 412 149 582
                                                        325 149 155 233 298 286 491 l27 96 0 1330 0 1330 -27 96 c-53 193 -137 336
                                                        -286 491 -169 174 -332 266 -577 324 -61 15 -174 18 -875 23 -615 6 -814 10
                                                        -845 20 -137 44 -280 166 -339 290 -54 113 -59 153 -53 430 5 268 13 319 72
                                                        498 68 203 177 382 335 547 235 245 481 383 799 447 90 19 155 23 436 28 l330
                                                        6 57 27 c80 37 152 107 191 187 l32 66 0 465 0 465 -29 63 c-38 82 -132 172
                                                        -211 201 -53 20 -73 21 -398 19 -188 0 -358 -3 -377 -5z" />
                                                        <path d="M7980 8279 c-814 -85 -1607 -532 -2088 -1176 -116 -155 -204 -300
                                                        -297 -488 -156 -316 -237 -574 -292 -925 -17 -108 -18 -250 -18 -2435 l0
                                                        -2320 27 -97 c64 -231 198 -436 383 -585 175 -141 352 -215 575 -243 117 -14
                                                        2407 -14 2537 1 507 56 920 465 982 974 14 116 15 2456 1 2565 -15 116 -47
                                                        226 -94 326 -58 121 -113 201 -209 301 -166 173 -342 273 -572 326 -86 19
                                                        -130 21 -890 27 -888 6 -838 2 -960 75 -122 74 -206 177 -251 312 l-26 78 5
                                                        265 c4 240 7 275 30 372 73 306 224 554 476 781 154 139 379 266 562 317 162
                                                        45 233 52 574 59 l330 6 57 27 c70 33 147 108 182 177 39 75 45 156 45 541 0
                                                        371 -7 469 -40 537 -32 66 -110 145 -176 178 l-58 30 -355 1 c-195 1 -393 -2
                                                        -440 -7z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="md:mt-32 mt-48">
                                    <div class="flex md:w-1/2 justify-center mx-auto">
                                        <div>
                                            <img class="md:w-24 md:h-24 w-12 h-12 ring-2 ring-green-800 rounded-full" src="images/empowerers/Harpreet Singh.jpg" />
                                        </div>
                                        <div class="text-white text-xs md:text-lg ml-6 flex flex-col justify-evenly">
                                            <div class="text-green-800 font-bold">
                                                Harpreet Singh
                                            </div>
                                            <div>Tech Developer,</div>
                                            <div>Patiala (Punjab)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>



        </div>

    </div>

    <!--Our Partners -->
    <div>
        <div class="container mx-auto p-4 my-6">
            <div class="mb-5">
                <div class="text-4xl md:text-left text-center tracking-wider">Our Partners</div>
                <div class="flex md:justify-start justify-center ">
                    <div class="flex w-60">
                        <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                        <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                        <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                    </div>
                </div>
            </div>

            <div class="tracking-widest text-xl flex-wrap mb-6 flex items-center justify-center text-green-800 font-bold">

                <div class="md:w-1/3 w-1/2 mb-3">
                    <div class="text-center font-thin p-4">NGO Partner</div>
                    <div class=" flex justify-center items-center">

                        <img class="h-24" src="images/partner/Shishti Anant Logo.png" />
                    </div>
                </div>
                <div class="md:w-1/3 w-1/2 mb-3">
                    <div class="text-center font-thin p-4">Technical Partner</div>
                    <div class=" flex justify-center items-center">
                        <img class="h-24" src="images/partner/Technomind logo.jpg" />
                    </div>
                </div>
                <div class="md:w-1/3 w-1/2 mb-3">
                    <div class="text-center font-thin p-4">Corporate Partner</div>
                    <div class=" flex justify-center items-center">
                        <img class="h-24" src="images/partner/LOCAL-WALE-LOGO-3.jpg" />
                    </div>
                </div>
                <div class="md:w-1/3 w-1/2 mb-3">
                    <div class="text-center font-thin p-4">Social Partner</div>
                    <div class=" flex justify-center items-center">
                        <img class="h-24" src="images/partner/nss_iitr_logo new.png" />
                    </div>
                </div>
                <div class="md:w-1/3 w-1/2 mb-3">
                    <div class="text-center font-thin p-2">College Festival Partner</div>
                    <div class=" flex justify-center items-center">
                        <img class="h-24" src="images/partner/Summit_23 logo.png" />
                    </div>
                </div>

            </div>
        </div>

    </div>



    <?php

    include 'component/contactform.php';
    include 'component/footer.php';
    ?>




</body>

</html>