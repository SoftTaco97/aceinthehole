$(function(){
    let weatherObject;
    function weatherCall() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://api.openweathermap.org/data/2.5/forecast?q=97035,us&units=imperial&appid=e07d17f9691dc3fc3cf88db359501d0c', true);
        xhr.send();
        xhr.onreadystatechange = function(){
            if (this.readyState === this.DONE){
                weatherObject = JSON.parse(xhr.response);
                weatherFeed();
            }
        }
    }
    function weatherFeed(){
        console.log(weatherObject);
        let days = [
            getStats(getDay(0)), // day 1
            getStats(getDay(8)), // day 2
            getStats(getDay(16)), // day 3
            getStats(getDay(24)), // day 4
            getStats(getDay(32)), // day 5
        ];
        days.forEach(function(day){
            console.log(day);
            createDay(day);
        });
    }
    function getStats(value){
        let maxTemp = 0;
        let minTemp = 200;
        let weather = value[0].weather[0].main;
        let date;
        value.forEach(function(day){
            date = day.dt_txt.slice(0, 10);
            maxTemp = Math.max(day.main.temp_max, maxTemp);
            minTemp = Math.min(day.main.temp_min, minTemp);
        });
        return ['Date: ' + date, 'High: ' + maxTemp, 'Low: ' + minTemp, 'Weather: ' + weather];    
    }

    function getDay(value){
        let stats = [];
        let count = value + 8;
        for(count; value < count; value++){
            stats.push(weatherObject.list[value]);
        }
        return stats;
    }
    function createDay(value){
        let weatherBox = document.querySelector('.weather');
        let day = document.createElement('ul');
        value.forEach(function(info){
            let item = document.createElement('li');
            item.innerText = info;
            day.appendChild(item);
        });
        // day.innerText = "Max: " + value[0] + " Min: " + value[1] + " Condition: " + value[2]; 
        weatherBox.appendChild(day);
    }
    weatherCall();
});