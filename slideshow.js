

var myImage=document.getElementById("myPhoto");

var imageArray=["photos/caliber.jpg", "photos/slide_2.jpg", "photos/stop.jpg", "photos/thane.jpg"];

var imageIndex=0;

function changeImage () {
	myPhoto.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex>=imageArray.length) {
		imageIndex=0;
	}
}

var intervalHandle = setInterval(changeImage, 2000);

myPhoto.onClick=function(){
	clearInterval(intervalHandle);
}