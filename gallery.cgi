#!/usr/bin/python3
import os

path = ("gallery")

print ("Content-type:text/html\r\n\r\n")
print ('<html>')
print ('<head>')
print ('<title>VRS Gallery</title>')
print ('</head>')
print ('<body>')
for filename in os.listdir(path):
  print ('<img src=\"' + path + '/' + filename + '\">')
print ('</body>')
print ('</html>')
