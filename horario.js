

var aDate = new Date(
    Date.parse('Wed Mar 06 2013 11:30:00 GMT+0530 (IST)');
);
 
var dateString = '';

var h = aDate.getHours();
var m = aDate.getMinutes();
var s = aDate.getSeconds();

if (h < 10) h = '0' + h;
if (m < 10) m = '0' + m;
if (s < 10) s = '0' + s;

dateString = h + ':' + m + ':' + s;

$("#hora").html(dateString);