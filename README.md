# 🏥 Patient Queue Management System

A modern Patient Queue Management System built with **Plain PHP (MVC Architecture)** for Rural Health Units (RHU), Clinics, and Small Healthcare Facilities.

This project focuses on simplicity, maintainability, and clean architecture while following modern software development practices.

> **Project Status:** 🚧 Under Development

---

# 📖 Overview

The Patient Queue Management System helps healthcare staff efficiently manage patient registration and queueing during daily operations.

Unlike self-service queue systems, this system follows the actual workflow used in many Rural Health Units where **patients are interviewed first by the Admin**, who verifies their information before adding them to the queue.

---

# 🎯 Objectives

- Build a clean and maintainable PHP application.
- Practice MVC architecture without using a framework.
- Learn modern PHP development.
- Create a real-world portfolio project.
- Keep the project simple and easy to debug.

---

# 🛠 Tech Stack

| Technology | Purpose |
|------------|---------|
| PHP 8.x | Backend |
| MariaDB | Database |
| Laragon | Local Development Environment |
| HTML5 | Frontend |
| Bootstrap 5 | User Interface |
| JavaScript (Vanilla) | Client-side Interactivity |
| Composer | Autoloading |
| Git & GitHub | Version Control |

---

# 🏗 Architecture

This project follows the **Model-View-Controller (MVC)** architecture.

```
Client
   │
   ▼
Controller
   │
   ├── Model
   │      │
   │      ▼
   │   Database
   │
   ▼
View
```

Business logic is separated from presentation, making the project easier to maintain and debug.

---

# 📂 Project Structure

```
patient-queue-system/

├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   ├── Middleware/
│   ├── Helpers/
│   └── Core/
│
├── config/
│
├── database/
│   ├── migrations/
│   └── seeds/
│
├── public/
│   ├── admin/
│   ├── doctor/
│   ├── bhw/
│   ├── display/
│   └── assets/
│
├── routes/
│
├── storage/
│
├── .env
├── composer.json
└── README.md
```

---

# 👥 User Roles

## Admin

Responsible for:

- Login
- Interview patient
- Verify PhilHealth status
- Register patients
- Generate queue number
- Manage queue
- View reports

---

## Doctor

Responsible for:

- View current patient
- Call next patient
- Complete consultation
- View consultation history

---

## BHW

Responsible for:

- View queue
- Search patient
- Assist patient registration

---

## Queue Display

Public display showing:

- Now Serving
- Next Queue Numbers
- Waiting Patients

---

# 🗄 Database Design

## users

- id
- username
- password
- role
- created_at

---

## patients

- id
- fullname
- category
- philhealth_status
- created_at
- updated_at

---

## queues

- id
- patient_id
- queue_number
- queue_status
- created_at

---

## consultations

- id
- queue_id
- doctor_id
- remarks
- consultation_date

---

# 🏥 Patient Categories

- Regular
- Senior Citizen
- PWD
- Emergency

---

# 💳 PhilHealth Status

- Registered
- Not Registered
- Other Facility
- No PhilHealth

---

# 🔄 System Workflow

```
Patient Arrives
        │
        ▼
Admin Interviews Patient
        │
        ▼
Verify PhilHealth
        │
        ▼
Register Patient
        │
        ▼
Assign Category
        │
        ▼
Generate Queue Number
        │
        ▼
Patient Waits
        │
        ▼
Doctor Calls Patient
        │
        ▼
Consultation Completed
```

---
# ⭐ Core Features

### Patient Registration

- Register new patients
- Search existing patients
- Prevent duplicate patient records
- Edit existing patient information

### Intelligent Queue Management

The system automatically organizes the queue based on patient priority.

Priority Order:

1. Emergency
2. PWD
3. Senior Citizen
4. Regular

To ensure fairness, **Regular patients are not starved**. The queue algorithm balances priority with fairness so that Regular patients continue to be served even when higher-priority patients are present.

### Queue Operations

- Generate Queue Number
- Call Next Patient
- Skip Patient
- Cancel Queue
- Complete Consultation
- Queue History

### Doctor Module

- View Current Patient
- Call Next Patient
- Complete Consultation
- Consultation History

### Patient Record Management

The Admin can:

- Search patients
- Update patient information
- Change patient category
- Update PhilHealth status
- Correct registration mistakes

Patient records remain separate from queue history, allowing the same patient to return multiple times without creating duplicate records.
---

# 📌 Planned Features

## Authentication

- Admin Login
- Doctor Login
- BHW Login
- Session Management
- Role-Based Access

---

## Patient Management

- Register Patient
- Search Patient
- View Patient Profile
- Edit Patient Information
- Update Patient Category
- Update PhilHealth Status
- Prevent Duplicate Patient Records

---

## Queue Management

- Generate Queue Number
- Call Next
- Skip Queue
- Cancel Queue
- Queue History

---

## Doctor Module

- Current Patient
- Finish Consultation
- Consultation History

---

## Reports

- Daily Queue Report
- Consultation Report

---

# 🚀 Development Roadmap

- [x] Initialize Repository
- [x] Create Project Structure
- [ ] Configure Laragon
- [ ] Database Connection
- [ ] Authentication System
- [ ] MVC Routing
- [ ] Admin Dashboard
- [ ] Patient Registration
- [ ] Patient Record Management
- [ ] Intelligent Queue Algorithm
- [ ] Queue Management
- [ ] Doctor Dashboard
- [ ] BHW Dashboard
- [ ] Queue Display
- [ ] Reports
- [ ] Final Testing

---

# 🎯 Learning Goals

This project is intended to help learn:

- PHP Fundamentals
- MVC Architecture
- Object-Oriented Programming
- REST API Design
- Authentication
- Session Management
- Database Design
- Git Workflow
- Clean Code Principles

---

# 📄 License

This project is for educational and portfolio purposes.

---

Developed with ❤️ using Plain PHP and MVC Architecture.
