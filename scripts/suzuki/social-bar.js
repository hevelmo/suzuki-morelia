$(document).ready(function(){
    var bar_template = '<div class="social-bar"><div class="social-links">' +
        '<div class="social-link"><a href="https://www.facebook.com/pages/Suzuki-Morelia/1458185144458990  class="facebook"  onclick="push_social('+"'Facebook'"+');"  target="_blank"><span>Facebook </span></a></div>'+
        '<div class="social-link"><a href="https://twitter.com/SuzukiMorelia"              class="twitter"   onclick="push_social('+"'Twitter'"+');"  target="_blank"><span>Twitter  </span></a></div>'+
        '</div></div>';
    $('body').prepend( bar_template );
});
