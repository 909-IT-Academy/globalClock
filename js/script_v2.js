setInterval(function(){
    $('#SydneyTime').load('globalTime/SydneyTime.php');    
    $('#VancouverTime').load('globalTime/VancouverTime.php');
    $('#KathmanduTime').load('globalTime/KathmanduTime.php');
},1000 * 5)