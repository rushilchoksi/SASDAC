import pandas as pd
import numpy as np
import PyPDF2
import textract
import re

filename = '/Users/rushilchoksi/Desktop/Applications/Rushil\'s Resume v4.pdf'

pdfFileObj = open(filename,'rb')               #open allows you to read the file
pdfReader = PyPDF2.PdfFileReader(pdfFileObj)   #The pdfReader variable is a readable object that will be parsed
num_pages = len(pdfReader.pages)                #discerning the number of pages will allow us to parse through all the pages


count = 0
text = ""
                                                            
while count < num_pages:                       #The while loop will read each page
    pageObj = pdfReader.pages[count]
    count +=1
    text += pageObj.extract_text()
    
#Below if statement exists to check if the above library returned #words. It's done because PyPDF2 cannot read scanned files.

if text != "":
    text = text
    
#If the above returns as False, we run the OCR library textract to #convert scanned/image based PDF files into text

else:
    text = textract.process('http://bit.ly/epo_keyword_extraction_document', method='tesseract', language='eng')

    # Now we have a text variable which contains all the text derived from our PDF file.

text = text.encode('ascii','ignore').lower() #Lowercasing each word

#keywords = re.findall(r"[a-zA-Z]\w+",text)
keywords = re.findall(b"[A-Za-z]",text)
len(keywords)

df = pd.DataFrame(list(set(keywords)),columns=['keywords'])

def weightage(word,text,number_of_documents=1):
    word_list = re.findall(word,text)
    number_of_times_word_appeared =len(word_list)
    tf = number_of_times_word_appeared/float(len(text))
    idf = np.log((number_of_documents)/float(number_of_times_word_appeared))
    tf_idf = tf*idf
    return number_of_times_word_appeared,tf,idf ,tf_idf

df['number_of_times_word_appeared'] = df['keywords'].apply(lambda x: weightage(x,text)[0])
df['tf'] = df['keywords'].apply(lambda x: weightage(x,text)[1])
df['idf'] = df['keywords'].apply(lambda x: weightage(x,text)[2])
df['tf_idf'] = df['keywords'].apply(lambda x: weightage(x,text)[3])

df = df.sort_values('tf_idf',ascending=True)
df.to_csv('Keywords.csv')
df.head(25)