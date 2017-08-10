# BoB Entertainment Homepage

## 개발환경 구축
- Ubuntu 16.04
- apache2
- php5
- mysql
```
sudo apt-get update
sudo apt-get install -y apache2
sudo apt-get install php5 php5-common
sudo apt-get install -y mysql-server mysql-client
sudo apt-get install -y libapache2-mod-php5
sudo apt-get install php5-mysql
```

## 기타 설정 시 유용한 커맨드들
아파치에 로드된 모듈 확인
```
apachectl -D DUMP_MODULES
```
아파치 php5 모듈 enable
```
sudo a2enmod php5
```
아파치 php7.1 모듈 disable
```
sudo a2dismod php7.1
```
git 설정
```
git config --global push.default matching
git config --global user.email "hg9587@naver.com"
git config --global user.name "Einstrasse"
```

## 디자인 템플릿
https://github.com/bopoda/ace    
http://ace.jeka.by/    