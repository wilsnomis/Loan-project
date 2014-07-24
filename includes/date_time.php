          <strong>Time:</strong>&nbsp;&nbsp;&nbsp;
          <img src="imageclock/digitblank.gif" name="hourstens" border="0" id="hourstens" /><img src="imageclock/digitblank.gif" name="hoursones" border="0" id="hoursones" /><img src="imageclock/digitblank.gif" name="colon" border="0" id="colon" /><img src="imageclock/digitblank.gif" name="minstens" border="0" id="minstens" /><img src="imageclock/digitblank.gif" name="minsones" border="0" id="minsones" /><img src="digitblank.gif" name="ampm" width="26" height="20" border="0" id="ampm" />
          
        <script language="JavaScript" type="text/javascript">
  if (document.images) { 
    digit1 = new Image; 
    digit1.src = "includes/imageclock/digit1.gif"; 
	digit2 = new Image; 
    digit2.src = "includes/imageclock/digit2.gif";
	digit3 = new Image; 
    digit3.src = "includes/imageclock/digit3.gif";
	digit4 = new Image; 
    digit4.src = "includes/imageclock/digit4.gif";
	digit5 = new Image; 
    digit5.src = "includes/imageclock/digit5.gif";
	digit6 = new Image; 
    digit6.src = "includes/imageclock/digit6.gif";
	digit7 = new Image; 
    digit7.src = "includes/imageclock/digit7.gif";
	digit8 = new Image; 
    digit8.src = "includes/imageclock/digit8.gif";
	digit9 = new Image; 
    digit9.src = "includes/imageclock/digit9.gif";
	digit0 = new Image; 
    digit0.src = "includes/imageclock/digit0.gif";
	digitam = new Image; 
    digitam.src = "includes/imageclock/digitam.gif";
	digitpm = new Image; 
    digitpm.src = "includes/imageclock/digitpm.gif";
	digitcolon = new Image;
	digitcolon.src = "includes/imageclock/digitcolon.gif";
	digitblank = new Image;
	digitblank.src = "includes/imageclock/digitblank.gif";
	}
	
function UpdateClock(){
    var time= new Date();
    hours = time.getHours();
    mins = time.getMinutes();
    if (!document.images) return;
	digit = mins % 10;
    document.images.minsones.src=eval("digit"+digit+".src");
	digit = (mins - (mins % 10))/10;
	document.images.minstens.src=eval("digit"+digit+".src");
	if (hours > 12)
	  document.images.ampm.src=digitpm.src;
	else
	  document.images.ampm.src=digitam.src;
	if (hours > 12) hours = hours - 12;
	digit = hours % 10;
	document.images.hoursones.src=eval("digit"+digit+".src");
	digit = (hours - (hours % 10))/10;
	document.images.hourstens.src=eval("digit"+digit+".src");
	document.images.colon.src=digitcolon.src;
	setTimeout("UpdateClock()",30000);

  }

   UpdateClock();
            </script>