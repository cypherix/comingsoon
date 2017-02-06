//THE COUNTDOWN

// Set the date we're counting down to
var countDownDate = new Date("Jun 5, 2017 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an elements
    document.getElementById("counter").innerHTML = days + "<span><sup>days</sup></span> " + hours + "<span><sup>hours</sup></span> "
    + minutes + "<span><sup>mins</sup></span> " + seconds + "<span><sup>secs</sups></span> ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("counter").innerHTML = "It's Time Up";
    }
}, 1000);