<?php header("Content-type: text/javascript; charset: UTF-8");
session_start();?>

$(document).ready(function()
{
      // alert("This code is working");

    $("#guessSub").submit(function() {
        alert("Handler for form submit called");
        return false;
        if (<?php $_SESSION['number'] == $_GET['guess']?>)
        {
            alert("This number matched");
        }
    });
<!-- function swap(one, two) {
    document.getElementById(one).style.display = 'block';
    document.getElementById(two).style.display = 'none';
} -->



});
