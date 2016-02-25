<?php
/*
 * Author : Cleve Gomes
 */




/**
 * Class StorageSystemLib
 */
 abstract class StorageSystemLib {


	 /**
	  * Write the formatted data to The Internal Storage System
	  * @param array $formattedContent
	  * @return int
	  */
	 public function writeInternalSystem($formattedContent = [])
	 {
		 $statusFlag =1;
		 /**
		  * Logic to write the formatted content will come here
		  * return 1 if everything was successful
		  * throw an exception if some error occurred
		  *
		  */

		 return $statusFlag;
	 }

}