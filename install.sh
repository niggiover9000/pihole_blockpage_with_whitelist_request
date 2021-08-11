# Clone repository
echo "Trying to clone the Github Repository..."
git clone https://github.com/HerrFrutti/pihole_blockpage_with_whitelist_request.git
# Change blocking mode
FILE="/etc/pihole/pihole-FTL.conf"
BLOCKING_MODE="BLOCKINGMODE=IP"
echo "Checking blocking mode..."
if grep -q "BLOCKINGMODE=NULL" "$FILE"; then
        sed -i "s/BLOCKINGMODE=NULL/$BLOCKING_MODE/" $FILE
elif grep -q "BLOCKINGMODE=IP-NODATA-AAAA" "$FILE"; then
        sed -i "s/BLOCKINGMODE=IP-NODATA-AAAA/$BLOCKING_MODE/" $FILE
elif grep -q "BLOCKINGMODE=NXDOMAIN" "$FILE"; then
        sed -i "s/BLOCKINGMODE=NXDOMAIN/$BLOCKING_MODE/" $FILE
elif grep -q "BLOCKINGMODE=IP" "$FILE"; then
        echo "Blocking mode already set!"
else
        echo $BLOCKING_MODE >> $FILE
fi
# Replace error page
sed -i 's#server.error-handler-404    = "/pihole/index.php"#server.error-handler-404    = "/pihole/simple-block.php"#g' /etc/lighttpd/lighttpd.conf
# Restart lighttpd
/etc/init.d/lighttpd restart
# Copy blocking page
echo "Do you want to use the dark or the light theme?\n Dark = 1 \n Light = 2"
read option
