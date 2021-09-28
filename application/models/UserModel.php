<?php

class UserModel extends CI_Model{

   public function guardar ($data){


   $this->db->insert("cliente", $data);

   }

   public function getall (){

      
      return  $this->db->get("cliente")->result();
   
      }

      public function delete ($identificacion){

      
         $this->db->where("identificacion",$identificacion);
         $this->db->delete("cliente");

      
         }
     
   }


