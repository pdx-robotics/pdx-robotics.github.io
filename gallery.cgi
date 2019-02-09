#!/usr/bin/python3
import os

path = "gallery"
headerPath = "parts/_header.html"
header = open(headerPath, 'r')
header = header.readlines()
footerPath = "parts/footer.html"
footer = open(footerPath, 'r')
footer = footer.readlines()

print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
for line in header:
    print(line)
print ('<title>VRS Gallery</title>')
print ('</head>')
print ('<body>')
for filename in os.listdir(path):
  print ('<img src=\"' + path + '/' + filename + '\">')
print('<script src="/assets/js/jquery.min.js"></script>')
print('<script src="/assets/js/browser.min.js"></script>')
print('<script src="/assets/js/breakpoints.min.js"></script>')
print('<script src="/assets/js/util.js"></script>')
print('<script src="/assets/js/main.js"></script>')
for line in footer:
    print(line)
print ('</body>')
print ('</html>')
