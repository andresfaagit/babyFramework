<?php 

class Dbmssql
{
  private $link;
  private $engine;
  private $host;
  private $name;
  private $user;
  private $pass;
  private $charset;
  
  /**
   * Constructor para nuestra clase
   */
  public function __construct()
  {
    $this->engine  = IS_LOCAL ? LDB_ENGINE : DB_ENGINE;
    $this->name    = IS_LOCAL ? LDB_NAME : DB_NAME;
    $this->user    = IS_LOCAL ? LDB_USER : DB_USER;
    $this->pass    = IS_LOCAL ? LDB_PASS : DB_PASS;
    $this->charset = IS_LOCAL ? LDB_CHARSET : DB_CHARSET;
    return $this;    
  }

  
  /**
   * Método para abrir una conexión a la base de datos MSSQL
   *
   * @return void
   */
  
  private function Dbmssql_connect() 
  {
            $serverName = "172.16.18.30";   
            $database = "CATE";  
            
            // Get UID and PWD from application-specific files.   
            $uid = "SA";  
            $pwd = "pervers0";  
            
            try {  
                $conn = new PDO( "sqlsrv:server=$serverName;Database = $database", $uid, $pwd);   
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
            }  
            
            catch( PDOException $e ) {  
                print "¡Error!: " . $e->getMessage() ."<br />";
                        die(print_r(sqlsrv_errors(), true)); 
            }  
            
            echo "Connected to SQL Server\n";  
            
            $query = 'select * from ProvinciaSG';   
            $stmt = $conn->query( $query );   
            while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){   
                print_r( $row );   
            }  
            
            // Free statement and connection resources.   
            $stmt = null;   
            $conn = null;  
            
         
    } 
}    
   
