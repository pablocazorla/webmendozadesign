<?php if(extension_loaded("zlib")){ob_start("ob_gzhandler");} header("Content-type: text/css"); ?>/* RESET */html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
/* NORMALIZE */article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden],template{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background:transparent}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:0.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}*:focus {outline: 0}/*RESET*/html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
/* BOX-SIZING */*, *:before, *:after {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
/* CLEARFIX */.clearfix:before,.row:before,.clearfix:after,.row:after{content:"";display:table}.clearfix:after,.row:after{clear:both}.clearfix,.row{zoom:1}/* STYLE */
body{
	font-family: 'Raleway', sans-serif;
}
h1{
	font-size: 30px;line-height: 1.8em;
	font-family: 'Roboto Slab', serif;
}

#shell.rendered{
	position: fixed;
	z-index: 1;
	top: 0;bottom: 0;left: 0;right: 0;
	overflow: hidden;
}
.frame{
	width: 100%;
	height: 1050px;
	overflow: hidden;
	position:relative;
	color:#FFF;
}
#shell.rendered .frame{
	position:absolute;
}
.fixed{
	position:relative;
}
#shell.rendered .frame .fixed{
	position:absolute;
	top: 0;left: 0;right: 0;
}
.square{
	position:absolute;
	top:50%;left:50%;
	margin-left:-400px;
	width:800px;
/*
	-webkit-transition: margin-top .1s;
	-ms-transition: margin-top .1s;
	transition: margin-top .1s;*/
}
.square img{
	display: block;
	width: auto;
	height: auto;
	max-width: 100%;
	margin: 0 auto;
}
.square-text{
	text-align: center;
}

.square-text h2{
	font: 60px/1em 'Roboto Slab', serif;
	margin-bottom:15px;
}
.square-text p{
	font-size:24px;
	max-width: 65%;
	margin:0 auto;
}

/* Small 1 *************************/
.small-1 .square{
	margin-left:-300px;
	width:600px;
}
.small-1 .square-text h2{
	font-size:34px;
}
.small-1 .square-text p{
	font-size:20px;
}

/* Small 2 *************************/
.small-2 .square{
	margin-left:-200px;
	width:400px;
}
.small-2 .square-text h2{
	font-size:26px;
}
.small-2 .square-text p{
	font-size:16px;
}

/* Small 3 *************************/
.small-3 .square{
	margin-left:-125px;
	width:250px;
}
.small-3 .square-text h2{
	font-size:20px;
}
.small-3 .square-text p{
	max-width: 90%;
	font-size:14px;
}

/****************************************/
.square-text h2,
.square-text p{
	line-height: 1em;
}

#frame-design{
	background-color: #19a856;
}

<?php if(extension_loaded("zlib")){ob_end_flush();}?>