# Gallery

The photo gallery allows approved users to upload images to the images subdirectory via
ssh/sftp. The gallery page will update with the new images added.

## index.cgi
Contains a python script that generates the html for the gallery page. There are 3 functions
responsible for generating the page
* pageHeader(header):

    Argument header is a file containing the header data. pageHeader prints the header data,
    a link to the css file for the gallery and the title of the page
* pageFooter(footer):
    
    Argument footer is a file containing the footer data. pageFooter prints the footer data,
    and links to all the necessary js files.
* slides(images): 

    slides takes an argument images. images is the directory path to the images for the
    gallery. slides generates and prints the html for the all the images in the directory.