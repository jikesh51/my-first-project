var imgIndex= 1;
function imgSliding(){

	var myImage= document.getElementById("image");
	var imgArray= ["image3.jpg","image4.jpg", "image5.jpg","image6.jpg","image7.jpg","image8.jpg","image9.jpg","image10.jpg","image11.jpeg","image12.jpg"]
	myImage.setAttribute("src",imgArray[imgIndex]);
	imgIndex ++;
	if (imgIndex>=imgArray.length) {
		imgIndex= 0;
	}
}
setInterval(imgSliding, 3000);