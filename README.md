## Workshop on Recent Technical Skill and Tools

## Presented By:
 * Abhishek Shinde
* Nikhil Patne

# User Guide


## 1.Visual Studio Code

 #####  Downlaod Visual Studio Code from https://code.visualstudio.com/download
 #####  Download Visual Studio Insider from https://code.visualstudio.com/insiders/ (In case when VS Code not work)

***

## 2. PostgreSQL Database

#### Download PostgreSQL from https://www.enterprisedb.com/downloads/postgres-postgresql-downloads
`
After Installation Open pgAdmin4 to Access Database
`





`Make sure that you've not entered database name which is already present.`
> This Five inputs are stored in `pgsqlDB.ini` file automatically for Database connections.


* Enter Password once again to begin.
**Wait** for few seconds...
	> If **pgsqlDB.ini** file opens while database creation, then close that file and Go back to Command prompt.


* Enter Password once again to continue.
	* This step **creates Tables** into Database created above.


* Press any key to Exit.

# Using the Web-application

* Now you can run `PhpAssignment6__index.php` on webserver.

* After each successfull user registration, `Registration Details` folder will be created in the same directory where all these scripts are present.
	> Each user will be assigned with unique number called **UID**.

* All the details of each user will be stored in its unique folder inside */Registration Details* named with its UID.
> Example :
> ```
> \Registration Details\5
> ```
> The details of a user with UID 5 are stored in **\Registration Details\5\Credentials.txt**
along with the Photo which user have uploaded.

# Admin Panel

You can use
`admin` as Username 
and 
`123` as a Password
in Login section of **PhpAssignment6__index.php** page
to log in as an ```Admin```
#### Here details of all users can be shown

---
## Todos
* Deleting User account
* Updating User information

# Thank You!
 ## Nikhil Patne
   * Contact: 8605358076 
   * Email : nikhilpatne94@gmail.com 
  
