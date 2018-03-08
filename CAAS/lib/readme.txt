# mChoice SDP API PHP Library
This is a simple guide on how to use mChoice SDP API PHP Library.


## PHP Library Components

### CAAS
    - DirectDebitSender.php     - To send Direct Debit charging requests.
    - QueryBalanceSender.php    - To check balance
    - KLogger.php               - A simple php logging library to log information.

## Using Libraries
- To use  mChoice SDP API PHP library just import the proper library file on top of your own PHP source file.
    eg:- for ussd applications
    <?php
    include_once 'ussd/DirectDebitSender.php';
    include_once 'ussd/QueryBalanceSender.php';
    ?>


## Testing Your Application
Once you finished writing your application you can test that using mChoice SDP Simulator. Simulator will start on port
7000. You can use the URSs listed below as request sending URLs. For more information on SDP Simulator please refer to
the Readme file provided with it.

CAAS
: http://localhost:7000/caas/direct/debit (Send direct debit)
: http://localhost:7000/caas/balance/query (Send query balance)


Note:To use these libraries,cURL library should have installed with PHP.