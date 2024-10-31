<?php

// custom login footer
add_action('login_footer', 'orbi_loginFooter');

function orbi_loginFooter()
{
    echo("
    <footer class='orbi_loginFooter'>
      <a href='" . orbi_URL_BASE . "'>Or log in to Orbitype.</a>
    </footer>
    <style>
      .orbi_loginFooter {
        width: 300px;
        padding: 10px;
        margin: 0 auto;
        border: 1px solid #ccd0d4;
        text-align:center;
        background-color:white;
      }
    </style>
  ");
}
