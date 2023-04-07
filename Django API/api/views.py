import uploadData
from rest_framework import status
from billDetails import fetchRequiredData
from readPDF import parseResume, parseRaw
from rest_framework.response import Response
from rest_framework.decorators import api_view
from rest_framework.authtoken.models import Token

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
                jsonDataDict = fetchRequiredData(clientID)
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
        jsonDataDict = parseResume(resumeFilePath)
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
        s3UploadStatus = uploadData.uploadFile(jsonDataDict, 'Parse Raw Data')
        jsonDataDict['S3'], jsonDataDict['S3FileName'] = s3UploadStatus['Status'], s3UploadStatus['fileName']
        return Response(jsonDataDict)
    
@api_view(['GET'])
def getCredentials(request):
    token = Token.objects.create(user = 'Rushil Choksi')
    print(token.key)