document.addEventListener("DOMContentLoaded", init, false);

var imageFilenamesArray ;  
var i;                     
var image;

function init()
 {
      image = document.getElementById("img1");

      imageFilenamesArray = [ "images/martialartsmaster.jpg", "images/banner2.jpg", "images/banner3.jpg" ]; 

      i = 0;                                                  
      rotate();                                               
 }

function rotate()
{
  image.src = imageFilenamesArray[i];
  if ( i === (imageFilenamesArray.length - 1) )
     i=0;
  else
     i++;
	 
  setTimeout(rotate, 4000);
}