@charset "utf-8";
@import url('https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif+KR:wght@400;500;600&family=Silkscreen:wght@700&family=VT323&display=swap');

/* reset */
*{margin:0; padding:0; box-sizing: border-box;}
ul,li{list-style: none;}
a{text-decoration: none; color:#000;}
button{
  background: none;
  border:none;
  cursor: pointer;
}
html{
  font-size: 0.625em;
}
body{
  font-family: 'Noto Serif KR', serif;
  line-height:1; 
}
.clearfix:after{
  content:"";
  display: block;
  clear:both;
}
.ir_pm{
  overflow: hidden;
  text-indent: -9999em;
  white-space: nowrap;
}
.screen_out{
  position: absolute;
  top:-9999em;
  left:-9999em;
}