<html>
<head>
</head>

<body>
<section>
<form method="post" action="sendmail.php">

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

    <input id="button" type="submit" value="send">
</form>

</section>
<footer>
<?php 
echo date("F j, Y, g:i a"); 
?>

</footer>
</body>
</html>