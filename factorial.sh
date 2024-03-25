read -p "Enter a number:" n
i=1
fact=1
while [ $i -le $n ]
do
fact=$((i * fact))
i=`expr $i + 1`
done
echo "Factorial:" $fact


