<?php

// add a widget to the dashboard.
add_action('wp_dashboard_setup', 'orbi_DashboardWidget');

function orbi_DashboardWidget()
{
    wp_add_dashboard_widget(
        'orbi_cssId',
        'Orbitype',
        'orbi_DashboardWidgetRender'
    );
}


function orbi_DashboardWidgetRender()
{
    echo("<a href='" . orbi_URL_BASE . "/seo" . "'><button 
  style='
  	background-color: black;
    border: none;
    border-radius: 8px;
    padding: 5px 10px;
	margin: 5px;
    color: white;
    outline: none;
	'>Go to SEO overview</button></a>");
    echo("<a href='" . orbi_URL_BASE . "/mailbox/Inbox" . "'><button
  style='
  	background-color: black;
    border: none;
    border-radius: 8px;
    padding: 5px 10px;
	margin: 5px;
    color: white;
    outline: none;
	'>Check your email</button></a>");
}
