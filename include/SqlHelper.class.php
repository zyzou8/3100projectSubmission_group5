<?php

    class SqlHelper{

      	public $conn;   //数据库的整体信息
      	public $dbname="";  //链接数据库的名称
      	public $username="";    //登录数据库的用户名
      	public $password="";    //登录数据库的密码
      	public $host="";    //数据库的本地地址

      	public function __construct($dbhost,$dbname,$dbpassword,$dbuser){

            $this->host=$dbhost;
            $this->dbname=$dbname;
            $this->username=$dbuser;
            $this->password=$dbpassword;
      		$this->conn=mysql_connect($this->host,$this->username,$this->password); //选择数据库

      		if(!$this->conn){
      			die("Connection Failed！".mysql_errno());
      		}

      		mysql_select_db($this->dbname);
      	}
		
      	public function execute_dql($sql){
      		$arr=array();
      		$res=mysql_query($sql,$this->conn) or die(mysql_error());
      		while($row=mysql_fetch_assoc($res)){
      			$arr[]=$row;
      		}
      		mysql_free_result($res);
      		return $arr;
      	}

      	public function execute_dml($sql){
      		$dml_sql = mysql_query($sql,$this->conn) or die(mysql_error());
      	    if(!$dml_sql){
      	    	return 0; //运行失败
      	    }else{
      	    	if(mysql_affected_rows($this->conn)>0){
      	    		return 1; //表示执行成功！
      	    	}else{
      	    		return 2; //表示没有行受到影响
      	    	}
      	    }
      	
      	}
      	
   }
