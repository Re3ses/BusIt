function updateTime() {
    fetch('https://worldtimeapi.org/api/ip')
      .then(response => response.json())
      .then(data => {
        var timeString = data.datetime.slice(11, 16);
        document.getElementById('clock').innerHTML = timeString;
      });
  }
  
  setInterval(updateTime, 1000);
  