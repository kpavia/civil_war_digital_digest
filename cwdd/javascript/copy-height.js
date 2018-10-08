// takes the height of the main content div
// and assigns it to the sidebars

var sideHeight = $('.col-sm-8').height();
console.log('Assigning height to sidebars of ' + sideHeight + 'px');
$('.col-sm-2').height(sideHeight);
console.log('Sidebar height assignment complete');

