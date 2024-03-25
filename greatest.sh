#greatest of three numbers

read -p "Enter first number: " a
read -p "Enter second number: " b
read -p "Enter third number: " c
if [ $a -gt $b ] && [ $a -gt $c ] 
then 
echo $a is greater 
elif [ $b -gt $a ] && [ $b -gt $c ]
then
echo $b is grater
else
echo $c is greater
fi
