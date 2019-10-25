Used Technology  :   PHP, Laravel 5.8, JS, Xampp, MySQL, Bootstrap 3, CSS3, HTML5, onnorokom SMS API. 

Description	 :    A blood bank using this system can requect donor from registered donor list via sms when 
                      storage of  specific blood group is short. Blood bank will store blood receiver and patient 
                      information. From stored information this system can identify fraud if anyone blacking blood
                      bags. People can register as donor and donate. System will store detailed information of any
                      donation and will store detailed information of blood bags. Data from database is also used
                      to make information such as yearly blood need and availability ratio, age wise donor ratio etc.

Database file    : bloodbankmanagement.sql

Routing 	 : Work on laravel MVC pattern
		   1. Home page : http://localhost/bloodbankmanagement/public/
		   2. admin sign in : email: tariqulisalmsourov@gmail.com, passward:123456789

detailed(completed) features :  1. Donor register, login.
				2. Blood bank information.
				3. Blood related information(Questions).
				4. Admin panel
					4.1. Blood Receiver Form (Fraud case calculation from database information)
					4.2. Patient Information form (If receiver in not fraud)
					4.3. Send SMS request to registered donor when storage is short
					4.4. Check donor if registered or not.
					4.5. Put blood bag information after successful blood collection.
