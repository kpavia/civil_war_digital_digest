// takes the height of the main content div
// and assigns it to the sidebars

var sideHeight = $('#main-content-section').height();
var original = $('#content-ads-holding-div').height();

var body = $('body').width();

if (body > 1152) {
    console.log('Copying ' + sideHeight + 'px for sidebars');
    var newHeight = sideHeight;
    $('#content-ads-holding-div').height(newHeight);
    console.log('Sidebar height assignment complete');
}
if (body < 1152) {
    console.log('Mobile detected. Sidebar copying canceled.');
}
