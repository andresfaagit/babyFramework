<?php 

class usuarioModel extends Model
{

  public $id;
  public $name;
  public $username;
  public $email;
  public $created_at;
  public $updated_at;

  /**
   * Método para agregar un nuevo usuario
   *
   * @return integer
   */
  public function add()
  {
    $sql = 'INSERT INTO users (name, username, email, created_at) VALUES (:name, :username, :email, :created_at)';
    $user = 
    [
      'user_ame'       => $this->name,
      'user_username'   => $this->username,
      'user_email'      => $this->email,
      'user_created_at' => $this->created_at,
    ];

    try {
      return ($this->id = parent::query($sql, $user)) ? $this->id : false;
    } catch (Exception $e) {
      throw $e;
    }
  }

  /**
   * Método para actualizar un registor en la db
   *
   * @return bool
   */
  public function update()
  {
    $sql = 'UPDATE users SET name=:name, username=:username, email=:email WHERE id=:id';
    $user = 
    [
      'user_id'         => $this->id,
      'user_name'       => $this->name,
      'user_username'   => $this->username,
      'user_email'      => $this->email
    ];

    try {
      return (parent::query($sql, $user)) ? true : false;
    } catch (Exception $e) {
      throw $e;
    }
  }
}