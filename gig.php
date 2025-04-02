<?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
   body {
    background-color: #f0f0f0;
    height: 100%;
   justify-content: center;
    align-items: center;
    
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    font-weight: 400;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    
}
.page-1{
    background-color: white;
    width: 70%;
    padding: 20px;
    border-radius: 10px;
   border: 1px solid #ccc;
    margin-top: 20px;
}
h1{
    text-align: center;
    font-size: 2.5rem;
    color: #333;
    margin-top: 20px;
}
.gig-title{
    width: 350px;
     height:70px;
     margin-right:10px; 
     border: 1px sold black;
}
.gig-title:hover {
    outline: none;
    border-color:black;
}
.gig-category{
    width: 250px;
     height:50px;
     margin-right:10px; 
  
}
.gig-category:hover {
    outline: none;
    border-color:black;
}
.gig-sub{
    width: 200px;
    height: 40px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.gig-sub:hover {
    outline: none;
    border-color:black;
}
.gig-tags{
    color: #ccc(0,0,0.8);
}
.page-1-bt-1{
    width: 90px;
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    
}
.page-1-bt-2{
    float: right;
   width: 90px;
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}
  </style>
</head>
<body>

   <br>
    <div class="container page-1">
    <div class="">
        <div class=" mx-auto" >
            <h1 >Welcome to your Board</h1>
            <br>
             <div class="row">
                <div class="container col-4">
                     <h3>Gig title</h3>
                     <p>As your Gig storefront, your <b>title is the most important </b>place to include keywords that buyers would likely use to search for a service like yours</p>
                     <br>
                     <h3>Category</h3>
                     <p>Choose the category and sub-category most suitable for your Gig</p>
                     <br>
                    <h3>Search tags</h3>
                    <p>Tag your Gig with buzz words that are relevant to the services you offer. Use all 5 tags to get found.</p>
                </div>
                <div class="col-8">
                    <form action="insert_gig_intro.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control gig-title" id="title" name="title" placeholder="I will do "  required>
                <br>
                <br><br>
                <br><br><br>
                <select class="gig-category" id="category" name="category" required>
    <option value="">Select a category</option>
    <option value="graphic_designer">Graphic designer</option>
    <option value="web_developer">Web developer</option>
    <option value="animation">Animation</option>
    <option value="social_media_marketing">Social media marketing</option>
    <option value="data">Data</option>
    <option value="business">Business</option>
    <option value="video_editing">Video editing</option>
    <option value="finance">Finance</option>
</select>

<select class="gig-sub" name="sub_category" id="sub_category" required>
    <option value="">Select a sub-category</option>
    <option value="logo_design">Logo design</option>
    <option value="web_design">Web design</option>
    <option value="video_animation">Video animation</option>
    <option value="social_media_management">Social media management</option>
    <option value="data_entry">Data entry</option>
    <option value="business_plan">Business plan</option>
    <option value="video_editing_sub">Video editing</option>
    <option value="finance_analysis">Finance analysis</option>
</select>

                <br><br><br>
                <label for=""><b>Postive keywords</b></label>
                <br>
                <p class="gig-tags">Enter search terms you feel your buyers will use when<br> looking for your service.</p>
                <input type="text" class="form-control gig-tag rounded-0" id="keywords" name="keywords" placeholder="#Tags" required>
                <p style="color: #ccc;">5 tags maximum. Use letters and numbers only.</p>
                </div>
                <button type="reset" class="bg-black text-white page-1-bt-1">Back</button>
                <button type="submit" class="bg-black text-white page-1-bt-2">Next</button>
                </form>
              
                </div>
                
        </div>
       
    </div>
    
    </div>
    <br><br><br><br>
<footer>

</footer>
</body>
</html>