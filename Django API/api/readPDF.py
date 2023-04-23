import time
import base64
import pdfplumber
from datetime import timedelta
from urllib.parse import unquote

def parseRaw(file_path):
    resumeDataDict = {}
    try:
        with pdfplumber.open(file_path) as pdf:
            resumeDataDict['success'] = True
            resumeDataDict['pages'] = len(pdf.pages)

            pdfData = ''
            for pageData in range(resumeDataDict['pages']):
                tempPageNum = pdf.pages[pageData]
                pageText = tempPageNum.extract_text()
                pdfData += pageText

            resumeDataDict['data'] = pdfData
    except FileNotFoundError:
        resumeDataDict['success'] = False
        resumeDataDict['message'] = 'File not found, please try again!'
    return resumeDataDict
        

def parseResume(file_path, otherParams):
    resumeDataDict = {}
    try:
        with pdfplumber.open(file_path) as pdf:
            resumeDataDict['success'] = True
            for pageData in range(len(pdf.pages)):
                lineData = []
                tempPageNum = pdf.pages[pageData]
                pageText = tempPageNum.extract_text()
                pageLines = pageText.split('\n')

                if otherParams == 'ALL':
                    resumeDataDict['pages'] = len(pdf.pages)
                    for indexVal, tempLine in enumerate(pageLines):
                        if pageData == 0:
                            resumeDataDict['name'] = pageLines[0]
                        if 'email' in tempLine.lower():
                            resumeDataDict['email'] = tempLine.split(': ')[-1]
                        if 'phone' in tempLine.lower():
                            resumeDataDict['phone'] = tempLine.split(': ')[-1]
                        if 'portfolio' in tempLine.lower():
                            resumeDataDict['portfolio'] = tempLine.split(': ')[-1]
                        if 'github' in tempLine.lower():
                            resumeDataDict['github'] = tempLine.split(': ')[1].split(' ')[0]
                        if 'medium' in tempLine.lower():
                            resumeDataDict['medium'] = tempLine.split(': ')[1].split(' ')[0]
                        if 'linkedin' in tempLine.lower():
                            resumeDataDict['linkedin'] = tempLine.split(': ')[-1]
                        if 'education' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                        if 'skills and certifications' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                        if 'professional experience' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                        if 'volunteer experience' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                        if 'projects' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                        if 'achievements' in tempLine.lower():
                            lineData.append([pageData, indexVal])
                else:
                    decodedString = unquote(base64.b64decode(otherParams).decode("utf-8"))
                    attributesList = decodedString.replace('attributesNeeded[]=', '').split('&')
                    if 'pages' in attributesList:
                        resumeDataDict['pages'] = len(pdf.pages)
                    for indexVal, tempLine in enumerate(pageLines):
                        if pageData == 0 and 'name' in attributesList:
                            resumeDataDict['name'] = pageLines[0]
                        if 'email' in tempLine.lower() and 'email' in attributesList:
                            resumeDataDict['email'] = tempLine.split(': ')[-1]
                        if 'phone' in tempLine.lower() and 'phone' in attributesList:
                            resumeDataDict['phone'] = tempLine.split(': ')[-1]
                        if 'portfolio' in tempLine.lower() and 'portfolio' in attributesList:
                            resumeDataDict['portfolio'] = tempLine.split(': ')[-1]
                        if 'github' in tempLine.lower() and 'github' in attributesList:
                            resumeDataDict['github'] = tempLine.split(': ')[1].split(' ')[0]
                        if 'medium' in tempLine.lower() and 'medium' in attributesList:
                            resumeDataDict['medium'] = tempLine.split(': ')[1].split(' ')[0]
                        if 'linkedin' in tempLine.lower() and 'linkedin' in attributesList:
                            resumeDataDict['linkedin'] = tempLine.split(': ')[-1]
                        if 'education' in tempLine.lower() and 'education' in attributesList:
                            lineData.append([pageData, indexVal])
                        if 'skills and certifications' in tempLine.lower() and 'skills and certifications' in attributesList:
                            lineData.append([pageData, indexVal])
                        if 'professional experience' in tempLine.lower() and 'professional experience' in attributesList:
                            lineData.append([pageData, indexVal])
                        if 'volunteer experience' in tempLine.lower() and 'volunteer experience' in attributesList:
                            lineData.append([pageData, indexVal])
                        if 'projects' in tempLine.lower() and 'projects' in attributesList:
                            lineData.append([pageData, indexVal])
                        if 'achievements' in tempLine.lower() and 'achievements' in attributesList:
                            lineData.append([pageData, indexVal])

                lineData.append([pageData, len(pageLines)])
                for i in range(len(lineData)-1):
                    mainData, finalString = '', ''
                    for j in range(lineData[i][1], lineData[i+1][1]):
                        if j == lineData[i][1]:
                            mainData = pageLines[j].lower()
                        else:
                            finalString += pageLines[j]
                    resumeDataDict[mainData] = finalString
    except FileNotFoundError:
        resumeDataDict['success'] = False
        resumeDataDict['message'] = 'File not found, please try again!'
    return resumeDataDict

if __name__ == "__main__":
    startTime = time.time()
    filePath = input("Enter file path: ")
    jsonData = parseResume(filePath)
    print(jsonData)
    print(f'\nJob completed successfully, time elapsed: {timedelta(seconds = int(time.time() - startTime))} HH:MM:SS\n')