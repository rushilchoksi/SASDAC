import json
import boto3
import requests
from base64 import b64decode
from urllib.parse import unquote
from django.http import HttpResponse

AWS_ACCESS_KEY_ID = "AKIAZPBI5D7RFAD7KVEF"
AWS_SECRET_ACCESS_KEY = "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"
AWS_S3_BUCKET_NAME = "ibm.bucket"

def serveEndpoint(authToken, fileName):
    try:
        with open('/Applications/XAMPP/xamppfiles/htdocs/ibm/uploads/sessionData.json', 'r') as sessionData:
            sessionIDJSON = json.load(sessionData)
        
        apiHeaders = {"Cookie": "PHPSESSID={}".format(sessionIDJSON['sessionID'])}
        apiResponse = requests.get(f'http://localhost/ibm/authAPI?authToken={authToken}', headers = apiHeaders)
        if apiResponse.json()['authStatus']:
            outputFileName = unquote(b64decode(fileName)).replace('+', ' ')
            awsS3Connection = boto3.client("s3", aws_access_key_id = AWS_ACCESS_KEY_ID, aws_secret_access_key = AWS_SECRET_ACCESS_KEY)

            fileURL = awsS3Connection.generate_presigned_url('get_object', Params={'Bucket': AWS_S3_BUCKET_NAME, 'Key': outputFileName}, ExpiresIn = 60)
            return HttpResponseRedirect(fileURL)

    except FileNotFoundError:
        return {'error': 403, 'message': 'Access to this resource is forbidden'}