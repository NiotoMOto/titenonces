<?php
class UserService
{
   protected $db;
   protected $app;

   public function __construct(Pimple\Container $di) {
      $this->db = $di['db'];
      $this->app = $di['app'];
   }

   public function find($id) {
      return $this->db->findUser($id);
   }

   public function all() {
      return $this->db->allUsers();
   }

   public function register($user) {
      return $this->db->register();
   }

   public function count() {
      return $this->db->countUser();
   }
}
