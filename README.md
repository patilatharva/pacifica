# Pacifica - a school library management system
Pacifica is a web app designed to perform basic managerial tasks of a school's library with minimal effort.

# How is it made?
Pacifica is developed with a procedural-style PHP backend and is intended to be used with a MySQL database.  
The frontend makes use of jQuery - especially DataTables and Bootstrap.

# What can it do?
Pacifica allows book and student data to be created, read, updated and deleted. Being a library management system, it also facilitates books to checked in and out of the library.  

In a little more detail, Pacifica can:

**Create**
1. Book records 
  - Upon scanning the ISBN of a book, Pacifica uses Open Library and Google Books API to fetch the title, author, cover image, description, publisher, published year, page count and categories. Of course, the user can choose to add everything manually as well.
  - CSV batch uploads/downloads are supported.

2. Student records 
  - Pacifica accepts the name, class and roll number of each student.
  - CSV batch uploads/downloads are supported.
  
**Check in/out books** 

Books can be lent to students for a user-defined time period and returned to the library in a matter of seconds, either by scanning a book's ISBN or by selecting it manually.

**Display**
- The front page consists of a clean dashboard which shows key stats at a glace.
- All records are displayed in minimalist tables, which provide pagination, instant filtering and column ordering. Any record can be instantly updated or deleted from the same page as well.
- Check in/out records are stored in the History table.
- Overdue books are listed once again in a separate page (for the sake of "minimal effort").

**Control**  

Pacifica has two types of users:
1. Admins - they are granted the ability to create, update and delete all data.
2. Users - they are able to view book data and book data only.

# Why did I make this?  
Pacifica was originally developed as a tool to catalog books my high school's library. Now, few versions later, I intend to release it as an actual web app some day.
