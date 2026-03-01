<?php

function elementCreator(
     string $element,
     string $elementText,
     string $fontFamily = "Calibri",
     int $fontSize = 20,
     string $fontColor = "Blue",
     string $fontAlign = "Left",
     string $bgColor = "white"
) {
     echo "<$element
               style=\"font-family: $fontFamily;
               font-size: $fontSize;
               color: $fontColor;
               text-align: $fontAlign;
               background-color: $bgColor;
               padding: 10px 20px\">
               $elementText</$element>";
}


// argument order 👉 Element - Text - font - size - color - align - bgcolor
elementCreator("h1", "This is a heading", "times new roman", 24, "Red", "center", "#c9c9c9");
elementCreator("h3", "পি. এইচ. পি. প্রোগ্রামিং", "hind siliguri", 20, "blue", "right", "#d8d86c");
elementCreator("p", "This is a paragraph", "", 16, "white", "", "#252525");
