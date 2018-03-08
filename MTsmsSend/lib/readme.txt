# mChoice SDP API PHP Library
This is a simple guide on how to use mChoice SDP API PHP Library.


## PHP Library Components
### SMS
   - SmsSnder.php               - To send SMS MT(Mobile Terminated) messages.
   - SmsReceiver.php            - To receive SMS MO(Mobile Originated) messages.
   - SmsDeliveryReport.php      - To receive SMS DR(Delivery Reports) messages.


## Using Libraries
- To use  mChoice SDP API PHP library just import the proper library file on top of your own PHP source file.
    eg:- for sms applications
    <?php
    include_once 'sms/SmsSnder.php ';
    include_once 'sms/SmsReceiver.php ';
    ?>


## Testing Your Application
Once you finished writing your application you can test that using mChoice SDP Simulator. Simulator will start on port
7000. You can use the URSs listed below as request sending URLs. For more information on SDP Simulator please refer to
the Readme file provided with it.


SMS
: http://localhost:7000/sms/send/

Note:To use these libraries,cURL library should have installed with PHP.