<?php
/*
 * Author : Cleve Gomes
 */




/*
 * MysqlCls class handles the import and export of data from external googleDocs to internal storage system
 */

class MysqlCls extends StorageSystemLib implements StorageSystem {


	private $formattedData = [];

	public function readExternalSystem($datafile ,$config =[])
	{
		// Write logic to read data from Mysql data storage
	}

	public function getFormatter()
	{
		// Write logic to convert data read from  Mysql to key-value pair
		$formattedData = ["googledocs"=>"formatted data from google docs"];
	}

	public function write()
	{
		/**
		 * Using the write from the abstract class
		 */
		$this->writeInternalSystem($this->formattedData);

	}
}