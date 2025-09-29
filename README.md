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
Database schema and initial/sample data are provided:  

- `schema.sql` → creates tables and structure.  
- `sample_data.sql` → inserts example data into the database.  

To set up:  
1. Open phpMyAdmin (or MySQL CLI).  
2. Create a new database `aria`.  
3. Import `schema.sql` (creates tables).  
4. (Optional) Import `sample_data.sql` (loads ready-to-use data).  

---

## ⚙️ How to Run Locally
1. Clone the repository:  
   git clone https://github.com/Yusufxon790/aria-website-admin-panel.git  

2. Import `schema.sql`(and optionally `sample_data.sql`) into your MySQL server.  

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
│── schema.sql     → Database schema (tables only)      
│── sample_data.sql       → Database with example data  
│── README.md      → Documentation  

---

## 👨‍💻 Author
- [MuhammadYusuf Akramov](https://github.com/Yusufxon790)  
- 📧 Email: akramovyusufxon590@gmail.com  

---

## 📝 License
This project is for **educational purposes**.  
Feel free to use, modify, or improve it.  
