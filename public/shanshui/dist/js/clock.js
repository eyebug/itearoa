(function(argument) {

    var weekArray = [
        '周日',
        '周一',
        '周二',
        '周三',
        '周四',
        '周五',
        '周六'
        
    ];

    function tick() {
        var a = new Date();
        var hour = a.getHours();
        var minute = a.getUTCMinutes();
        var sec = a.getSeconds();
        var weekDay = weekArray[a.getDay()];
        if(hour < 10){
            hour = '0' + hour;
        }
        if(minute < 10){
            minute = '0' + minute;
        }
        if(sec < 10){
            sec = '0' + sec;
        }
        var time = hour + ":" + minute + ":" + sec;
        $('#weekday').html(weekDay);
        $('#hour-minute').html(time);
    }

    window.setInterval(tick, 500);

})();
