Working with data


Brief : Read all data from external storage system , convert it to one general format and write the formatted data to internal
storage system

To handle to issue there would be 3 main operations 
1.	Read from various storage systems
2.	Format the content into one particular format. Probably a key-value array. 
3.	Write to our storage system

Read and format operations  will be different for various storage systems .
Since the read file could be csv format or sql format and so on.  Therefore  the format operation will also be different.
however  the write operation should be the same for all systems. 
Since I am writing to my storage system with one common format. It would always be same
 
 Below is my code structure
 
StorageSystem  : This is an interface that every storage system class must implement. It has all the required method.

StorageSystemLib : This is an abstract class where all common library function required by the Storagesystem class are 
written . Every Storagesystem class must extend this class.

GoogleDocs,MysqlCls : This classes are the implemented storage system classes that will import data from googledocs and mysql and
export to our internal storage system.
