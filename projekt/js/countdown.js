
function exam() {

var endTime = new Date("31 May 2018 9:56:00 GMT+01:00");
endTime = (Date.parse(endTime) / 1000);

var now = new Date();
now = (Date.parse(now) / 1000);

var timeLeft = endTime - now;

var days = Math.floor(timeLeft / 86400); 
var hours = Math.floor((timeLeft - (days * 86400)) / 3600);

  
if (hours < "10") { hours = "0" + hours; }


$("#daysExam").html(days + "<span>Dagar</span>");
$("#hoursExam").html(hours + "<span>Timmar</span>");


}

setInterval(function() { exam(); }, 1000);


function lia() {

var endTime = new Date("15 January 2018 9:56:00 GMT+01:00");
endTime = (Date.parse(endTime) / 1000);

var now = new Date();
now = (Date.parse(now) / 1000);

var timeLeft = endTime - now;

var days = Math.floor(timeLeft / 86400); 
var hours = Math.floor((timeLeft - (days * 86400)) / 3600);

  
if (hours < "10") { hours = "0" + hours; }

$("#daysLia").html(days + "<span>Dagar</span>");
$("#hoursLia").html(hours + "<span>Timmar</span>");


}

setInterval(function() { lia(); }, 1000);