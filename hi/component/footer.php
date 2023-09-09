  <!-- stripe -->
  <div class="p-4 bg-[#255F4C] text-white text-center">
      <a target="_blank" href="https://drive.google.com/file/d/1Xp-PJsVtK7eiU8Y6HhiMek20viEvHw0P/view">
      एम्पावर भारत  के बारे में अधिक जानकारी के लिए कृपया हमारे ब्रोशर को पढ़ें >
      </a>
  </div>

  <!--Quick Link -->
  <div>
      <div class="container mx-auto p-4 my-6">
          <div class="mb-5">
            
          </div>

          <div class="mb-6 flex md:flex-row flex-col-reverse mb-8 w-full gap-3 ">
              <div class="md:w-1/3 w-full flex justify-center">
                  <a href="index.php">
              <img src="../images/logo.png" class="h-12" />
                  </a>
              </div>
              <div class="w-full text-center grid grid-cols-3 text-xl gap-3">

                  <div class="mb-8">
                      <div class="mb-3 font-bold text-green-800">
                      हमारे बारे मे</div>
                      <div class="mb-3"><a href="index.php">होम</a></div>
                      <div class="mb-3"><a href="about.php">एम्पावर भारत के बारे में</a></div>
                      <div class="mb-3"><a target="_blank" href="https://www.linkedin.com/in/rahul-singh-519a17151/">संस्थापक</a></div>
                  </div>
                  <div class="mb-8">
                      <div class="mb-3 font-bold text-green-800">अधिक जाने</div>
                      <div class="mb-3"><a href="about.php#vision">विज़न और मिशन</a></div>
                      <div class="mb-3"><a target="_blank" href="https://streesafety.com/">STREE सेफ़्टी 
</a></div>
                      <div class="mb-3"><a href="work.php">Job U Want</a></div>
                  </div>
                  <div class="mb-8">
                      <div class="mb-3 font-bold text-green-800">हमसे जुड़ें</div>
                      <div class="mb-3"><a target="_blank" href="https://forms.gle/4L2kX7tyU1Nh34Ux7">प्रायोजक</a></div>
                      <div class="mb-3"><a target="_blank" href="https://forms.gle/4L2kX7tyU1Nh34Ux7">पार्टनर्स</a></div>
                      <div class="mb-3"><a target="_blank" href="https://forms.gle/4L2kX7tyU1Nh34Ux7">हमारे साथ कार्य करें</a></div>
                  </div>

              </div>
          </div>







      </div>

  </div>

  <!--Footer -->
  <div class="p-5 bg-gray-300 text-center">
  कॉपीराइट 2023, एम्पावर भारत ट्रेनिंग लिमिटेड | सर्वाधिकार सुरक्षित | नियम एवं शर्तें
  </div>

   <!-- Page Loader -->
    <!-- Loader Wrapper -->
    <div class="fixed top-1/2 inset-0 z-999 bg-white/90 flex justify-center items-center transition-all opacity-100 ease-in-out h-max" id="page-loader">
        <!-- Loader -->
        <div class="relative">
            
            <div class="text-[#7AC3A3] inline-block h-16 w-16 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-success motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status">
               
            <span class=" !absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
            </div>
        </div>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

  <script>

      function play() {
          var h = document.getElementById('xhumberg');
          var o = document.getElementById('humberg');
          if (!h.classList.contains('hidden'))
              {h.classList.add("hidden");
              o.classList.remove("hidden");}
          else
              {h.classList.remove("hidden");
               o.classList.add("hidden");}
      }
      document.onreadystatechange = function () {
         if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.getElementById("page-loader").style.visibility = "visible";
         } else {
            setTimeout(() => {
               document.getElementById("page-loader").style.display ="none";
               document.querySelector("body").style.visibility = "visible";
            }, 3000)
         }
      };
  </script>