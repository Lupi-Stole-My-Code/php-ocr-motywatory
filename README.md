# php-ocr-motywatory


Installation :

sudo apt-get install tesseract-ocr

Install a language file (e.g. -eng, -deu, -fra, -ita, -ndl, -por, -spa, …)

(Polish) 

sudo apt-get install tesseract-ocr-pol

Run OCR on the scanned file

tesseract scan.png scanned.txt -l pol
