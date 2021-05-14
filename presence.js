const fetchPresence = async () => {
    const r = await fetch('https://api.lanyard.rest/v1/users/409386496878182401');
    return r.json();
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    setInterval(async () => {
      const data = await fetchPresence();
      console.log(data);
      if (data.success) {
        if(data.data.listening_to_spotify == true && data.data.activities[1] == null){          
          document.getElementById('pretable').style.display = 'block';
          document.getElementById('presence').style.display = 'block';
          document.getElementById('name').style.width = '250px';
          document.getElementById('name').style.bottom = '180px';
          document.getElementById('spotify').innerHTML = "LISTENING TO SPOTIFY:";
          document.getElementById("album").src = data.data.spotify.album_art_url;
          document.getElementById('artist').innerHTML = data.data.spotify.artist;
          document.getElementById('song').innerHTML = data.data.spotify.song + '<br>';
          document.getElementById('by').innerHTML = "by ";          
          document.getElementById('contact').style.width = '250px';
          document.getElementById('social1').style.width = '240px';
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == false && data.data.activities[0].name == "Visual Studio Code"){
          document.getElementById('pretable').style.display = 'block';
          document.getElementById('presence').style.display = 'block';
          document.getElementById('name').style.width = '250px';
          document.getElementById('name').style.bottom = '180px';          
          document.getElementById('contact').style.width = '250px';          
          document.getElementById('social1').style.width = '240px';
          document.getElementById('spotify').innerHTML = data.data.activities[0].name;
          document.getElementById("album").src = src =`https://cdn.discordapp.com/app-assets/${data.data.activities[0].application_id}/${data.data.activities[0].assets.large_image}.png`;
          document.getElementById("album").style.height = '60px'
          document.getElementById('artist').innerHTML = data.data.activities[0].state;
          document.getElementById('song').innerHTML = data.data.activities[0].details + '<br>';
          document.getElementById('by').innerHTML = "";
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == true && data.data.activities[1].name == "Visual Studio Code"){
          document.getElementById('pretable').style.display = 'block';
          document.getElementById('presence').style.display = 'block';
          document.getElementById('contact').style.width = '250px';
          document.getElementById('name').style.width = '250px';
          document.getElementById('name').style.bottom = '180px';
          document.getElementById('spotify').innerHTML = data.data.activities[1].name;
          document.getElementById("album").src = src =`https://cdn.discordapp.com/app-assets/${data.data.activities[1].application_id}/${data.data.activities[1].assets.large_image}.png`;
          document.getElementById("album").style.height = '60px'
          document.getElementById('artist').innerHTML = data.data.activities[1].state;
          document.getElementById('song').innerHTML = data.data.activities[1].details + '<br>';
          document.getElementById('by').innerHTML = "";          
          document.getElementById('contact').style.width = '250px';
          document.getElementById('social1').style.width = '240px';
          document.getElementById('presence').style.width = '250px';
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == true && data.data.activities[1].name != "Visual Studio Code") {
          document.getElementById('pretable').style.display = 'block';
          document.getElementById('presence').style.display = 'block';
          document.getElementById('contact').style.width = '250px';
          document.getElementById('name').style.width = '250px';
          document.getElementById('name').style.bottom = '110px';
          document.getElementById('spotify').innerHTML = "PLAYING: " + data.data.activities[1].name;
          document.getElementById("album").style.display = 'none';
          document.getElementById("album").src =``;
          document.getElementById('artist').innerHTML = data.data.activities[1].state;
          document.getElementById('song').style.display = 'none';
          document.getElementById('by').innerHTML = "";          
          document.getElementById('contact').style.width = '250px';
          document.getElementById('social1').style.width = '240px';
          document.getElementById('presence').style.width = '250px';
          document.getElementById('albumtr').style.display = 'none';
        } else if(data.data.activities[0] != null && data.data.listening_to_spotify == false && data.data.activities[0].name != "Visual Studio Code"){
          document.getElementById('pretable').style.display = 'block';
          document.getElementById('presence').style.display = 'block';
          document.getElementById('contact').style.width = '250px';
          document.getElementById('name').style.width = '250px';
          document.getElementById('name').style.bottom = '110px';
          document.getElementById('spotify').innerHTML = "PLAYING: " + data.data.activities[0].name;
          document.getElementById("album").style.display = 'none';
          document.getElementById("album").src =``;
          document.getElementById('artist').innerHTML = data.data.activities[0].state;
          document.getElementById('song').style.display = "none";
          document.getElementById('by').style.display = 'none';          
          document.getElementById('contact').style.width = '250px';
          document.getElementById('social1').style.width = '240px';
          document.getElementById('presence').style.width = '250px';
          document.getElementById('albumtr').style.display = 'none';
        }
      }
    }, 1000);
  });