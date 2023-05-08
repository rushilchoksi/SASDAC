import uploadData
from parseImage import parseOCR
from rest_framework import status
from serveData import serveEndpoint
from django.shortcuts import redirect
from billDetails import fetchRequiredData
from readPDF import parseResume, parseRaw
from rest_framework.response import Response
from rest_framework.decorators import api_view

def getXPATHDetails(webDriver, xPathExpression):
    return webDriver.find_elements(by = By.XPATH, value = xPathExpression)[0].text

@api_view(['GET'])
def getBillDetails(request):
    authToken = request.headers.get('Authorization')
    if authToken == None:
        return Response({'success': False, 'error': 'Forbidden'}, status=status.HTTP_403_FORBIDDEN)
    else:
        if authToken.split(' ')[1] == '6d82549b48a8b079f618ee9c51a6dfb59c7e2196':
            clientID = request.query_params.get('clientID')
            if clientID == None:
                return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_400_BAD_REQUEST)
            else:
                otherParams = request.query_params.get('otherParams')
                if otherParams == None:
                    jsonDataDict = fetchRequiredData(clientID, 'ALL')
                else:
                    jsonDataDict = fetchRequiredData(clientID, otherParams)
                
                if jsonDataDict['success']:
                    s3UploadStatus = uploadData.uploadFile(jsonDataDict, 'Get Bill Details')
                    jsonDataDict['S3'], jsonDataDict['S3FileName'] = s3UploadStatus['Status'], s3UploadStatus['fileName']
                return Response(jsonDataDict)
        else:
            return Response({'success': False, 'error': 'Forbidden'}, status=status.HTTP_403_FORBIDDEN)

@api_view(['GET'])
def parseResumeData(request):
    resumeFilePath = request.query_params.get('filePath')
    if resumeFilePath == None:
        return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_400_BAD_REQUEST)
    else:
        otherParams = request.query_params.get('otherParams')
        if otherParams == None:
            jsonDataDict = parseResume(resumeFilePath, 'ALL')
        else:
            jsonDataDict = parseResume(resumeFilePath, otherParams)
        
        if jsonDataDict['success']:
            s3UploadStatus = uploadData.uploadFile(jsonDataDict, 'Parse Resume Data')
            jsonDataDict['S3'], jsonDataDict['S3FileName'] = s3UploadStatus['Status'], s3UploadStatus['fileName']
        return Response(jsonDataDict)
    
@api_view(['GET'])
def parseRawData(request):
    resumeFilePath = request.query_params.get('filePath')
    if resumeFilePath == None:
        return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_400_BAD_REQUEST)
    else:
        jsonDataDict = parseRaw(resumeFilePath)
        if jsonDataDict['success']:
            s3UploadStatus = uploadData.uploadFile(jsonDataDict, 'Parse Raw Data')
            jsonDataDict['S3'], jsonDataDict['S3FileName'] = s3UploadStatus['Status'], s3UploadStatus['fileName']
        return Response(jsonDataDict)

@api_view(['GET'])
def parseOCRData(request):
    imageFilePath = request.query_params.get('filePath')
    if imageFilePath == None:
        return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_400_BAD_REQUEST)
    else:
        jsonDataDict = parseOCR(imageFilePath)
        if jsonDataDict['success']:
            s3UploadStatus = uploadData.uploadFile(jsonDataDict, 'Parse OCR Data')
            jsonDataDict['S3'], jsonDataDict['S3FileName'] = s3UploadStatus['Status'], s3UploadStatus['fileName']
        return Response(jsonDataDict)

@api_view(['GET'])
def serveFile(request):
    authToken = request.query_params.get('authToken')
    if authToken == None:
        return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_403_FORBIDDEN)
    else:
        fileName = request.query_params.get('fileName')
        if fileName == None:
            return Response({'success': False, 'error': 'Missing endpoint parameters'}, status=status.HTTP_403_FORBIDDEN)
        
        apiResponse = serveEndpoint(authToken, fileName)
        return redirect(apiResponse['endpointURL'])