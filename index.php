<?php

  /*
   * index file of the invoice data to PDF converter
   * created at the Stuttgart Media University in summer 2016. 
   */
   
   $title = "HdM Summer Project 2016";
   
   echo "<!doctype html>";
   echo "<html lang='de'><head>";
   echo "<meta charset='utf-8' /><title>" . $title . "</title>";
   echo "<style><!-- * {font-family: 'Open Sans', Calibri, sans-serif;} --></style>";
   echo "</head>";
   echo "<body><h1>" . $title . "</h1>";
   echo "<p><strong>Date:</strong> " . date('d.m.Y') . "</p>";
   echo "</body></html>";
