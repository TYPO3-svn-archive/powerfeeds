<?php
class baseModel {
	/**
	 * Defaul table fields
	 */
	protected $i_uid;
	protected $i_pid;
	protected $i_tstamp;
	protected $i_crdate;
	protected $i_cruser_id;
	protected $i_deleted;
	protected $i_hidden;
	protected $i_starttime;
	protected $i_stoptime;
	
	/**
	 * Getters and setters
	 */
	public function getUid()
	{
		return $this->i_uid;
	}
	public function setUid($i_uid)
	{
		$this->i_uid = $i_uid;
	}
	
	public function getPid() 
	{
		return $this->i_pid;
	}
	public function setPid(i_pid)
	{
		$this->i_pid = i_pid;
	}
	
	public function getTstamp()
	{
		return $this->i_tstamp;
	}
	public function setTstamp($i_tstamp)
	{
		$this->i_tstamp = $i_tstamp;
	}
	
	public function getCrdate()
	{
		return $this->i_crdate;
	}
	public function setCrdate($i_crdate)
	{
		$this->i_crdate = $i_crdate;
	}
	
	public function getCruserId()
	{
		return $this->i_cruser_id;
	}
	public function setCruserId($i_cruser_id)
	{
		$this->i_cruser_id = $i_crused_id;
	}
	
	public function getDeleted()
	{
		return $this->i_deleted;
	}
	public function setDeleted($i_deleted)
	{
		$this->i_deleted = $i_deleted;
	}
	
	public function getHidden()
	{
		return $this->i_hidden;
	}
	public function setHidden($i_hidden)
	{
		$this->i_hidden;
	}
	
	public function getStarttime()
	{
		return $this->i_starttime;
	}
	public function setStarttime($i_starttime)
	{
		$this->i_starttime = $i_starttime;
	}
	
	public function getStoptime()
	{
		return $this->i_stoptime;
	}
	public function setStoptime($i_stoptime)
	{
		$this->i_stoptime = $i_stoptime;
	}
	
}
?>