import time
import traceback
from selenium import webdriver
from datetime import datetime, timedelta
from selenium.webdriver.common.by import By
from webdriver_manager.chrome import ChromeDriverManager

def getXPATHDetails(xPathExpression):
    return webDriver.find_elements(by = By.XPATH, value = xPathExpression)[0].text

startTime = time.time()
clientID = 71930202105 # 74813013473
driverOptions = webdriver.ChromeOptions();
driverOptions.add_argument("--headless")
webDriver = webdriver.Chrome(ChromeDriverManager().install(), options=driverOptions)
webDriver.get(f'https://ugvcl.info/UGBILL/BillHTML.php?cno={clientID}')

userDetailsMapping = {0: 'Name', 1: 'Address Line #01', 2: 'Address Line #02', 3: 'Village', 4: 'Taluka', 5: 'District'}
try:
    billingPeriod = getXPATHDetails('/html/body/table[1]/tbody/tr[4]/td/b')
    userDetails = getXPATHDetails('/html/body/table[2]/tbody/tr[1]/td[1]')
    subDivOffice = getXPATHDetails('/html/body/table[2]/tbody/tr[1]/td[3]/strong')
    routeCode = getXPATHDetails('/html/body/table[2]/tbody/tr[2]/td[2]/strong')
    billNum = getXPATHDetails('/html/body/table[2]/tbody/tr[3]/td[2]/strong')
    billDate = getXPATHDetails('/html/body/table[2]/tbody/tr[4]/td[2]/strong')
    lastPaymentDate = getXPATHDetails('/html/body/table[2]/tbody/tr[5]/td[2]/strong')

    federerCD = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[1]/b[1]')
    refererCD = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[1]/b[2]')

    tarrifValue = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[1]/strong')
    meterCode = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[2]/strong')
    hpkwValue = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[3]/strong')
    seasonalValue = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[4]/strong')
    daysValue = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[5]/strong')
    sdValue = getXPATHDetails('/html/body/table[2]/tbody/tr[7]/td[2]/table/tbody/tr/td[6]/strong')

    consumerNumber = getXPATHDetails('/html/body/table[3]/tbody/tr[2]/td[1]/strong')
    meterNumber = getXPATHDetails('/html/body/table[3]/tbody/tr[2]/td[2]/strong')

    phaseValue = getXPATHDetails('/html/body/table[3]/tbody/tr[4]/td[1]/strong')
    meterStatus = getXPATHDetails('/html/body/table[3]/tbody/tr[4]/td[2]/strong')

    presentActiveReading = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[2]/table/tbody/tr/td[1]/b')
    presentIMPReading = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[2]/table/tbody/tr/td[2]/b')
    presentRNReading = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[2]/table/tbody/tr/td[3]/b')
    presentEXPReading = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[2]/table/tbody/tr/td[4]/b')

    pastActiveReading = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[2]/table/tbody/tr/td[1]')
    pastIMPReading = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[2]/table/tbody/tr/td[2]/strong')
    pastRNReading = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[2]/table/tbody/tr/td[3]/strong')
    pastEXPReading = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[2]/table/tbody/tr/td[4]/strong')

    readingActiveDiff = getXPATHDetails('/html/body/table[3]/tbody/tr[8]/td[2]/table/tbody/tr/td[1]/strong')
    readingIMPDiff = getXPATHDetails('/html/body/table[3]/tbody/tr[8]/td[2]/table/tbody/tr/td[2]/strong')
    readingRNDiff = getXPATHDetails('/html/body/table[3]/tbody/tr[8]/td[2]/table/tbody/tr/td[3]/strong')
    readingEXPDiff = getXPATHDetails('/html/body/table[3]/tbody/tr[8]/td[2]/table/tbody/tr/td[4]/strong')

    mfValue = getXPATHDetails('/html/body/table[3]/tbody/tr[9]/td[2]/strong')
    totalConsumption = getXPATHDetails('/html/body/table[3]/tbody/tr[10]/td[2]/strong')
    averageConsumption = getXPATHDetails('/html/body/table[3]/tbody/tr[11]/td[2]/strong')
    maxDemand = getXPATHDetails('/html/body/table[3]/tbody/tr[12]/td[2]/strong')
    avgMaxDemand = getXPATHDetails('/html/body/table[3]/tbody/tr[13]/td[2]/strong')
    totalCompanyCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[14]/td[2]/strong')
    provisionalBillAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[15]/td[2]/strong')
    adjustmentAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[16]/td[2]/strong')

    lastThreeMonthsUnitM1Name = getXPATHDetails('/html/body/table[3]/tbody/tr[18]/td[2]/table/tbody/tr/td[1]')
    lastThreeMonthsUnitM1Unit = getXPATHDetails('/html/body/table[3]/tbody/tr[19]/td[2]/table/tbody/tr/td[1]/strong')
    lastThreeMonthsUnitM1BillAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[20]/td[2]/table/tbody/tr/td[1]/strong')
    lastThreeMonthsUnitM2Name = getXPATHDetails('/html/body/table[3]/tbody/tr[18]/td[2]/table/tbody/tr/td[2]')
    lastThreeMonthsUnitM2Unit = getXPATHDetails('/html/body/table[3]/tbody/tr[19]/td[2]/table/tbody/tr/td[2]/strong')
    lastThreeMonthsUnitM2BillAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[20]/td[2]/table/tbody/tr/td[2]/strong')
    lastThreeMonthsUnitM3Name = getXPATHDetails('/html/body/table[3]/tbody/tr[18]/td[2]/table/tbody/tr/td[3]')
    lastThreeMonthsUnitM3Unit = getXPATHDetails('/html/body/table[3]/tbody/tr[19]/td[2]/table/tbody/tr/td[3]/strong')
    lastThreeMonthsUnitM3BillAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[20]/td[2]/table/tbody/tr/td[3]/strong')

    fixedCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[2]/td[5]/strong')
    energyCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[3]/td[6]/strong')
    minimumCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[4]/td[6]/strong')
    reactiveCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[5]/td[5]/strong')
    fuelChargesAtValue = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[4]/strong')
    fuelCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[6]/td[5]/strong')
    edChargesAtValue = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[4]/strong')
    edCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[7]/td[5]/strong')
    meterCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[8]/td[5]/strong')
    delayedPaymentCharges = getXPATHDetails('/html/body/table[3]/tbody/tr[9]/td[6]/strong')
    billAmtValue = getXPATHDetails('/html/body/table[3]/tbody/tr[10]/td[6]/strong')
    provisionalBillAmtValue = getXPATHDetails('/html/body/table[3]/tbody/tr[11]/td[6]/strong')
    netTotalBillAmtValue = getXPATHDetails('/html/body/table[3]/tbody/tr[12]/td[6]/strong')
    arrearsOnDateValue = getXPATHDetails('/html/body/table[3]/tbody/tr[13]/td[5]/strong')
    arrearsOnDate = getXPATHDetails('/html/body/table[3]/tbody/tr[13]/td[6]/strong')
    solarPurValue = getXPATHDetails('/html/body/table[3]/tbody/tr[14]/td[5]/strong')
    solarPur = getXPATHDetails('/html/body/table[3]/tbody/tr[14]/td[6]/strong')
    unprocessPaymentAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[15]/td[6]/strong')
    grandTotalAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[16]/td[6]/strong')
    govtRelief = getXPATHDetails('/html/body/table[3]/tbody/tr[17]/td[4]/strong')
    interestAmt = getXPATHDetails('/html/body/table[3]/tbody/tr[19]/td[5]/strong')
    theftArrears = getXPATHDetails('/html/body/table[3]/tbody/tr[20]/td[5]/strong')
    litigationArrears = getXPATHDetails('/html/body/table[3]/tbody/tr[21]/td[4]/strong')

    print(f'\nBilling Period: {billingPeriod.split(" : ")[1]}')
    for indexVal, i in enumerate(userDetails.splitlines()):
        if indexVal > 2:
            print(f'{userDetailsMapping.get(indexVal)}: {i.split(":")[1]}')
        else:
            print(f'{userDetailsMapping.get(indexVal)}: {i}')

    print(f'\nSub Division Office: {subDivOffice}')
    print(f'Route Code: {routeCode}')
    print(f'Bill Number: {billNum}')
    print(f'Bill Date: {billDate}')
    print(f'Last Payment Date: {lastPaymentDate}')

    print(f'\nFederer CD: {federerCD}')
    print(f'Referer CD: {refererCD}')

    print(f'\nTarrif: {tarrifValue}')
    print(f'Meter Code: {meterCode}')
    print(f'H.P / K.W: {hpkwValue}')
    print(f'Seasonal: {seasonalValue}')
    print(f'Days: {daysValue}')
    print(f'SD: {sdValue}')

    print(f'\nConsumer Number: {consumerNumber}')
    print(f'Meter Number: {meterNumber}')

    print(f'\nPhase: {phaseValue}')
    print(f'Meter: {meterStatus}')

    print(f'\nPresent Active Reading: {presentActiveReading}')
    print(f'Present IMP Reading: {presentIMPReading}')
    print(f'Present RN Reading: {presentRNReading}')
    print(f'Present EXP Reading: {presentEXPReading}')

    print(f'\nPast Active Reading: {pastActiveReading}')
    print(f'Past IMP Reading: {pastIMPReading}')
    print(f'Past RN Reading: {pastRNReading}')
    print(f'Past EXP Reading: {pastEXPReading}')

    print(f'\nReading Active Diff: {readingActiveDiff}')
    print(f'Reading IMP Diff: {readingIMPDiff}')
    print(f'Reading RN Diff: {readingRNDiff}')
    print(f'Reading EXP Diff: {readingEXPDiff}')

    print(f'\nMF: {mfValue}')
    print(f'Total Consumption: {totalConsumption}')
    print(f'Average Consumption: {averageConsumption}')
    print(f'Max Demand: {maxDemand}')
    print(f'Average Max Demand: {avgMaxDemand}')
    print(f'Total Company Charges: {totalCompanyCharges}')
    print(f'Provisional Bill Amt: {provisionalBillAmt}')
    print(f'Adjustment Amt: {adjustmentAmt}')

    print(f'\nLast Three Months Unit M1 Name: {lastThreeMonthsUnitM1Name}')
    print(f'Last Three Months Unit M1 Unit: {lastThreeMonthsUnitM1Unit}')
    print(f'Last Three Months Unit M1 Bill Amt: {lastThreeMonthsUnitM1BillAmt}')
    print(f'Last Three Months Unit M2 Name: {lastThreeMonthsUnitM2Name}')
    print(f'Last Three Months Unit M2 Unit: {lastThreeMonthsUnitM2Unit}')
    print(f'Last Three Months Unit M2 Bill Amt: {lastThreeMonthsUnitM2BillAmt}')
    print(f'Last Three Months Unit M3 Name: {lastThreeMonthsUnitM3Name}')
    print(f'Last Three Months Unit M3 Unit: {lastThreeMonthsUnitM3Unit}')
    print(f'Last Three Months Unit M3 Bill Amt: {lastThreeMonthsUnitM3BillAmt}')

    print(f'\nFixed Charges: {fixedCharges}')
    print(f'Energy Charges: {energyCharges}')
    print(f'Minimum Charges: {minimumCharges}')
    print(f'Reactive Charges: {reactiveCharges}')
    print(f'Fuel Charges @ {fuelChargesAtValue}: {fuelCharges}')
    print(f'ED Charges @ {edChargesAtValue}: {edCharges}')
    print(f'Meter Charges: {meterCharges}')
    print(f'Delayed Payment Charges: {delayedPaymentCharges}')
    print(f'Bill Amt Value: {billAmtValue}')
    print(f'Provisional Bill Amt Value: {provisionalBillAmtValue}')
    print(f'Net Total Bill Amt Value: {netTotalBillAmtValue}')
    print(f'Arrears On Date ({arrearsOnDateValue}): {arrearsOnDate}')
    print(f'Solar Pur @ {solarPurValue}: {solarPur}')
    print(f'Unprocess PaymentAmt: {unprocessPaymentAmt}')
    print(f'Grand Total Amt: {grandTotalAmt}')
    print(f'Govt Relief: {govtRelief}')
    print(f'Interest Amt: {interestAmt}')
    print(f'Theft Arrears: {theftArrears}')
    print(f'Litigation Arrears: {litigationArrears}')

except Exception:
    print(traceback.format_exc())

print(f'\nJob completed successfully, time elapsed: {timedelta(seconds = int(time.time() - startTime))} HH:MM:SS\n')
webDriver.quit()
