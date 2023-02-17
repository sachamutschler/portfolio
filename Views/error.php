<html>
<head>
  <meta charset="utf-8">
  <title>Error</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
</head>
<body>
  <div class="error">
    <div class="title">
      Critical Error
      <button class="close-button">X</button>
    </div>
    <div class="message">
      <img src="error.png" alt="">An error has occurred while trying to display an error message.
    </div>
    <button class="ok" onclick="play()"><span>OK</span></button>
    <audio id="audio" src="../resources/erro.mp3"></audio>

  </div>


  <script>
    $(".error").draggable();

    var error = '<div class="error">' + $('.error').html() + '</div>',
    x = window.innerWidth / 3.
    y = window.innerHeight / 3;


    $('body').on('click', '.ok', '.close-button', function(){
      $('body').append(error);
      $('.error').last().css({ top: y + 'px', left: x + 'px'}).draggable();

      x+=4;
      y+=4;
    });

    $(document).ready(function(){
      $(".start-btn").click(function(){
        $('.start-menu-win').toggleClass('active-menu');
      })
    })
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
  </script>
</body>
</html>

<style>
    *{
  padding: 0;
  margin: 0;
  font-family: 'IBM Plex Sans', sans-serif;
}
html, body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100%;
  background: url("../resources/img/windows-xp.jpg") no-repeat center/cover;
  overflow: hidden;
}
footer#footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
}
footer#footer img {
  width: 100%;
  display: block;
  margin: 0;
}
span.start-btn {
  position: absolute;
  left: 0;
  width: 100%;
  max-width: calc(100% - 95vw);
  cursor: pointer;
}
.error {
  position: absolute;
  width: 494px;
  height: 142px;
  padding: 2px;
  background-color: #e8e8d8;
  border: 1px outset #dedede;
  cursor: move;
  animation: display 0.2s;
  animation-fill-mode: forwards;
}
.title {
  position: relative;
  width: 100%;
  height: 30px;
  margin: 0 auto;
  color: #fff;
  text-shadow: 0 0 #fff;
  line-height: 30px;
  background-image: linear-gradient(left, #0050e0, #3890f8);
  background-image: -webkit-linear-gradient(left, #0050e0, #3890f8);
}
button.close-button {
  position: absolute;
  top: 2px;
  right: 2px;
  width: 25px;
  height: 25px;
  color: #000;
  text-align: center;
  font-weight: bold;
  background: #e8e8d8;
}
.message {
  width: 100%;
  margin-top: 25px;
  margin-left: 10px;
  font-family: Arial, sans-serif;
  font-size: 14px;
}
.message img {
  float: left;
  margin-top: -15px;
  margin-right: 20px;
}
button.ok {
  position: absolute;
  width: 100px;
  height: 27px;
  background: #e8e8d8;
  border: 1px solid #2d2d2d;
  box-shadow: inset -1px -1px 2px rgb(0 0 0 / 70%);
  bottom: 15px;
  left: 50%;
  transform: translateX(-50%);
}
.start-menu-win {
  position: fixed;
  bottom: 18px;
  left: 0;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.start-menu-win.active-menu {
  opacity: 1;
}
</style>