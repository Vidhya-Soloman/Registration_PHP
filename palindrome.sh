read -p "Enter a number" num
n=$num
rev=0
while [ $num -gt 0 ]
do
rem=$((num % 10))
rev=$((rev * 10 + rem))
num=$((num / 10))
done
if [ $n -eq $rev ]
then 
echo "palindrome"
else
echo "not palindrome"
fi

