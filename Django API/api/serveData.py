import json
import boto3
import requests
from base64 import b64decode
from urllib.parse import unquote
from cryptography.fernet import Fernet

AWS_ACCESS_KEY_ID = "AKIAZPBI5D7RFAD7KVEF"
AWS_SECRET_ACCESS_KEY = "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"
AWS_S3_BUCKET_NAME = "ibm.bucket"
AWS_S3_ENCRYPTION_KEY = b"6saV6yTVB3IZ0khasdthFhpuutgWAMh-byYzof08FZ4="
SHARED_DIRECTORY_PATH = "/Applications/XAMPP/xamppfiles/htdocs/ibm/uploads"

def serveEndpoint(authToken, fileName):
    try:
        with open(f'{SHARED_DIRECTORY_PATH}/sessionData.json', 'r') as sessionData:
            sessionIDJSON = json.load(sessionData)
        
        apiHeaders = {"Cookie": "PHPSESSID={}".format(sessionIDJSON['sessionID'])}
        apiResponse = requests.get(f'http://localhost/ibm/authAPI?authToken={authToken}', headers = apiHeaders)
        if apiResponse.json()['authStatus']:
            outputFileName = unquote(b64decode(fileName)).replace('+', ' ')
            awsS3Connection = boto3.client("s3", aws_access_key_id = AWS_ACCESS_KEY_ID, aws_secret_access_key = AWS_SECRET_ACCESS_KEY)
            awsResponse = awsS3Connection.get_object(Bucket = AWS_S3_BUCKET_NAME, Key = outputFileName)
            fileContent = awsResponse['Body'].read().decode('utf-8')
            decryptedData = json.loads(Fernet(AWS_S3_ENCRYPTION_KEY).decrypt(fileContent).decode('utf-8'))
            print(decryptedData, type(decryptedData))
            with open(f'{SHARED_DIRECTORY_PATH}/{outputFileName}', 'w') as jsonFile:
                json.dump(decryptedData, jsonFile)
            
            return {'success': True, 'endpointURL': f'http://localhost/ibm/serveFile?fileName={fileName}'}

    except FileNotFoundError:
        return {'error': 403, 'message': 'Access to this resource is forbidden'}