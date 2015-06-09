<?php
/**
 * Created by PhpStorm.
 * User: Iva
 * Date: 3.4.2015.
 * Time: 23:06
 */

function pds_weather_menu(){
    add_menu_page('Weather plugin by Proodos','Weather plugin','manage_options','pds-weather-parent','pds_weather_options');
    add_submenu_page('pds-weather-parent','Weather settings','Settings','manage_options','pds-weather-settings','pds_weather_set');
}

add_action('admin_menu','pds_weather_menu');

function pds_weather_options(){
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    $opt_name='weather_key';
    $hidden_field_name = 'mt-hidden-key';
    $opt_val = get_option( $opt_name );

    echo '<div class="wrap">';
    echo "<h2>What's the weather like?</h2>";
    echo '<p>Simple weather plugin for Wordpress developed by <a href="http://prood-os.com">Proodos.</a></p>';
    echo '<p>This plugin shows the current weather data for the selected area. In the settings area you can set all the needed info.</p>';
    echo '<p>Weather data received by api from <a href="http://www.wunderground.com/?apiref=e53cbb9516ee4519">Weather underground</a>.</p>';
    echo '<p>Weather font provided by <a href="http://erikflowers.github.io/weather-icons/">Weather Icons</a>.</p>';
//    echo '<p>In order to use the plugin first sign up for api key on <a href="">Weather underground</a></p>';
//    echo '<form method="post" action=""><input type="hidden" name="mt-hidden-key" value="Y">';
//    echo '<p><label>Api key: </label> <input type="text" name="wu-api-key" value="'.$opt_val.'"/></p>';
//    echo '<p><input type="submit" name="submit" class="button button-primary" value="Save key"/></p></form>';
    echo '</div>';


}

function pds_weather_set(){
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

//    preparing for future release of pdsProWeather
//    $opt_val=get_option('weather_key');
//    if(!$opt_val){?>
<!--    <div class="error"><p><strong>--><?php //_e('please <a href="/wp-admin/admin.php?page=pds-weather-parent">create and add</a> api key.', 'menu-test' ); ?><!--</strong></p></div>-->
<?php
//    }else{
    include('admin/weather-set.php');
//    }
}