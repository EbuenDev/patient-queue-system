| Feature           | Status |
| ----------------- | ------ |
| Project structure | ✅      |
| Database          | ✅      |
| Login             | ⏳      |
| Admin Dashboard   | ⏳      |
| Register Patient  | ⏳      |
| Queue Logic       | ⏳      |
| Doctor Dashboard  | ⏳      |
| BHW Dashboard     | ⏳      |
| Queue Display     | ⏳      |
| Reports           | ⏳      |


 USERS                                
| Field    | Type                     |
| -------- | ------------------------ |
| id       | INT                      |
| username | VARCHAR                  |
| password | VARCHAR                  |
| role     | ENUM(Admin, Doctor, BHW) |


 PATIENTS                         
| Field             | Type         |
| ----------------- | ------------ |
| id                | INT          |
| fullname          | VARCHAR(255) |
| category          | ENUM         |
| philhealth_status | ENUM         |
| queue_number      | INT          |
| queue_status      | ENUM         |
| created_at        | DATETIME     |


 CONSULTATIONS
| Field             | Type     |
| ----------------- | -------- |
| id                | INT      |
| patient_id        | INT      |
| doctor_id         | INT      |
| remarks           | TEXT     |
| consultation_date | DATETIME |

| Component       | Technology                               |
| --------------- | ---------------------------------------- |
| Local Server    | **Laragon**                              |
| PHP             | PHP 8.3 or newer (included with Laragon) |
| Web Server      | Apache (or Nginx later if you want)      |
| Database        | MariaDB (included with Laragon)          |
| Database Tool   | phpMyAdmin (or Adminer)                  |
| Frontend        | HTML5 + Bootstrap 5 + Vanilla JavaScript |
| Backend         | PHP (MVC Architecture)                   |
| Version Control | Git + GitHub                             |


