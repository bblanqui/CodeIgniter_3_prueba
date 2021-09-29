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

         public function update ($id){

         
            $this->db->where("identificacion",$id);
            $query=$this->db->get("cliente");
             return $query;
         
            }

            public function editarUser($id, $data){


            $this->db->where("identificacion",$id);
            
            $this->db->update("cliente",$data);

            }
     
   }


