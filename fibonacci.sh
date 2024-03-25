read -p "Enter a limit:" n
a=0
b=1
echo $a
echo $b
i=2
while [ $i -le $n ]
do
c=$((a+b))
a=$b
b=$c
echo $c
i=`expr $i + 1`
done
 

