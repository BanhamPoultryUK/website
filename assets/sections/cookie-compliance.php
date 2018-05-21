<?php
if ( !isset($_COOKIE['cookie_compliance']) ) {
?>
<script>
var BodyTag = document.getElementsByTagName('body')[0];
var CookieComplianceBanner = document.createElement('div');
CookieComplianceBanner.setAttribute('id', 'cookie-compliance-banner');
CookieComplianceBanner.innerHTML = '<p>We use cookies on this site. You can find more information about cookies in our <a href="/cookie-policy">Cookie Policy</a> page. <a class="close-cookie-banner" href="javascript:void(0);" onclick="removeMe();"><span>X</span></a></p>';
BodyTag.insertBefore(CookieComplianceBanner, BodyTag.firstChild);
document.getElementsByTagName('body')[0].className+=' has-cookie-compliance-banner';
function removeMe() {
	document.cookie = "cookie_compliance = accepted; expires = Tues, 19 Jan 2038 03:14:07 UTC; path = /;";
	var element = document.getElementById('cookie-compliance-banner');
	element.parentNode.removeChild(element);
}
</script>
<?php
}