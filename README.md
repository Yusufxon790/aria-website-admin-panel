# Aria Backend

This project is the **backend for the Aria website**, built using **PHP** and **MySQL**.  
It serves dynamic web pages, manages data directly, and does not rely on external APIs.  

---

## 🚀 Features
- Pure **PHP backend** – no frameworks, simple and lightweight.  
- **MySQL database** – handled with the included `schema.sql` file.  
- **Frontend** – developed with **HTML, CSS, Bootstrap, and JavaScript**.  
- **Dynamic rendering** – PHP scripts directly generate and process web pages.  
- No REST API – all communication happens via server-side PHP.  

---

## 🗄️ Database
Database schema and initial data are stored in `schema.sql`.  

To set up:  
1. Open phpMyAdmin (or MySQL CLI).  
2. Create a new database `aria`.  
3. Import the `schema.sql` file from `database` folder.  

---

## ⚙️ How to Run Locally
1. Clone the repository:  
   git clone https://github.com/Yusufxon790/aria-website-admin-panel.git  

2. Import `schema.sql` into your MySQL server.  

3. Deploy the PHP files on a PHP-supported server (e.g., XAMPP, WAMP, or LAMP).  

4. Start Apache and MySQL.  

5. Open in your browser:  
   http://localhost/aria 

6. The backend will process user requests and render pages dynamically.  

---

## 📂 Project Structure
aria-website-admin-panel/  
│── web/           → Main PHP application (frontend + backend)  
│── adminkit-main/ → Admin panel template  
│── schema.sql     → Database schema and sample data  
│── README.md      → Documentation  

---

## 👨‍💻 Author
- [MuhammadYusuf Akramov](https://github.com/Yusufxon790)  
- 📧 Email: akramovyusufxon590@gmail.com  

---

## 📝 License
This project is for **educational purposes**.  
Feel free to use, modify, or improve it.  
