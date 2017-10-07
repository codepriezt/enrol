# moodle-enrol-payumoney
PayU Money Payment Gateway Moodle Integration
Enrolment in Moodle using PayUMoney payment gateway for paid courses

This plugin helps admins and webmasters use PayUMoney as the payment gateway. PayUMoney.com is one of the most commonly used payment gateways in India offers considerable number of features unsupported by other payment gateways like Paypal. This plugin has all the settings for development as well as for production usage. Its easy to install, set up and effective.

Installation Guidence : 

Login to your moodle site as an “admin user” and follow the steps.

1) Upload the zip package from Site administration > Plugins > Install plugins. Choose Plugin type 'Enrolment method (enrol)'. Upload the ZIP package, check the acknowledgement and install.

2) Go to Enrolments > Manage enrol plugins > Enable 'PayUMoney' from list

3) Click 'Settings' which will lead to the settings page of the plugin

4) Provide merchant credentials for PayUMoney, select the checkbox as per requirement. Save the settings.

5) Select any course from course listing page.

6) Go to Course administration > Users > Enrolment methods > Add method 'PayUMoney' from the dropdown. Set 'Custom instance name', 'Enrol cost' etc and add the method.

This completes all the steps from the administrator end. Now registered users can login to the Moodle site and view the course after a successful payment.


Note: You need to configure the Default Relay Response URL in you authorized.net account. The Relay Response URL will be "http://your_moodle_website/enrol/payumoney/ipn.php"


To add a Default Relay Response URL:

Log into the Merchant Interface at https://www.payumoney.com/merchant/dashboard/#/
Click Account from the main toolbar.
Click Response/Receipt URLs under Transaction Format Settings.
Click Edit next to Default Relay Response URL. The Relay Response page appears.
In the URL text field, enter the URL where the payment gateway should send the transaction response. This URL must start with either "http://" or "https://". Parameterized URLs are not permitted.
Click Submit. A confirmation message indicates that the URL has been added.



To add a URL to the list of authorized Response or Receipt URLs:

Log into the Merchant Interface at https://account.PayUMoney/ or Sandbox Interface https://sandbox.PayUMoney/.
Click Account from the main toolbar.
Click Response/Receipt URLs under Transaction Format Settings.
Click Add URL.
Enter the new URL. This URL must start with either "http://" or "https://".
Click Submit.
