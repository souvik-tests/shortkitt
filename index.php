<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <title>ShortKitt - Shorten any link as fast as you can</title>
</head>
<body> 
    <?php
    session_start();
    if (isset($_SESSION['alias'])) {
        echo '<header class="text-gray-600 body-font" style="box-shadow: 1px 1px 10px #ddd;">
              <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                  <img src="img/logo.png" height="33px" width="33px">
                  <span class="ml-3 text-xl">ShortKitt.</span>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                  <a class="mr-5 hover:text-gray-900" style="text-decoration: underline;">Home</a>
                  <a class="mr-5 hover:text-gray-900" href="all-links/">All Links</a>
                </nav>
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Share
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </header>'; 
        
        echo '<section class="text-gray-600 body-font">
              <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="padding-top: 1rem; padding-bottom: 0rem;">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><span><i class="fa fa-check" style="color: green;"></i></span>&nbsp;Shorten another link</h1>
                  <p class="mb-8 leading-relaxed">Paste any link down below and we will shorten that for you.</p>
                  <form action="create/" method="post"><div class="flex w-full md:justify-start justify-center items-end">
                    <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                      <label for="hero-field" class="leading-7 text-sm text-gray-600">Long URL</label>
                      <input type="text" id="hero-field" name="link" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Shorten</button>
                  </div></form>
                  <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Example: https://yoursite.com/your-link</p>
                  <p><span><i class="fa fa-check-circle" style="color: green;"></i></span>&nbsp;<span class="label success">Success:</span>&nbsp;<a href="url/'. $_SESSION['alias'] .'" target="_blank" style="color: black; text-decoration: underline;">url/'. $_SESSION['alias'] .'</a></p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="hero" src="img/link-after.png">
                </div>
              </div>
            </section>';
        session_unset();
        session_destroy();
    }
    else {
       echo '<header class="text-gray-600 body-font" style="box-shadow: 1px 1px 10px #ddd;">
              <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                  <img src="img/logo.png" height="33px" width="33px" style="border-radius: 33px;">
                  <span class="ml-3 text-xl">ShortKitt.</span>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                  <a class="mr-5 hover:text-gray-900" style="text-decoration: underline;">Home</a>
                  <a class="mr-5 hover:text-gray-900" href="all-links/">All Links</a>
                </nav>
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Share
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </header>'; 
        
        echo '<section class="text-gray-600 body-font">
              <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="padding-top: 1rem; padding-bottom: 0rem;">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Shorten the links</h1>
                  <p class="mb-8 leading-relaxed">Paste any link down below and we will shorten that for you.</p>
                  <form action="create/" method="post"><div class="flex w-full md:justify-start justify-center items-end">
                    <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                      <label for="hero-field" class="leading-7 text-sm text-gray-600">Long URL</label>
                      <input type="text" id="hero-field" name="link" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Shorten</button>
                  </div></form>
                  <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Example: https://yoursite.com/your-link</p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="hero" src="img/link-before.png">
                </div>
              </div>
            </section>';
    }
    ?>
    
</body>
</html>