document.addEventListener("DOMContentLoaded", () => {
    setInterval(async () => {
      const data = await fetchPresence();
      console.log(data);
      if (data.success) {
        if(data.data.listening_to_spotify == true && data.data.activities[1] == null){   
          document.getElementById('social2').style.display = 'block'; 
          document.getElementById('presencenav').style.marginBottom = '20px';      
          document.getElementById('activityname').innerHTML = "LISTENING TO SPOTIFY:";
          document.getElementById("activitypicture").src = data.data.spotify.album_art_url;
          document.getElementById('activitystate').innerHTML = data.data.spotify.artist;
          document.getElementById('activitydetails').innerHTML = data.data.spotify.song + '<br>';
          document.getElementById('activityby').innerHTML = "by ";          
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == false && data.data.activities[0].name == "Visual Studio Code"){
          document.getElementById('social2').style.display = 'block'; 
          document.getElementById('presencenav').style.marginBottom = '20px'; 
          document.getElementById('activityname').innerHTML = data.data.activities[0].name;
          document.getElementById("activitypicture").src = src =`https://cdn.discordapp.com/app-assets/${data.data.activities[0].application_id}/${data.data.activities[0].assets.large_image}.png`;
          document.getElementById("activitypicture").style.height = '60px'
          document.getElementById('activitystate').innerHTML = data.data.activities[0].state;
          document.getElementById('activitydetails').innerHTML = data.data.activities[0].details + '<br>';
          document.getElementById('activityby').innerHTML = "";
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == true && data.data.activities[1].name == "Visual Studio Code"){
          document.getElementById('social2').style.display = 'block';
          document.getElementById('presencenav').style.marginBottom = '20px';  
          document.getElementById('activityname').innerHTML = data.data.activities[1].name;
          document.getElementById("activitypicture").src = src =`https://cdn.discordapp.com/app-assets/${data.data.activities[1].application_id}/${data.data.activities[1].assets.large_image}.png`;
          document.getElementById("activitypicture").style.height = '60px';
          document.getElementById('activitystate').innerHTML = data.data.activities[1].state;
          document.getElementById('activitydetails').innerHTML = data.data.activities[1].details + '<br>';
          document.getElementById('activityby').innerHTML = "";          
        } else if (data.data.activities[0] != null && data.data.listening_to_spotify == true && data.data.activities[1].name != "Visual Studio Code") {
          document.getElementById('social2').style.display = 'block';  
          document.getElementById('presencenav').style.marginBottom = '20px';
          document.getElementById('activityname').innerHTML = "PLAYING: " + data.data.activities[1].name;
          document.getElementById("activitypicture").style.display = 'none';
          document.getElementById("activitypicture").src =``;
          document.getElementById('activitystate').innerHTML = data.data.activities[1].state;
          document.getElementById('activitydetails').style.display = 'none';
          document.getElementById('activityby').innerHTML = "";          
          document.getElementById('activitypicturetr').style.display = 'none';
        } else if(data.data.activities[0] != null && data.data.listening_to_spotify == false && data.data.activities[0].name != "Visual Studio Code"){
          document.getElementById('social2').style.display = 'block'; 
          document.getElementById('presencenav').style.marginBottom = '20px'; 
          document.getElementById('activityname').innerHTML = "PLAYING: " + data.data.activities[0].name;
          document.getElementById("activitypicture").style.display = 'none';
          document.getElementById("activitypicture").src =``;
          document.getElementById('activitystate').innerHTML = data.data.activities[0].state;
          document.getElementById('activitydetails').style.display = "none";
          document.getElementById('activityby').style.display = 'none';          
          document.getElementById('activitypicturetr').style.display = 'none';
        }
      }
    }, 1000);
  });