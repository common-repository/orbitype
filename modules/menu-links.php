<?php

// add links to the menu
add_action('admin_menu', 'orbi_menuLinks');

function orbi_menuLinks()
{
    add_menu_page('_', 'Orbitype', 'read', '_', 'orbi_menuLinksMain', '', 2);
    add_menu_page('_', 'Mail', 'read', '__', 'orbi_menuLinksMail', '', 3);
    add_menu_page('_', 'SEO', 'read', '___', 'orbi_menuLinksSEO', '', 3);
}


function orbi_menuLinksMain()
{
    echo "
    <p>Redirecting to Orbitype...</p>
    <script> (() => window.location.replace('" . orbi_URL_BASE . "') )(); </script>
  ";
}


function orbi_menuLinksMail()
{
    echo "
    <p>Redirecting to Orbitype...</p>
    <script> (() => window.location.replace('" . orbi_URL_BASE . "/mailbox/Inbox') )(); </script>
  ";
}


function orbi_menuLinksSEO()
{
    echo "
    <p>Redirecting to Orbitype...</p>
    <script> (() => window.location.replace('" . orbi_URL_BASE . "/seo') )(); </script>
  ";
}
