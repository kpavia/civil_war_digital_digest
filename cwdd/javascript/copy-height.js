// takes the height of the main content div
// and assigns it to the sidebars

var sideHeight = $('#content-ads-holding-div').height();

if (sideHeight < 970) {
    console.log('Copying ' + sideHeight + 'px for sidebars');
    $('.col-sm-2').height(sideHeight);
    console.log('Sidebar height assignment complete');
}
else {
    console.log('Mobile detected. Sidebar copying canceled.');
}
