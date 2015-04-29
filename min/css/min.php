<?php if(extension_loaded("zlib")){ob_start("ob_gzhandler");} header("Content-type: text/css"); ?>/* RESET */html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
/* NORMALIZE */article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden],template{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background:transparent}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:0.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}*:focus {outline: 0}/*RESET*/html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
/* BOX-SIZING */*, *:before, *:after {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
/* CLEARFIX */.clearfix:before,.row:before,.clearfix:after,.row:after{content:"";display:table}.clearfix:after,.row:after{clear:both}.clearfix,.row{zoom:1}/* Basics *************************/
body{
	font-family: 'Open Sans', sans-serif;
	overflow:hidden;
	line-height: 1.4em;
	color:#333;
}

h1{
	font-size: 50px;line-height: 1.4em;
	font-family: 'Roboto Slab', serif;
	margin-bottom: 12px;
}
h2{
	font-size: 22px;line-height: 1.4em;
	font-weight: 300;
}
h3{
	font-size: 22px;line-height: 1.4em;
	font-family: 'Roboto Slab', serif;
	margin-bottom: 20px;
}

/* Form */
label {
  margin-right: 0.5em;
  display: inline-block;
  font-size: .9em;
}
label .required {
  color: #02a200;
}
input[type="text"],
textarea,
input[type="tel"],
input[type="email"],
input[type="password"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="file"],
input[type="number"],
input[type="color"],
input[type="search"],
input[type="url"],
select {
  padding: 0.4em;
  line-height: 1.618em;
  outline: none;
  background-color: #ffffff;
  color: #363636;
  border: 1px solid #cccccc;
  border-radius: 2px;
  width: 100%;
}
input[type="text"]:focus,
textarea:focus,
input[type="tel"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="file"]:focus,
input[type="number"]:focus,
input[type="color"]:focus,
input[type="search"]:focus,
input[type="url"]:focus {
  border-color: #8f8f8f;
}
input[disabled],
textarea[disabled] {
  opacity: .6;
}
textarea {
  resize: none;
}
::-webkit-input-placeholder {
  opacity: 1;
  color: #cccccc;
}
:-moz-placeholder {
  opacity: 1;
  color: #cccccc;
}
::-moz-placeholder {
  opacity: 1;
  color: #cccccc;
}
:-ms-input-placeholder {
  opacity: 1;
  color: #cccccc;
}
/* radio & checkbox */
input[type="radio"],
input[type="checkbox"] {
  display: none;
}
input[type="radio"] + label,
input[type="checkbox"] + label {
  cursor: pointer;
  line-height: 1.618em;
  padding: 0.4em 0;
}
input[type="radio"] + label:before,
input[type="checkbox"] + label:before {
  cursor: pointer;
  content: '';
  display: inline-block;
  border: solid 1px #02a200;
  background-color: #ffffff;
  width: 1em;
  height: 1em;
  position: relative;
  top: 0.1em;
  margin-right: .5em;
  -webkit-transition: background-color 0.2s;
  -ms-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
input[type="radio"]:checked + label:before,
input[type="checkbox"]:checked + label:before {
  background-color: #02a200;
  box-shadow: inset 0 0 0 0.15em #ffffff;
}
input[type="radio"] + label:before {
  border-radius: 60%;
}
input[type="checkbox"] + label:before {
  width: 1.2em;
  height: 1.2em;
  top: 0.2em;
}
/* Button */
a.button,
.button,
.submit,
input[type="submit"],
input[type="button"],
input[type="reset"],
input.button,
button {
  position: relative;
  display: inline-block;
  font-size: 1.5em;
  padding: 0.4em 2em;
  line-height: 1.618em;
  color: #ffffff;
  text-align: center;
  border: none;
  text-decoration: none;  
  cursor: pointer;
  overflow: visible;
  width: auto;
  white-space: nowrap;
  background-color: #02a200;
  border: solid 1px #02a200;
  -webkit-appearance: none;
  -webkit-font-smoothing: antialiased;
  text-shadow: none;
  box-shadow: none;
  border-radius: 4px;
  -webkit-transition: all .1s;
  -ms-transition: all .1s;
  transition: all .1s;
  margin:0;
}
.button:hover,
.submit:hover,
input[type="submit"]:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input.button:hover,
button:hover {
  text-decoration: none;
  background-color: #02c200;
  border-color: #02c200;
  color: #ffffff;
}
.button:active,
.submit:active,
input[type="submit"]:active,
input[type="button"]:active,
input[type="reset"]:active,
input.button:active,
button:active {
  background-color: #029200;
  border-color: #029200;
  color: #ffffff;
}

/* System *************************************/
#shell{
	overflow:scroll;
	overflow-x:hidden;
	position: fixed;
	z-index: 1;
	top: 0;bottom: 0;left: 0;right: 0;

	background-color: #333;
}
.frame{
	position: relative;
	width: 100%;
	height: 100%;
	overflow: hidden;
	margin: 0 auto;	
}
.frame.animatecss{
	-webkit-transition: all .7s;
	-ms-transition: all .7s;
	transition: all .7s;
}
.frame-content{
	width: 100%;
	height: 100%;
	-webkit-transform-origin: 0 0;
	-ms-transform-origin: 0 0;
	transform-origin: 0 0;	
}
.animatecss .frame-content{
	-webkit-transition: transform .7s;
	-ms-transition: transform .7s;
	transition: transform .7s;	
}
.frame-content .tex{
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
}
.frame-content,
.frame-content .tex{
	background-image: url('../img/tex.png');
	background-attachment:fixed;
}
.frame-content .blueprint-tex{
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	background-image: url('../img/blueprint-tex.png');
	background-attachment:fixed;
}


/* Common *************************/
.wrap,
.wrap-centered{max-width: 1358px;width:92%}
.wrap{margin: 0 auto}
.wrap-centered{
	position: absolute;z-index: 11;
	top: 50%;left:50%;	
	margin-top:-100px;
	margin-left:-679px;
	text-align: center;
}
.frame-content.scrolled{
	overflow-x: hidden;
	overflow-y: scroll;
}
.slide{
	margin:0 65px;
	position:relative;
	overflow: hidden;
	height:440px;
}
.slide .slw{
	position: absolute;
	width: 100%;
	height: 100%;
	top:0;left: 100%;
}
.slide .slw.current{left: 0}
.slide .slw img{
	display: block;
	width:auto;height: auto;
	max-width: 100%;
	margin: 0 auto 10px;
}
.slide-arrow{
	position: absolute;
	top:50%; margin-top:-56px;
	width:48px;height: 112px;
	background: url('../img/arrows.png') 0 0 no-repeat;
	cursor:pointer;
}
.slide-arrow.to-left{
	left:0;
}
.slide-arrow.to-right{
	right:0;
	background-position: -48px 0;
}
.slide-nav{
	position: absolute;
	left:20px;right:20px;
	bottom:-26px;
	text-align: center;
}
.slide-nav span{
	display: inline-block;
	width: 16px;height: 16px;
	border-radius: 10px;
	border:solid 2px #666;
	margin: 0 2px;
	cursor: pointer;
	-webkit-transition: background-color .3s;
	-ms-transition: background-color .3s;
	transition: background-color .3s;
}
.slide-nav span.current{
	background-color: #666;
	cursor: default;
}

/* HEADER ******************************/
.header-main{
	position: fixed;z-index: 100;
	top: 28px;left: 3%;right: 3%;
	height: 60px;line-height: 60px;
}
.header-main .brand{
	position: absolute;
	top: 0;left: 0;
	width: 100px;
	height: 60px;
	background-color: rgba(0,0,0,.1);
}
#menu-btn{
	position: absolute;
	top: 0;right: 0;
	width: 80px;
	height: 60px;
	font-size: 22px;
	cursor:pointer;
	text-align: center
}


