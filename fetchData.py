import sys
import base64
import mysql.connector
from tabulate import tabulate
from Cryptodome.Cipher import AES 
from Cryptodome.Util import Counter
from datetime import datetime, timezone

DB_HOST = 'localhost'
DB_USER = 'root'
DB_PASS = ''
DB_NAME = 'ibm'
AES_PASSPHRASE = 'JaNdRgUkX2r5u8x/A?D(G+KbPeShVmYq'
DATETIME_FORMAT = '%d %b %Y %H:%M:%S'

def getDateTime():
    return f'[{datetime.now().strftime(DATETIME_FORMAT)} {datetime.now(timezone.utc).astimezone().tzinfo}]\t'

def decryptData(cipherText, initVector, userPassphrase = AES_PASSPHRASE):
    decodedCipherText = base64.b64decode(bytes(cipherText + '==', 'utf-8'))
    bytesPassphrase = bytes(userPassphrase, 'utf-8')
    decodedIV = base64.b64decode(bytes(initVector + '==', 'utf-8'))
    counterObject = Counter.new(128, initial_value = int.from_bytes(decodedIV, 'big'))
    cipherValue = AES.new(bytesPassphrase, AES.MODE_CTR, counter = counterObject)
    return cipherValue.decrypt(decodedCipherText).decode()

if __name__ == "__main__":
    chosenTable, headersList = 'emails', ['ID', 'IV', 'Message ID', 'Recipient\'s Name', 'Email Subject', 'Verification Code', 'TimeStamp']
    # chosenTable, headersList = 'users', ['ID', 'IV', 'Name', 'Mobile', 'Email', 'Role', 'Status', 'Salt', 'Password', 'Accessed', 'Last Login ID', 'Last Login', 'Security Question #01', 'Security Answer #01', 'Security Question #02', 'Security Answer #02', 'Security Question #03', 'Security Answer #03', 'TimeStamp']

    print(f'{getDateTime()}Initiating connection to database ...')
    try:
        dbConnection = mysql.connector.connect(host = DB_HOST, user = DB_USER, passwd = DB_PASS, database = DB_NAME)
    except mysql.connector.errors.InterfaceError:
        print(f'{getDateTime()}Connection to database failed. Please try again!')
        sys.exit(0)

    dbCursor = dbConnection.cursor()
    dbCursor.execute(f'SELECT * FROM `{chosenTable}`;')
    dbResult = dbCursor.fetchall()
    print(f'{getDateTime()}Retrieved {len(dbResult)} accounts.')
    print(f'{getDateTime()}Initiaing decryption on {len(dbResult)} accounts ...')

    mainDataList = []
    for userAccount in dbResult:
        userDataList, userIV = [], userAccount[1]
        print(userAccount)
        for i in userAccount:
            try:
                userDataList.append(decryptData(i, userIV))
            except Exception:
                userDataList.append(i)
        
        mainDataList.append(userDataList)
    
    print(tabulate(mainDataList, headers = headersList, tablefmt='psql'))
