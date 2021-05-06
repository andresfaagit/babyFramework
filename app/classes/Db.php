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
        
        private function connect() 
        {
            switch  (DB_ENGINE)
                {
                case 'Mssql' :
                    require (Dbmssql);
                    brake;
                case 'Mysql' :
                    require (Dbmysql);
                    brake;      

                }
            }     




  }