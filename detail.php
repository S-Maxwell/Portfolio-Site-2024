<!DOCTYPE html>
<html lang="en">
<!-- connect to the running database server and the specific database
$connect = new mysqli('localhost','root','root','bookstore'); -->
<?php
require_once('includes/connect.php');
// also includes "require();" , "include();" and "include_once();"

//create a query to run in SQL
//$query = 'SELECT * FROM books,authors WHERE author_id = authors.id AND books.id='.$_GET['id'];
$query = 'SELECT projects.id * FROM projects,authors WHERE author_id = authors.id AND projects.id ='.$_GET['id'];

//run the query to get back the content
$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>
<head>
<meta charset="UTF-8">
        <!-- in mobile set initial zoom level of page to 100%, set site size to equal device width not a larger canvas that is shrunk down-->
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <!-- Link to reset or normalize before main.css
        only choose one -->
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>
        <link href="css/grid.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <title>Sashoye Maxwell's Portfolio Website</title>

</head>
<body>
<header></header>
<main>
<section>
<h1>
<?php echo $row['title']; ?>
</h1>

</section>

<div><?php echo $row['name']; ?></div>

</main>

<!-- Contact -->
<section id="contact-us" class="grid-con">
    
<label class="label-text" for="name">Your Name: </label>
    <input class="boxshadow" type="text" name="name" id="name">

<br><br>

    <label class="label-text" for="company_name">Company Name: </label>
    <input class="boxshadow" type="text" name="company_name" id="company_name">

    <br><br>

    <label class="label-text" for="email">Email Address: </label>
    <input class="boxshadow" type="text" name="email" id="email">

    <br><br>

    <label class="label-text" for="number">Phone Number:</label>
    <input class="boxshadow" type="text" name="number" id="number">

<br><br>

    <label class="label-text" for="comments">A Few Words:</label>
    <textarea name="comments" id="comments">Comment here</textarea>

    <br><br>

            <input type="submit" value="send">
            </form>
            </div>
         </section>

          <!-- Footer -->

<footer>


</footer>
</body>
</html>