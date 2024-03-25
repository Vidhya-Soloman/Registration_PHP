read -p "Enter Password: " pass
read -p "Retype Password: " repass
if [ $pass != $repass ]
then
echo "Incorrect password"
else
echo "Correct"
fi
