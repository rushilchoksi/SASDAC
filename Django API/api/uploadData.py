import os
import json
import time
import boto3
from cryptography.fernet import Fernet
from datetime import datetime, timedelta

AWS_ACCESS_KEY_ID = "AKIAZPBI5D7RFAD7KVEF"
AWS_SECRET_ACCESS_KEY = "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"
AWS_S3_BUCKET_NAME = "ibm.bucket"
AWS_S3_ENCRYPTION_KEY = b"6saV6yTVB3IZ0khasdthFhpuutgWAMh-byYzof08FZ4="

def uploadFile(jsonData, uriEndpoint):
    outputFile = f'{uriEndpoint} ({datetime.now()}).json'
    with open(outputFile, 'w') as jsonFile:
        encryptedData = Fernet(AWS_S3_ENCRYPTION_KEY).encrypt(json.dumps(jsonData).encode('utf-8'))
        jsonFile.write(encryptedData.decode('utf-8'))

    awsS3Connection = boto3.client("s3", aws_access_key_id = AWS_ACCESS_KEY_ID, aws_secret_access_key = AWS_SECRET_ACCESS_KEY)
    try:
        awsS3Connection.upload_file(outputFile, AWS_S3_BUCKET_NAME, os.path.basename(outputFile))
        return {'Status': True, 'fileName': outputFile}
    except Exception:
        return False

if __name__ == "__main__":
    startTime = time.time()
    uriEndpoint = input("Enter URI endpoint: ")
    jsonData = input("Enter JSON dictionary: ")
    awsS3UploadStatus = uploadFile(jsonData, uriEndpoint)
    print(f'Status: {awsS3UploadStatus}')
    print(f'\nJob completed successfully, time elapsed: {timedelta(seconds = int(time.time() - startTime))} HH:MM:SS\n')