 <!-- navigation bar -->
 <style>
    a.active{
        color:#255F4C;
        font-weight:bold
    }
</style>
 <nav class="">
        <div class="container mx-auto px-4">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a class="text-lg font-semibold text-green-700" href="#">
                        <img src="images/logo.png" class="h-16" />
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-12">
                        <a class="text-slate-600 hover:text-green-600" href="index.php">Home</a>
                        <a class="text-slate-600  hover:text-green-600" href="about.php">About US</a>
                        <a class="text-slate-600 hover:text-green-600" href="work.php">Our Work</a>
                        <a class="text-slate-600 hover:text-green-600" href="join.php">Join Us</a>
                        <a class="text-slate-600 active hover:text-green-600" href="team.php">Team</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="toggleButton" class="text-slate-600 hover:text-slate-800 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbarContent" class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a class="text-slate-600   block py-2 hover:text-green-600" href="index.php">Home</a>
                        <a class="text-slate-600  block py-2 hover:text-green-600" href="about.php">About US</a>
                        <a class="text-slate-600  block py-2 hover:text-green-600" href="work.php">Our Work</a>
                        <a class="text-slate-600  block py-2 hover:text-green-600" href="join.php">Join Us</a>
                        <a class="text-slate-600 active  block py-2 hover:text-green-600" href="team.php">Team</a>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        const toggleButton = document.getElementById('toggleButton');
        const navbarContent = document.getElementById('navbarContent');

        toggleButton.addEventListener('click', () => {
            navbarContent.classList.toggle('hidden');
        });
    </script>
</body>