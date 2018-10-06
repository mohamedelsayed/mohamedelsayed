#!/bin/bash
#This script is used to make automatic backup
#Author: Mohamed Elsayed
#Date: 06/10/2018
if [ $# -eq 0  ]
then
    echo "Please supply database password!"
    echo "Usage: ./runAutoBackup.sh <databasePassword>"
    exit
fi
databasePassword=$1
#make directory with current date
currentYear=$(date +"%Y")
currentMonth=$(date +"%m")
currentDay=$(date +"%d")
backupPath="/home2/elsayed/backups/$currentYear/$currentMonth/$currentDay"
currentPath=$PWD
echo "currentPath that will be backuped $currentPath"
echo "backupPath will be: $backupPath"
mkdir -p $backupPath
cd $backupPath
#create tar.gz file for project files:
tar -zcvf files.tar.gz $currentPath
#backup mysql database:
mysqldump -u elsayed_mohamede -p$databasePassword elsayed_mohamedelsayed > elsayed_mohamedelsayed.sql
#Script tasks complete.
echo "Backup complete in this path $backupPath."