// takes the height of the main content div
// and assigns it to the sidebars

var sideHeight = $('#main-content-section').height();

var body = $(body).width();

if (body > 1152) {
    console.log('Copying ' + sideHeight + 'px for sidebars');
    $('#left-side-aside').height(sideHeight);
    console.log('Sidebar height assignment complete');
}
else {
    console.log('Mobile detected. Sidebar copying canceled.');
}