/* FRAMES ***********************************************/
/* FRAME 0 */
#home{
	background-color: #FFF;
}
#home h2{
	color: #666;
	font-size: 32px;line-height: 1.4em;
}

/* FRAME 1 */
#what{
	background-color: #003060;
}
#what h1{
	color: #EEE;
}
#what h2{
	color: #AAA;
}
#slide-what{	
	background-color: #003060;
}
#slide-what .slw-col{
	float: left;
	width: 33.33333333%;
	padding: 20px 68px 0;
}
#slide-what .slw .slw-col img{
	margin-bottom: 36px;
}
#slide-what .slw-col p{
	color: #BBB;
	font-size: 20px;line-height: 1.2em;
	font-weight: 300;
}

/* FRAME 2 */
#examples{
	background-color: #aeaeae;
}

/* FRAME 3 */
#about{
	background-color: #d9d9d9;
}

/* FRAME 4 */
#prop{
	background-color: #f2f2f2;
}
.prop-header{
	text-align: center;
	padding-top: 160px;
	margin-bottom: 30px;
}
.prop-paper{
	max-width: 630px;
	margin: 0 auto;
	background-color: #FFF;
	box-shadow: 0 1px 3px rgba(0,0,0,.2);
	margin-bottom: 60px;
	padding: 60px 88px;
	color: #555;
}
.prop-paper h3{
	color: #111;
}

.prop-paper section{
	margin-bottom: 20px;
}
.prop-paper p{
	margin-bottom: 5px;
}
.prop-paper input,
.prop-paper textarea{
	margin-bottom: 20px;
	color: #111;
}
.prop-paper textarea{
	min-height: 300px;
}
.prop-paper input[type=submit]{
	color:#FFF;
}<?php if(extension_loaded("zlib")){ob_end_flush();}?>