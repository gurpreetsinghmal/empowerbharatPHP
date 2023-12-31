<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'component/meta.php';
    ?>
</head>

<body style="font-family:poppins;">

    <?php
    include 'component/navbar-team.php';
    ?>

    <div class="md:mt-24">
        <img class="w-full md:h-[750px]" src="../images/team/team.png" />
    </div>



    <!-- content team -->
    <div>
        <div class="container mx-auto p-4 my-3">
            <div class="mb-3">
                <div class="text-4xl mx-auto  mb-2 text-center">टीम</div>
                <div class="flex w-28 mx-auto">
                    <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                    <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                    <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                </div>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-2 w-full mb-3">
                <?php

                $people_json = file_get_contents('../images/team/team.json');
                $decoded_json = json_decode($people_json, true);
                foreach ($decoded_json as $k => $v) {
                    
                ?>
                    <div class="   p-4 md:flex flex-col justify-center ">
                        <div class="w-full mb-2 flex justify-center">
                            <img alt="no img" class="w-32 h-32 p-1 ring-2 ring-[#7AC3A3] hover:ring-4 ease-in duration-300  hover:ring-green-800 rounded-full" 
                            src="<?php 
                            if($decoded_json[$k]["Photo"]==""){
                                echo "../images/team/noimg.png";      
                            }else
                            {
                                echo "../images/team/".$decoded_json[$k]["Photo"];
                            }
                            
                             ?>" />
                        </div>
                        <div class="text-center p-1 text-green-800 font-bold text-xl">
                            <?php
                            echo $decoded_json[$k]["Name"];
                            ?>
                        </div>
                        <div class="text-center p-1 text-slate-500 font-semibold ">
                            <?php
                            echo $decoded_json[$k]["Position"];
                            ?>
                        </div>
                        <div class="flex mb-8 justify-center">
                            <a target="_blank" href="<?php
                                                        echo $decoded_json[$k]["Linkedin Id"];
                                                        ?>">
                                <svg class="w-8 h-8 mr-2 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.8333 5.5H9.16667C7.14083 5.5 5.5 7.14083 5.5 9.16667V34.8333C5.5 36.8592 7.14083 38.5 9.16667 38.5H34.8333C36.8592 38.5 38.5 36.8592 38.5 34.8333V9.16667C38.5 7.14083 36.8592 5.5 34.8333 5.5ZM14.1863 31.1667C12.9085 31.1667 11.8727 30.1308 11.8727 28.853V20.6452C11.8745 19.3692 12.9103 18.3333 14.1863 18.3333C15.4642 18.3333 16.5 19.3692 16.5 20.647V28.8548C16.5 30.1308 15.4642 31.1667 14.1863 31.1667ZM14.1057 15.9812C12.6922 15.9812 11.748 15.0388 11.748 13.7812C11.748 12.5235 12.6903 11.5812 14.2615 11.5812C15.675 11.5812 16.6192 12.5235 16.6192 13.7812C16.6192 15.0388 15.6768 15.9812 14.1057 15.9812ZM30.7615 31.1667C29.5258 31.1667 28.523 30.1638 28.523 28.9282V24.1523C28.523 22.2127 27.3295 22 26.8822 22C26.4348 22 24.9425 22.0642 24.9425 24.1523V28.9282C24.9425 30.1638 23.9397 31.1667 22.704 31.1667H22.5555C21.3198 31.1667 20.317 30.1638 20.317 28.9282V20.647C20.317 19.3692 21.3528 18.3333 22.6307 18.3333C23.9085 18.3333 24.9443 19.3692 24.9443 20.647C24.9443 20.647 25.4613 18.3333 28.974 18.3333C31.2088 18.3333 33 20.1245 33 24.1523V28.9282C33 30.1638 31.9972 31.1667 30.7615 31.1667Z" fill="#255F4C" />
                                </svg>
                            </a>
                            <a href="<?php
                                        echo "mailto:" . $decoded_json[$k]["Email"];
                                        ?>">

                                <svg class="w-8 h-8 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#255F4C" class="w-6 h-6">
                                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>


                            </a>
                        </div>

                    </div>
                <?php
                }
                ?>

               
            </div>

        </div>
    </div>

    <!-- design team 
    <div>
        <div class="container mx-auto p-4 my-3">
            <div class="mb-3">
                <div class="text-4xl mx-auto  mb-2 text-center">Design Team</div>
                <div class="flex w-64 mx-auto">
                    <span class="h-1 w-1/3" style="background:#255F4C;"></span>
                    <span class="h-1 w-1/3" style="background: #7AC3A3;"></span>
                    <span class="h-1 w-1/3" style="background: #FCDF7D;"></span>
                </div>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-2 w-full mb-3">
                <div class="p-4 md:flex flex-col justify-center ">
                    <div class="w-full mb-2 flex justify-center">
                        <img class="w-32 h-32 hover:ring-4 ease-in duration-300  ring-green-800 rounded-full" src="images/work/jobuwant.png" />
                    </div>
                    <div class="text-center p-1 text-green-800 font-bold text-xl">Atul Sir</div>
                    <div class="text-center p-1 text-slate-500 font-semibold ">Copy Writer</div>
                    <div class="flex mb-8 justify-center">
                        <a href="https://www.linkedin.com/company/empower-bharat">
                            <svg class="w-8 h-8 mr-2 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.8333 5.5H9.16667C7.14083 5.5 5.5 7.14083 5.5 9.16667V34.8333C5.5 36.8592 7.14083 38.5 9.16667 38.5H34.8333C36.8592 38.5 38.5 36.8592 38.5 34.8333V9.16667C38.5 7.14083 36.8592 5.5 34.8333 5.5ZM14.1863 31.1667C12.9085 31.1667 11.8727 30.1308 11.8727 28.853V20.6452C11.8745 19.3692 12.9103 18.3333 14.1863 18.3333C15.4642 18.3333 16.5 19.3692 16.5 20.647V28.8548C16.5 30.1308 15.4642 31.1667 14.1863 31.1667ZM14.1057 15.9812C12.6922 15.9812 11.748 15.0388 11.748 13.7812C11.748 12.5235 12.6903 11.5812 14.2615 11.5812C15.675 11.5812 16.6192 12.5235 16.6192 13.7812C16.6192 15.0388 15.6768 15.9812 14.1057 15.9812ZM30.7615 31.1667C29.5258 31.1667 28.523 30.1638 28.523 28.9282V24.1523C28.523 22.2127 27.3295 22 26.8822 22C26.4348 22 24.9425 22.0642 24.9425 24.1523V28.9282C24.9425 30.1638 23.9397 31.1667 22.704 31.1667H22.5555C21.3198 31.1667 20.317 30.1638 20.317 28.9282V20.647C20.317 19.3692 21.3528 18.3333 22.6307 18.3333C23.9085 18.3333 24.9443 19.3692 24.9443 20.647C24.9443 20.647 25.4613 18.3333 28.974 18.3333C31.2088 18.3333 33 20.1245 33 24.1523V28.9282C33 30.1638 31.9972 31.1667 30.7615 31.1667Z" fill="#255F4C" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/BharatEmpower">
                            <svg class="w-8 h-8 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.6623 7.39036C38.1682 8.09619 35.6253 9.41986 34.3475 9.67286C34.298 9.68569 34.2577 9.70219 34.21 9.71503C32.7195 8.24469 30.6772 7.33353 28.4167 7.33353C23.8608 7.33353 20.1667 11.0277 20.1667 15.5835C20.1667 15.8237 20.1465 16.2655 20.1667 16.5002C14.267 16.5002 9.95867 13.422 6.73384 9.46569C6.303 8.93403 5.84467 9.21086 5.74934 9.58853C5.53484 10.4429 5.4615 11.871 5.4615 12.8904C5.4615 15.4589 7.469 17.9815 10.5948 19.5454C10.0192 19.6939 9.38484 19.8002 8.72484 19.8002C7.9475 19.8002 7.05284 19.5967 6.27 19.186C5.98034 19.0339 5.35517 19.076 5.54034 19.8167C6.28284 22.7849 9.67084 24.8694 12.6977 25.4762C12.0102 25.8814 10.5435 25.7989 9.86884 25.7989C9.6195 25.7989 8.75234 25.7402 8.19134 25.6705C7.67984 25.6082 6.89334 25.7402 7.5515 26.7375C8.965 28.877 12.1623 30.2209 14.9142 30.2722C12.3805 32.2595 8.23717 32.9855 4.268 32.9855C3.465 32.9672 3.50534 33.882 4.1525 34.2212C7.08034 35.7575 11.8763 36.6669 15.3028 36.6669C28.9245 36.6669 36.6667 26.2847 36.6667 16.4984C36.6667 16.3407 36.663 16.0107 36.6575 15.6789C36.6575 15.6459 36.6667 15.6147 36.6667 15.5817C36.6667 15.5322 36.652 15.4845 36.652 15.435C36.6465 15.1857 36.641 14.9529 36.6355 14.8319C37.7153 14.0527 39.369 12.6997 40.205 11.6639C40.4892 11.3119 40.26 10.8847 39.8732 11.0185C38.8777 11.365 37.1562 12.036 36.0782 12.1644C38.236 10.7362 39.303 9.49319 40.2197 8.11269C40.5332 7.64153 40.1408 7.16303 39.6623 7.39036Z" fill="#255F4C" />
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="p-4 md:flex flex-col justify-center ">
                    <div class="w-full mb-2 flex justify-center">
                        <img class="w-32 h-32 hover:ring-4 ease-in duration-300  ring-green-800 rounded-full" src="images/work/jobuwant.png" />
                    </div>
                    <div class="text-center p-1 text-green-800 font-bold text-xl">Atul Sir</div>
                    <div class="text-center p-1 text-slate-500 font-semibold ">Copy Writer</div>
                    <div class="flex mb-8 justify-center">
                        <a href="https://www.linkedin.com/company/empower-bharat">
                            <svg class="w-8 h-8 mr-2 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.8333 5.5H9.16667C7.14083 5.5 5.5 7.14083 5.5 9.16667V34.8333C5.5 36.8592 7.14083 38.5 9.16667 38.5H34.8333C36.8592 38.5 38.5 36.8592 38.5 34.8333V9.16667C38.5 7.14083 36.8592 5.5 34.8333 5.5ZM14.1863 31.1667C12.9085 31.1667 11.8727 30.1308 11.8727 28.853V20.6452C11.8745 19.3692 12.9103 18.3333 14.1863 18.3333C15.4642 18.3333 16.5 19.3692 16.5 20.647V28.8548C16.5 30.1308 15.4642 31.1667 14.1863 31.1667ZM14.1057 15.9812C12.6922 15.9812 11.748 15.0388 11.748 13.7812C11.748 12.5235 12.6903 11.5812 14.2615 11.5812C15.675 11.5812 16.6192 12.5235 16.6192 13.7812C16.6192 15.0388 15.6768 15.9812 14.1057 15.9812ZM30.7615 31.1667C29.5258 31.1667 28.523 30.1638 28.523 28.9282V24.1523C28.523 22.2127 27.3295 22 26.8822 22C26.4348 22 24.9425 22.0642 24.9425 24.1523V28.9282C24.9425 30.1638 23.9397 31.1667 22.704 31.1667H22.5555C21.3198 31.1667 20.317 30.1638 20.317 28.9282V20.647C20.317 19.3692 21.3528 18.3333 22.6307 18.3333C23.9085 18.3333 24.9443 19.3692 24.9443 20.647C24.9443 20.647 25.4613 18.3333 28.974 18.3333C31.2088 18.3333 33 20.1245 33 24.1523V28.9282C33 30.1638 31.9972 31.1667 30.7615 31.1667Z" fill="#255F4C" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/BharatEmpower">
                            <svg class="w-8 h-8 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.6623 7.39036C38.1682 8.09619 35.6253 9.41986 34.3475 9.67286C34.298 9.68569 34.2577 9.70219 34.21 9.71503C32.7195 8.24469 30.6772 7.33353 28.4167 7.33353C23.8608 7.33353 20.1667 11.0277 20.1667 15.5835C20.1667 15.8237 20.1465 16.2655 20.1667 16.5002C14.267 16.5002 9.95867 13.422 6.73384 9.46569C6.303 8.93403 5.84467 9.21086 5.74934 9.58853C5.53484 10.4429 5.4615 11.871 5.4615 12.8904C5.4615 15.4589 7.469 17.9815 10.5948 19.5454C10.0192 19.6939 9.38484 19.8002 8.72484 19.8002C7.9475 19.8002 7.05284 19.5967 6.27 19.186C5.98034 19.0339 5.35517 19.076 5.54034 19.8167C6.28284 22.7849 9.67084 24.8694 12.6977 25.4762C12.0102 25.8814 10.5435 25.7989 9.86884 25.7989C9.6195 25.7989 8.75234 25.7402 8.19134 25.6705C7.67984 25.6082 6.89334 25.7402 7.5515 26.7375C8.965 28.877 12.1623 30.2209 14.9142 30.2722C12.3805 32.2595 8.23717 32.9855 4.268 32.9855C3.465 32.9672 3.50534 33.882 4.1525 34.2212C7.08034 35.7575 11.8763 36.6669 15.3028 36.6669C28.9245 36.6669 36.6667 26.2847 36.6667 16.4984C36.6667 16.3407 36.663 16.0107 36.6575 15.6789C36.6575 15.6459 36.6667 15.6147 36.6667 15.5817C36.6667 15.5322 36.652 15.4845 36.652 15.435C36.6465 15.1857 36.641 14.9529 36.6355 14.8319C37.7153 14.0527 39.369 12.6997 40.205 11.6639C40.4892 11.3119 40.26 10.8847 39.8732 11.0185C38.8777 11.365 37.1562 12.036 36.0782 12.1644C38.236 10.7362 39.303 9.49319 40.2197 8.11269C40.5332 7.64153 40.1408 7.16303 39.6623 7.39036Z" fill="#255F4C" />
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="p-4 md:flex flex-col justify-center ">
                    <div class="w-full mb-2 flex justify-center">
                        <img class="w-32 h-32 hover:ring-4 ease-in duration-300  ring-green-800 rounded-full" src="images/work/jobuwant.png" />
                    </div>
                    <div class="text-center p-1 text-green-800 font-bold text-xl">Atul Sir</div>
                    <div class="text-center p-1 text-slate-500 font-semibold ">Copy Writer</div>
                    <div class="flex mb-8 justify-center">
                        <a href="https://www.linkedin.com/company/empower-bharat">
                            <svg class="w-8 h-8 mr-2 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.8333 5.5H9.16667C7.14083 5.5 5.5 7.14083 5.5 9.16667V34.8333C5.5 36.8592 7.14083 38.5 9.16667 38.5H34.8333C36.8592 38.5 38.5 36.8592 38.5 34.8333V9.16667C38.5 7.14083 36.8592 5.5 34.8333 5.5ZM14.1863 31.1667C12.9085 31.1667 11.8727 30.1308 11.8727 28.853V20.6452C11.8745 19.3692 12.9103 18.3333 14.1863 18.3333C15.4642 18.3333 16.5 19.3692 16.5 20.647V28.8548C16.5 30.1308 15.4642 31.1667 14.1863 31.1667ZM14.1057 15.9812C12.6922 15.9812 11.748 15.0388 11.748 13.7812C11.748 12.5235 12.6903 11.5812 14.2615 11.5812C15.675 11.5812 16.6192 12.5235 16.6192 13.7812C16.6192 15.0388 15.6768 15.9812 14.1057 15.9812ZM30.7615 31.1667C29.5258 31.1667 28.523 30.1638 28.523 28.9282V24.1523C28.523 22.2127 27.3295 22 26.8822 22C26.4348 22 24.9425 22.0642 24.9425 24.1523V28.9282C24.9425 30.1638 23.9397 31.1667 22.704 31.1667H22.5555C21.3198 31.1667 20.317 30.1638 20.317 28.9282V20.647C20.317 19.3692 21.3528 18.3333 22.6307 18.3333C23.9085 18.3333 24.9443 19.3692 24.9443 20.647C24.9443 20.647 25.4613 18.3333 28.974 18.3333C31.2088 18.3333 33 20.1245 33 24.1523V28.9282C33 30.1638 31.9972 31.1667 30.7615 31.1667Z" fill="#255F4C" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/BharatEmpower">
                            <svg class="w-8 h-8 hover:ring-2 ease-in duration-300  rounded-full p-0.5 ring-green-800" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.6623 7.39036C38.1682 8.09619 35.6253 9.41986 34.3475 9.67286C34.298 9.68569 34.2577 9.70219 34.21 9.71503C32.7195 8.24469 30.6772 7.33353 28.4167 7.33353C23.8608 7.33353 20.1667 11.0277 20.1667 15.5835C20.1667 15.8237 20.1465 16.2655 20.1667 16.5002C14.267 16.5002 9.95867 13.422 6.73384 9.46569C6.303 8.93403 5.84467 9.21086 5.74934 9.58853C5.53484 10.4429 5.4615 11.871 5.4615 12.8904C5.4615 15.4589 7.469 17.9815 10.5948 19.5454C10.0192 19.6939 9.38484 19.8002 8.72484 19.8002C7.9475 19.8002 7.05284 19.5967 6.27 19.186C5.98034 19.0339 5.35517 19.076 5.54034 19.8167C6.28284 22.7849 9.67084 24.8694 12.6977 25.4762C12.0102 25.8814 10.5435 25.7989 9.86884 25.7989C9.6195 25.7989 8.75234 25.7402 8.19134 25.6705C7.67984 25.6082 6.89334 25.7402 7.5515 26.7375C8.965 28.877 12.1623 30.2209 14.9142 30.2722C12.3805 32.2595 8.23717 32.9855 4.268 32.9855C3.465 32.9672 3.50534 33.882 4.1525 34.2212C7.08034 35.7575 11.8763 36.6669 15.3028 36.6669C28.9245 36.6669 36.6667 26.2847 36.6667 16.4984C36.6667 16.3407 36.663 16.0107 36.6575 15.6789C36.6575 15.6459 36.6667 15.6147 36.6667 15.5817C36.6667 15.5322 36.652 15.4845 36.652 15.435C36.6465 15.1857 36.641 14.9529 36.6355 14.8319C37.7153 14.0527 39.369 12.6997 40.205 11.6639C40.4892 11.3119 40.26 10.8847 39.8732 11.0185C38.8777 11.365 37.1562 12.036 36.0782 12.1644C38.236 10.7362 39.303 9.49319 40.2197 8.11269C40.5332 7.64153 40.1408 7.16303 39.6623 7.39036Z" fill="#255F4C" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    -->



    <?php

    include 'component/footer.php';
    ?>



</html>