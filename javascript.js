
var imgIndex=1;
var image=document.getElementById('image');
var imgArray=["book-1421097_960_720.jpg","abc.jpeg","books-922321_960_720.jpg","self-improvement-books.jpg"]

function nextImg(){	
	image.setAttribute("src",imgArray[imgIndex]);
	imgIndex++;

	if (imgIndex>=imgArray.length) {
				imgIndex=0;
	}
}
setInterval(nextImg,3000);
