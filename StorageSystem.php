<?php
/*
 * Author : Cleve Gomes
 */





/**
 * Interface StorageSystem
 */
interface StorageSystem {

	/**
	 * Reads an import data from an external storeage system
	 * @param $datafile
	 * @param array $config
	 * @return mixed
	 */
	public function readExternalSystem($datafile ,$config =[]);

	/**
	 * Formatting of the raw data after the import is done
	 * @return mixed  //Mostly will be key-value array
	 */
	public function getFormatter();
}