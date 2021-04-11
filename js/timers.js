//1st counter timer
var countDownDate1 = new Date("Sept 11, 2017 20:37:25").getTime();

//2nd counter timer
var countDownDate2 = new Date("Sept 9, 2017 23:37:25").getTime();

//3rd counter timer
var countDownDate3 = new Date("Sept 10, 2017 5:37:25").getTime();
// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down 1 date
    var distance1 = countDownDate1 - now;

    // Find the distance between now an the count down 2 date
    var distance2 = countDownDate2 - now;

    // Find the distance between now an the count down 2 date
    var distance3 = countDownDate3 - now;
    
    // Time calculations for days, hours, minutes and seconds for count timer 1
    var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
    var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

    // Time calculations for days, hours, minutes and seconds for count timer 2
    var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
    var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

    // Time calculations for days, hours, minutes and seconds for count timer 3
    var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
    var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days1 + ":" + hours1 + ":"
    + minutes1 + ":" + seconds1;

     document.getElementById("demo2").innerHTML = hours2 + ":"
    + minutes2 + ":" + seconds2;

    document.getElementById("demo3").innerHTML = hours3 + ":"
    + minutes3 + ":" + seconds3;
    
    // If the count down 1 is over, write some text 
    if (distance1 < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }

    // If the count down 2 is over, write some text 
    if (distance2 < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo2").innerHTML = "EXPIRED";
    }

    // If the count down 2 is over, write some text 
    if (distance3 < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo3").innerHTML = "EXPIRED";
        document.getElementById("container3").style.opacity = "0.3";
        document.getElementById("container3").style.cursor = "not-allowed";
    }
}, 1000);