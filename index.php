<!DOCTYPE html>
<html>
<title>News Portal Demo Api</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->


<!-- Overlay effect when opening sidebar on small screens -->


<!-- !PAGE CONTENT! -->
<div class="w3-main" >

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Latest News</b></h1>
   
    </div>
  </header>
  <?php 
  // $url = "http://newsapi.org/v2/everything?q=tesla&from=2021-02-12&sortBy=publishedAt&apiKey=7de2ff6487df4649a8907961605a4e59";
  // $url = "http://newsapi.org/v2/everything?q=tesla&from=2021-02-12&sortBy=publishedAt?country=india&apiKey=7de2ff6487df4649a8907961605a4e59";
  // $url = "https://newsapi.org/v2/top-headlines?country=in&apiKey=7de2ff6487df4649a8907961605a4e59";


  // var_dump($url);
  // $url = "http://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=7de2ff6487df4649a8907961605a4e59";
  $url ="http://newsapi.org/v2/everything?q=india&from=2021-02-12&sortBy=publishedAt&apiKey=7de2ff6487df4649a8907961605a4e59";


  $url1 ="http://newsapi.org/v2/everything?q=tamil&from=2021-02-12&sortBy=publishedAt&apiKey=7de2ff6487df4649a8907961605a4e59";
  $response1 = file_get_contents($url1);
  $newsdata1 = json_decode($response1);
  $response = file_get_contents($url);
  $newsdata = json_decode($response);

var_dump($newsdata);

  ?>
  <!-- First Photo Grid-->
  <div class="w3-row-padding">

    <?php 

    foreach($newsdata->articles as $news){


    ?>
    <div class="w3-third w3-container w3-margin-bottom" style="height:800px">
      <img src="<?php echo $news->urlToImage;  ?>" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $news->title; ?></b></p>
        <p><?php echo $news->description; ?></p>
       <p><?php echo $news->content; ?></p>
        <p>Author:<?php echo $news->author; ?></p>
         <p>Published:<?php echo $news->publishedAt; ?></p>
         <button class="w3-button w3-red" style="background-color:green"><a style="text-decoration:none;color:white"  href="<?php echo $news->url; ?>" target="_blank"> View More</a></button>
      </div>
    </div>
    <?php } ?>

  </div>

  

  <!-- Footer -->
  
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
