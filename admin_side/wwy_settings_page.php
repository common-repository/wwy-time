<div class="to-lock-strict to-lock"><div class="wrap"><h2><?php print WWY_PUGIN_NAME ." ". WWY_CURRENT_VERSION. "<sub>(Build ".WWY_CURRENT_BUILD.")</sub>"; ?></h2><form method="post" action="options.php">    <?php		settings_fields( 'wwy-settings-group' );	?>    <table class="form-table">        <tr valign="top">        <th scope="row">Use Payments (PayPal)</th>        <td><input type='checkbox' name='wwy_pay' value='1' <?php $options = get_option('wwy_pay');  if ( 1 == $options ) echo 'checked="checked"'; ?> /></td>        </tr>		        <tr valign="top">        <th scope="row">Use Sandbox</th>        <td><input type='checkbox' name='wwy_sandbox' value='1' <?php $options = get_option('wwy_sandbox');  if ( 1 == $options ) echo 'checked="checked"'; ?> />(Check if testing)</td>        </tr>		        <tr valign="top">        <th scope="row">Email for your paypal</th>        <td><input type="text" name="wwy_paypal_email" value="<?php echo get_option('wwy_paypal_email'); ?>" /></td>        </tr>                <tr valign="top">        <th scope="row">Show Sign-In top bar</th>        <td><input type='checkbox' name='wwy_signinbar' value='1' <?php $options = get_option('wwy_signinbar');  if ( 1 == $options ) echo 'checked="checked"'; ?> /></td>        </tr>					<tr valign="top">        <th scope="row">Show Main Menu</th>        <td><input type='checkbox' name='wwy_menu_in' value='1' <?php $options = get_option('wwy_menu_in');  if ( 1 == $options ) echo 'checked="checked"'; ?> />(Also if not signed-in)</td>        </tr>				<tr valign="top">        <th scope="row">Number of slides for free</th>        <td><input type="text" name="wwy_num" value="<?php echo get_option('wwy_num'); ?>" /></td>        </tr>				<tr valign="top">        <th scope="row">The amount to charge</th>        <td><span>$</span><input type="text" name="wwy_charge" value="<?php echo get_option('wwy_charge'); ?>" /></td>        </tr>				<tr valign="top">        <th scope="row">Copyright</th>        <td><input type="text" name="wwy_credit" value="<?php echo get_option('wwy_credit'); ?>" />(The very last slide)</td>        </tr>				<tr valign="top">        <th scope="row">Use Plugin's jquery</th>        <td><input type='checkbox' name='wwy_jqueryon' value='1' <?php $options = get_option('wwy_jqueryon');  if ( 1 == $options ) echo 'checked="checked"'; ?> />(recommended)</td>        </tr>    </table>        <p class="submit">    <input type="submit" class="button-primary fb-like" value="<?php _e('Save Changes') ?>" onclick="submit_click(event);" />    </p></form></div><?php if(isset($_COOKIE['fb_like'])) { ?><?php } else { ?><div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-like" data-href="https://www.facebook.com/waitingtingtimeonlinenetwork" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div><script>function createCookie(name,value,days) {    if (days) {        var date = new Date();        date.setTime(date.getTime()+(days*24*60*60*1000));        var expires = "; expires="+date.toGMTString();    }    else var expires = "";    document.cookie = name+"="+value+expires+"; path=/";}function readCookie(name) {    var nameEQ = name + "=";    var ca = document.cookie.split(';');    for(var i=0;i < ca.length;i++) {        var c = ca[i];        while (c.charAt(0)==' ') c = c.substring(1,c.length);        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);    }    return null;}function eraseCookie(name) {    createCookie(name,"",-1);}function submit_click(event){	event.preventDefault();	alert('Like Our Facebook Site First');	window.open('https://www.facebook.com/waitingtingtimeonlinenetwork','FB', 'width=800, height=600');	createCookie('fb_like','testcookie',700000000);}</script>  <?php } ?>