<?php
    $conn = mysqli_connect("localhost", "root", "", "urlshort");
    $sql = "SELECT * FROM `links`";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" href="../img/logo.png">
      <title>All Links - ShortKitt</title>
  </head>
  <body>
      <header class="text-gray-600 body-font" style="box-shadow: 1px 1px 10px #ddd;">
              <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                  <img src="../img/logo.png" height="33px" width="33px" style="border-radius: 33px;">
                  <span class="ml-3 text-xl">ShortKitt.</span>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                  <a href="../" class="mr-5 hover:text-gray-900">Home</a>
                  <a href="" class="mr-5 hover:text-gray-900" style="text-decoration: underline;">All Links</a>
                </nav>
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Share
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </header>
      <section><div class="container mx-auto px-5 py-24 items-center" style="padding-top: 1rem; padding-bottom: 5rem;">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">All your links&nbsp;<span><i class="fa fa-anchor"></i></span></h1>
      <table class="primary">
        <thead>
            <tr>
                <th>Id</th>
                <th>Main URL</th>
                <th>Shorten URL</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td>'. $row['id'] .'</td>';
                    echo '<td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="'. $row['url'] .'"><a style="color: #6366F1; text-decoration: underline;" href='. $row['url'] .'>'. $row['url'] .'</a></td>';
                    echo '<td><span><i class="fa fa-external-link" style="color: green;"></i></span>&nbsp;<a target="_blank" style="text-decoration: underline;" href="../url/'. $row['alias'] .'">url/'. $row['alias'] .'</a>
                    
                    <!-- <span><button class="s-btn"><i class="fa fa-copy" style="float: right;"></i><button></span> -->
                    
                    </td>';
                    echo '<td>'. $row['time'] .'</td></tr>';
                }
            ?>
        </tbody>
      </table>
    </div></section>
      <?php
        
      ?>
      
      <style>
          table {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }
          td {
              border: 1px solid #ddd;
                padding: 8px;
          }
          tr:nth-child(even){background-color: #f2f2f2;}
          tr:hover {background-color: #ddd;}
          th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
              border: 1px solid #ddd;
                padding: 8px;
          }
          .s-btn {
              background-color: #04AA6D;
              color: white;
              border: 0px;
              outline: none;
              padding: 5px;
              border-radius: 5px;
              float: right;
          }
          .s-btn:hover {
              background-color: #038253;
          }
      </style>
  </body>
</html>