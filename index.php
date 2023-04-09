<?php require 'Resources\header.php';

require 'Resources\home.php'; ?>

<script type="text/javascript">
    let btn = document.querySelector(".catalogue");
    let category = document.querySelector("#category");

    // Attach a "mouseenter" event listener to the button
    btn.children[0].addEventListener("mouseenter", () => {
        category.classList.replace('prop1', 'prop');


    });

    // Attach a "mouseleave" event listener to the button
    btn.children[0].addEventListener("mouseleave", () => {
        // Show the table by setting its display property to an empty string
        category.classList.replace('prop', 'prop1');
    });
</script>