Working with data


In Brief : We need to read  data from external storage system , convert it to one general format and write the formatted data to our internal
storage system

To handle to issue there would be 3 main operations 
1.	Read from various storage systems
2.	Format the content into one particular format. Probably a key-value array. 
3.	Write to our storage system

Read and format operations  will be different for various storage systems .
Since the read file could be csv format or sql format and so on.  
Therefore  the format operation will also need to be different.
However  the write operation should be the same for all ,
since I am writing to my storage system with one common format. 

 
 Below is my code structure
 
StorageSystem  : This is an interface that every storage system class must implement.
It has all the required method.

StorageSystemLib : This is an abstract class where all common library function are defined.
Such as write to local storage system. Every Storagesystem class must extend this class.

GoogleDocsCls,MysqlCls : This classes are the implemented storage system classes that 
will import data from googledocs/mysql and export to our internal storage system.
These classes must implement the StorageSystem Interface and extend the StorageSystemLib.
