#!/usr/bin/python3
import os

path = "images"
headerPath = "../parts/_header.html"
header = open(headerPath, 'r')
header = header.read()
footerPath = "../parts/footer.html"
footer = open(footerPath, 'r')
footer = footer.read()

def pageHeader(header):
    print ("Content-type:text/html\r\n\r\n")
    print ('<html><head>')
    print(header)
    print('<link rel="stylesheet" href="gallery.css">')
    print ('<title>VRS Gallery</title>')
    print ('</head><body>')

def pageFooter(footer):
    print('<script src="/assets/js/jquery.min.js"></script>')
    print('<script src="/assets/js/browser.min.js"></script>')
    print('<script src="/assets/js/breakpoints.min.js"></script>')
    print('<script src="/assets/js/util.js"></script>')
    print('<script src="/assets/js/main.js"></script>')
    print('<script src="gallery.js"></script>')
    print(footer)
    print ('</body></html>')

def slides(images):
    print('<div class="slideshow-container">') 
    imageCount = len(os.listdir(images))
    imageNumber = 0
    for image in os.listdir(images):
        imageNumber += 1
        print('<div class="mySlides fade">')
        print('<div class="numbertext">' + str(imageNumber) + '/' + str(imageCount) + '</div>')
        print('<img src="' + images + '/' + image + '"style="width:90%;margin-top:50px;margin-left:50px">')
        #print('<div class="text">Caption Text</div>')
        print('</div>')
    print('<a class="prev" onclick="plusSlides(-1)">&#10094;</a>')
    print('<a class="next" onclick="plusSlides(1)">&#10095;</a>')
    print('</div><br>')
    print('<div style="text-align:center">')
    for i in range(imageCount):
        print('<span class="dot" onclick="currentSlide(' + str(i+1) + ')"></span>')
    print('</div>')

pageHeader(header)
slides(path)
pageFooter(footer)
