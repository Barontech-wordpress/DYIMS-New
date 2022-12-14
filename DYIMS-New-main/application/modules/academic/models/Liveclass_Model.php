<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Liveclass_Model extends MY_Model {
    
    function __construct() {
        parent::__construct();
    }
    
     public function get_live_class_list($class_id = null){
        
        if(!$class_id){
           $class_id = $this->session->userdata('class_id');
        } 
       
        $this->db->select('LC.*, C.name AS class_name, SE.name AS section, S.name AS subject, AY.session_year, T.name AS teacher');
        $this->db->from('live_classes AS LC');
        $this->db->join('classes AS C', 'C.id = LC.class_id', 'left');
        $this->db->join('sections AS SE', 'SE.id = LC.section_id', 'left');
        $this->db->join('subjects AS S', 'S.id = LC.subject_id', 'left');
        $this->db->join('teachers AS T', 'T.id = LC.teacher_id', 'left');
        $this->db->join('academic_years AS AY', 'AY.id = LC.academic_year_id', 'left');
        
        
        $this->db->where('LC.academic_year_id', $this->academic_year_id);
               
        if($this->session->userdata('role_id') == TEACHER){
            $this->db->where('LC.teacher_id', $this->session->userdata('profile_id'));
        }        
        if($class_id > 0){
            $this->db->where('LC.class_id', $class_id);            
        }
        $this->db->where('LC.status', 1);
        
        $this->db->order_by('LC.id', 'DESC');
        return $this->db->get()->result();
        
    }
    
    
     public function get_single_live_class($id){
         
        $this->db->select('LC.*, C.name AS class_name, SE.name AS section, S.name AS subject, AY.session_year, T.name AS teacher');
        $this->db->from('live_classes AS LC');
        $this->db->join('classes AS C', 'C.id = LC.class_id', 'left');
        $this->db->join('sections AS SE', 'SE.id = LC.section_id', 'left');
        $this->db->join('subjects AS S', 'S.id = LC.subject_id', 'left');
        $this->db->join('teachers AS T', 'T.id = LC.teacher_id', 'left');
        $this->db->join('academic_years AS AY', 'AY.id = LC.academic_year_id', 'left');
        $this->db->where('LC.id', $id);
        return $this->db->get()->row();
        
    }

    
    function duplicate_check( $class_id, $section_id = null, $subject_id = null, $teacher_id = null, $class_date = null, $start_time = null, $id = null ){           
           
        if($id){
            $this->db->where_not_in('id', $id);
        }
        
        $this->db->where('class_id', $class_id);
        $this->db->where('section_id', $section_id);              
        $this->db->where('subject_id', $subject_id);              
        $this->db->where('teacher_id', $teacher_id);              
        $this->db->where('class_date', $class_date);              
        $this->db->where('start_time', $start_time);              
        
        return $this->db->get('live_classes')->num_rows();            
    }
    
    
    public function get_student_list($class_id, $section_id){
        
        $this->db->select('S.phone, S.name, G.name AS g_name, G.phone AS g_phone, U.email, UG.email as g_email');
        $this->db->from('enrollments AS E');
        $this->db->join('students AS S', 'S.id = E.student_id', 'left');
        $this->db->join('guardians AS G', 'G.id = S.guardian_id', 'left');
        $this->db->join('users AS U', 'U.id = S.user_id', 'left');
        $this->db->join('users AS UG', 'UG.id = G.user_id', 'left');
        $this->db->where('E.academic_year_id', $this->academic_year_id);
        $this->db->where('E.class_id', $class_id);
        $this->db->where('S.status_type', 'regular');   
        
        if($section_id){
            $this->db->where('E.section_id', $section_id);
        }
        return $this->db->get()->result();
        
    }
}