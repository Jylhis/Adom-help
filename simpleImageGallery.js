/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com/
Created by: Jay M. Rumsey, OD | http://www.nova.edu/~rumsey */

var num=0;

imgArray = [
['minecraft.PNG','information', 'notch tykkää adomista'],
['attack.png','interference','hyökkäys'],
['adomlogo.PNG','message','adomlogo']
]

function slideshow(slide_num) {
document.getElementById('mypic').src=imgArray[slide_num][0];
document.getElementById('mypic').alt=imgArray[slide_num][1];
document.getElementById('burns').innerHTML=imgArray[slide_num][2];
}

function slideshowUp() {
num++;
num = num % imgArray.length;
slideshow(num);
}

function slideshowBack() {
num--;
if (num < 0) {num=imgArray.length-1;}
num = num % imgArray.length;
slideshow(num);
}