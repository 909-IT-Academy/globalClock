// $(document).ready(function(){
//   //console.log("test");
// });

setInterval(displayTime, 1000 * 50);

function displayTime() {

    const timeNow = new Date();
    console.log(timeNow); // Sun May 01 2022 09:15:19 GMT+1000 (Australian Eastern Standard Time)

    let hoursOfDay = timeNow.getHours();
    console.log(hoursOfDay);

    let minutes = timeNow.getMinutes();
    let seconds = timeNow.getSeconds();
    
    let weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
    let today = weekDay[timeNow.getDay()];
    let months = timeNow.toLocaleString("default", {
        month: "long"
    });
    
    let year = timeNow.getFullYear();
    let period = "AM";

    if (hoursOfDay > 12) {
        hoursOfDay -= 12;
        period = "PM";
    }

    if (hoursOfDay === 0) {
        hoursOfDay = 12;
        period = "AM";
    }

    hoursOfDay = hoursOfDay < 10 ? "0" + hoursOfDay : hoursOfDay;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let time = hoursOfDay + ":" + minutes + ":" + seconds + period;
    document.getElementById('Clock').innerHTML = time + " " + today + " " + months + " " + year;

}
displayTime();
