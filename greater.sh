#!/bin/bash
read -p "Enter first number:" num1
read -p "Enter second number:" num2
if [ $num1 -gt $num2 ]
then 
echo "num 1 is greater:"$num1
else
echo "num 2 is greater:"$num2
fi
