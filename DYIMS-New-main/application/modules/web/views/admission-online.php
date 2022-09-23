<div class="page-header-area">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title"><span class="inner"><?php echo $this->lang->line('online_admission'); ?></span></h2>
             <ul class="links">
                <li><a href="<?php echo site_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                <li><a href="javascript:void(0);"><?php echo $this->lang->line('online_admission'); ?></a></li>
            </ul> 
            <h2 class="title-2">
                <?php if(isset($this->setting->school_name)){ ?>
                <?php echo $this->setting->school_name; ?>
                <?php }else{ ?>
                        <?php echo SMS; ?>
                <?php } ?>
            </h2>
        </div>
    </div>
</div>

<div class="page-contact-info-area_">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <?php $this->load->view('layout/message'); ?> 
            </div>
        </div>
    </div>
</div>

<div class="page-contact-info-area">
    <div class="container">
        <form action="<?php echo site_url('admission-online'); ?>" method="post" id="admission" name="admission" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="admission-form">
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <div class="admission-address">
                                <div><h3><?php echo isset($this->setting->school_name) && !empty($this->setting->school_name) ? $this->setting->school_name : ''; ?></h3></div>                                
                                <div><?php echo isset($this->setting->address) && !empty($this->setting->address) ? $this->setting->address : ''; ?></div>
                                <div><?php echo isset($this->setting->phone) && !empty($this->setting->phone) ? $this->setting->phone : ''; ?></div>
                                <div><?php echo isset($this->setting->email) && !empty($this->setting->email) ? $this->setting->email : ''; ?></div>
                                <div><h4><?php echo $this->lang->line('online_admission'); ?></h4></div>
                            </div>
                        </div>                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><h4><?php echo $this->lang->line('applicant_info'); ?></h4></div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('basic_information'); ?>:</strong></p> </div>
                    </div>                     
                      <div class="row">
                            <div class="col-md-12 col-sm-12"><hr></div>
                      </div>
                    <div class="row">                  
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="name"><?php echo $this->lang->line('name'); ?> <span class="required">*</span></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="name"  id="name" value="<?php echo isset($post['name']) ?  $post['name'] : ''; ?>"  required="required" type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('name'); ?></div> 
                            </div>
                        </div>                     
                        <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label  for="dob"><?php echo $this->lang->line('birth_date'); ?> <span class="required">*</span></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="dob"  id="dob" value="<?php echo isset($post['dob']) ?  $post['dob'] : ''; ?>"  required="required" type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('dob'); ?></div>
                             </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gender"><?php echo $this->lang->line('gender'); ?> <span class="required">*</span></label>
                                 <select  class="form-control col-md-7 col-xs-12 gsms-nice-select_"  name="gender"  id="gender" required="required">
                                   <option value=""><?php echo $this->lang->line('select'); ?></option>
                                   <?php $genders = get_genders(); ?>
                                   <?php foreach($genders as $key=>$value){ ?>
                                       <option value="<?php echo $key; ?>" <?php echo isset($post['gender']) && $post['gender'] == $key ?  'selected="selected"' : ''; ?>><?php echo $value; ?></option>
                                   <?php } ?>
                               </select>
                               <div class="help-block"><?php echo form_error('gender'); ?></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="blood_group"><?php echo $this->lang->line('blood_group'); ?></label>
                                 <select  class="form-control col-md-7 col-xs-12 gsms-nice-select" name="blood_group" id="blood_group">
                                   <option value="">--<?php echo $this->lang->line('select'); ?>--</option>
                                   <?php $bloods = get_blood_group(); ?>
                                   <?php foreach($bloods as $key=>$value){ ?>
                                       <option value="<?php echo $key; ?>" <?php echo isset($post['blood_group']) && $post['blood_group'] == $key ?  'selected="selected"' : ''; ?>><?php echo $value; ?></option>
                                   <?php } ?>
                                   </select>
                               <div class="help-block"><?php echo form_error('blood_group'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                         
                        <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                  <label for="religion"><?php echo $this->lang->line('religion'); ?></label>
                                  <input  class="form-control col-md-7 col-xs-12"  name="religion"  id="add_religion" value="<?php echo isset($post['religion']) ?  $post['religion'] : ''; ?>"  type="text" autocomplete="off">
                                   <div class="help-block"><?php echo form_error('religion'); ?></div>
                             </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="item form-group">
                                <label ><?php echo $this->lang->line('domicile_photo'); ?> </label>
                                <input  class="form-control col-md-7 col-xs-12"  name="domicile_photo"  id="domicile_photo" type="file">
                                   <div class="text-info" style="font-size: 9px;"><?php echo $this->lang->line('valid_file_format_img'); ?></div>
                                   <div class="help-block"><?php echo form_error('domicile_photo'); ?></div>
                               </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="email"><?php echo $this->lang->line('email'); ?> <span class="required">*</span></label>
                               <input  class="form-control col-md-7 col-xs-12"  name="email"  id="email" value="<?php echo isset($post['email']) ?  $post['email'] : ''; ?>"  type="email" required="required" autocomplete="off">
                               <div class="help-block"><?php echo form_error('email'); ?></div>
                            </div>
                        </div>     
                        <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                 <label for="phone"><?php echo $this->lang->line('phone'); ?><span class="required">*</span></label>
                                 <input  class="form-control col-md-7 col-xs-12"  name="phone"  id="phone" value="<?php echo isset($post['phone']) ?  $post['phone'] : ''; ?>" type="text" required="required" autocomplete="off">
                                 <div class="help-block"><?php echo form_error('phone'); ?></div>
                             </div>
                         </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="national_id"><?php echo $this->lang->line('national_id'); ?> </label>
                                <input  class="form-control col-md-7 col-xs-12"  name="national_id"  id="national_id" value="<?php echo isset($post['national_id']) ?  $post['national_id'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('national_id'); ?></div>
                            </div>
                        </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                               <div class="item form-group">
                                  <label for="health_condition"><?php echo $this->lang->line('health_condition'); ?> </label>
                                  <input  class="form-control col-md-7 col-xs-12"  name="health_condition"  id="health_condition" value=""  type="text" autocomplete="off">
                                  <div class="help-block"><?php echo form_error('health_condition'); ?></div>
                               </div>
                           </div>  
                           <div class="col-md-3 col-sm-3 col-xs-12">
                               <div class="item form-group">
                                   <label for="photo"><?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('photo'); ?></label>
                                   <input  class="form-control col-md-7 col-xs-12"  name="photo"  id="photo" type="file">
                                   <div class="text-info" style="font-size: 9px;"><?php echo $this->lang->line('valid_file_format_img'); ?></div>
                                   <div class="help-block"><?php echo form_error('photo'); ?></div>
                               </div>
                           </div>
                    </div>
           
                       
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('academic_information'); ?>:</strong></p> </div>
                    </div>  
                          
                    <div class="row">                                      
                         <div class="col-md-4 col-sm-4 col-xs-12">
                             <div class="item form-group">
                                 <label for="type_id"><?php echo $this->lang->line('student_type'); ?></label>
                                 <select  class="form-control col-md-7 col-xs-12  gsms-nice-select_" name="type_id" id="add_type_id">
                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    <?php foreach($types as $obj){ ?>
                                        <option value="<?php echo $obj->id; ?>" <?php echo isset($post['type_id']) && $post['type_id'] == $obj->id ?  'selected="selected"' : ''; ?>><?php echo $obj->type; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block"><?php echo form_error('type_id'); ?></div>
                             </div>
                         </div>                        
                         <div class="col-md-4 col-sm-4 col-xs-12">
                             <div class="item form-group">
                                 <label for="class_id"><?php echo $this->lang->line('class'); ?> <span class="required">*</span></label>
                                 <select  class="form-control col-md-7 col-xs-12  gsms-nice-select" name="class_id" id="add_class_id" required="required" onchange="get_section_by_class(this.value, '');">
                                    <option value="">--<?php echo $this->lang->line('select'); ?>--</option>
                                    <?php foreach($classes as $obj){ ?>
                                        <option value="<?php echo $obj->id; ?>" <?php echo isset($post['class_id']) && $post['class_id'] == $obj->id ?  'selected="selected"' : ''; ?>><?php echo $obj->name; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block"><?php echo form_error('class_id'); ?></div>
                             </div>
                         </div>                        
                         <div class="col-md-4 col-sm-4 col-xs-12">
                             <div class="item form-group">
                                <label for="group_id"><?php echo $this->lang->line('group'); ?> </label>
                                <select  class="form-control col-md-7 col-xs-12 gsms-nice-select_" name="group_id" id="group_id">
                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    <?php foreach($groups as $obj){ ?>
                                        <option value="<?php echo $obj->id; ?>" <?php echo isset($post['group_id']) && $post['group_id'] == $obj->id ?  'selected="selected"' : ''; ?>><?php echo $obj->group; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block"><?php echo form_error('group_id'); ?></div>
                             </div>
                         </div>                   
                    </div>
                    
                      
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('father_information'); ?>:</strong></p> </div>
                    </div>
                     <div class="row">  
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_name"><?php echo $this->lang->line('father_name'); ?> </label>
                               <input  class="form-control col-md-7 col-xs-12"  name="father_name"  id="father_name" value="<?php echo isset($post['father_name']) ?  $post['father_name'] : ''; ?>"  type="text" autocomplete="off">
                               <div class="help-block"><?php echo form_error('father_name'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_phone"><?php echo $this->lang->line('father_phone'); ?></label>
                               <input  class="form-control col-md-7 col-xs-12"  name="father_phone"  id="father_phone" value="<?php echo isset($post['father_phone']) ?  $post['father_phone'] : ''; ?>"  type="text" autocomplete="off">
                               <div class="help-block"><?php echo form_error('father_phone'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_education"><?php echo $this->lang->line('father_education'); ?></label>
                               <input  class="form-control col-md-7 col-xs-12"  name="father_education"  id="father_education" value="<?php echo isset($post['father_education']) ?  $post['father_education'] : ''; ?>"   type="text" autocomplete="off">
                               <div class="help-block"><?php echo form_error('father_education'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                               <label for="father_profession"><?php echo $this->lang->line('father_profession'); ?></label>
                               <input  class="form-control col-md-7 col-xs-12"  name="father_profession"  id="father_profession" value="<?php echo isset($post['father_profession']) ?  $post['father_profession'] : ''; ?>"  type="text" autocomplete="off">
                               <div class="help-block"><?php echo form_error('father_profession'); ?></div>
                            </div>
                        </div>
                     </div>
                            <div class="row"> 

                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="item form-group">
                               <label for="fath_present_address"><?php echo $this->lang->line('present_address'); ?> </label>
                                <textarea  class="form-control col-md-7 col-xs-12 textarea-4column"  name="father_present_address"  id="fath_present_address"  ><?php echo isset($post['father_present_address']) ?  $post['father_present_address'] : ''; ?></textarea>
                                <div class="help-block"><?php echo form_error('fath_present_address'); ?></div>
                           </div>
                       </div>                                    
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="item form-group">
                              <label for="fathpermanent_address"><?php echo $this->lang->line('permanent_address'); ?></label>
                              <textarea  class="form-control col-md-7 col-xs-12 textarea-4column"  name="father_permanent_address"  id="fath_permanent_address"  ><?php echo isset($post['father_permanent_address']) ?  $post['father_permanent_address'] : ''; ?></textarea>
                              <div class="help-block"><?php echo form_error('permanent_address'); ?></div>
                           </div>
                       </div>
                    </div>
                    
                   <!-- <div class="row"> -->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="father_designation"><?php echo $this->lang->line('father_designation'); ?> </label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="father_designation"  id="father_designation" value="<?php echo isset($post['father_designation']) ?  $post['father_designation'] : ''; ?>"  type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('father_designation'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>                        -->
                   <!--</div>-->
                    
                        
                   <!-- <div class="row">-->
                   <!--     <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('mother_information'); ?>:</strong></p> </div>-->
                   <!-- </div>-->
                   <!-- <div class="row">  -->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="mother_name"><?php echo $this->lang->line('mother_name'); ?></label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="mother_name"  id="mother_name" value="<?php echo isset($post['mother_name']) ?  $post['mother_name'] : ''; ?>"  type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('mother_name'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="mother_phone"><?php echo $this->lang->line('mother_phone'); ?> </label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="mother_phone"  id="mother_phone" value="<?php echo isset($post['mother_phone']) ?  $post['mother_phone'] : ''; ?>"   type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('mother_phone'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="mother_education"><?php echo $this->lang->line('mother_education'); ?> </label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="mother_education"  id="mother_education" value="<?php echo isset($post['mother_education']) ?  $post['mother_education'] : ''; ?>"   type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('mother_education'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="mother_profession"><?php echo $this->lang->line('mother_profession'); ?> </label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="mother_profession"  id="mother_profession" value="<?php echo isset($post['mother_profession']) ?  $post['mother_profession'] : ''; ?>" type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('mother_profession'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!-- </div>-->
                   <!-- <div class="row"> -->
                   <!--     <div class="col-md-3 col-sm-3 col-xs-12">-->
                   <!--         <div class="item form-group">-->
                   <!--            <label for="mother_designation"><?php echo $this->lang->line('mother_designation'); ?> </label>-->
                   <!--            <input  class="form-control col-md-7 col-xs-12"  name="mother_designation"  id="mother_designation" value="<?php echo isset($post['mother_designation']) ?  $post['mother_designation'] : ''; ?>"  type="text" autocomplete="off">-->
                   <!--            <div class="help-block"><?php echo form_error('mother_designation'); ?></div>-->
                   <!--         </div>-->
                   <!--     </div>                        -->
                   <!--</div>-->
                       
                    
                    <div class="row">
                       <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('guardian_information'); ?>:</strong></p> </div>
                    </div>  
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="is_guardian"><?php echo $this->lang->line('is_guardian'); ?><span class="required">*</span></label>
                                <select  class="form-control col-md-7 col-xs-12  gsms-nice-select" name="is_guardian" id="is_guardian" required="required" onchange="check_guardian_type(this.value);">
                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    <option value="father" <?php echo isset($post['is_guardian']) && $post['is_guardian'] == 'father' ?  'selected="selected"' : ''; ?>><?php echo $this->lang->line('father'); ?></option>
                                    <option value="mother" <?php echo isset($post['is_guardian']) && $post['is_guardian'] == 'mother' ?  'selected="selected"' : ''; ?>><?php echo $this->lang->line('mother'); ?></option>
                                    <option value="other" <?php echo isset($post['is_guardian']) && $post['is_guardian'] == 'other' ?  'selected="selected"' : ''; ?>><?php echo $this->lang->line('other'); ?></option>
                                    <option value="exist_guardian" <?php echo isset($post['is_guardian']) && $post['is_guardian'] == 'exist_guardian' ?  'selected="selected"' : ''; ?>><?php echo $this->lang->line('guardian_exist'); ?></option>
                                </select>
                                <div class="help-block"><?php echo form_error('is_guardian'); ?></div>
                            </div>
                        </div>
                                               
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_phone"><?php echo $this->lang->line('guardian_phone'); ?><span class="required">*</span></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_phone"  id="gud_phone" value="<?php echo isset($post['gud_phone']) ?  $post['gud_phone'] : ''; ?>"  required="required" type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_phone'); ?></div>
                                <input type="hidden" name="guardian_id" id="guardian_id" value="" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 fn_existing_guardian <?php if(isset($post['guardian_id']) && $post['guardian_id'] == 'exist_guardian'){ ''; }else{ echo 'display'; } ?>">
                            <div class="item form-group">
                                <label style="width: 100%;margin-bottom: 0;">&nbsp;</label>
                                <button  class="btn btn-info glbscl-link-btn btn-xs"  name="find"  id="fn_find" type="button"><?php echo $this->lang->line('find_guardian_by_phone'); ?></button>
                            </div>
                        </div>
                                               
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_relation"><?php echo $this->lang->line('relation_with_guardian'); ?> </label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_relation"  id="relation_with" value="<?php echo isset($post['gud_relation']) ?  $post['gud_relation'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_relation'); ?></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_name"><?php echo $this->lang->line('guardian_name'); ?><span class="required">*</span></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_name"  id="gud_name" value="<?php echo isset($post['gud_name']) ?  $post['gud_name'] : ''; ?>"  required="required" type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_name'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_national_id"><?php echo $this->lang->line('national_id'); ?></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_national_id"  id="gud_national_id" value="<?php echo isset($post['gud_national_id']) ?  $post['gud_national_id'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_national_id'); ?></div>
                            </div>
                        </div>                        
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_profession"><?php echo $this->lang->line('profession'); ?></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_profession"  id="gud_profession" value="<?php echo isset($post['gud_profession']) ?  $post['gud_profession'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_profession'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                                <label for="gud_religion"><?php echo $this->lang->line('religion'); ?></label>
                                <input  class="form-control col-md-7 col-xs-12"  name="gud_religion"  id="gud_religion" value="<?php echo isset($post['gud_religion']) ?  $post['gud_religion'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('gud_religion'); ?></div>
                            </div>
                        </div> 
                    </div>    
                    <div class="row">                  
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p  class="admission-form-title">
                                <strong>
                                <?php echo $this->lang->line('address_information'); ?>: 
                                </strong>
                                <?php echo $this->lang->line('same_as_guarduan_address'); ?> <input  class=""  name="same_as_guardian"  id="same_as_guardian" value="1"  type="checkbox" <?php echo isset($post['same_as_guardian']) ?  'checked="checked"' : ''; ?>>
                            </p>
                        </div>
                    </div>    
                    
                    <div class="row"> 

                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="item form-group">
                               <label for="present_address"><?php echo $this->lang->line('present_address'); ?> </label>
                                <textarea  class="form-control col-md-7 col-xs-12 textarea-4column"  name="present_address"  id="present_address"  ><?php echo isset($post['present_address']) ?  $post['present_address'] : ''; ?></textarea>
                                <div class="help-block"><?php echo form_error('present_address'); ?></div>
                           </div>
                       </div>                                    
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="item form-group">
                              <label for="permanent_address"><?php echo $this->lang->line('permanent_address'); ?></label>
                              <textarea  class="form-control col-md-7 col-xs-12 textarea-4column"  name="permanent_address"  id="permanent_address"  ><?php echo isset($post['permanent_address']) ?  $post['permanent_address'] : ''; ?></textarea>
                              <div class="help-block"><?php echo form_error('permanent_address'); ?></div>
                           </div>
                       </div>
                    </div>
                                
                          
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12"><p class="admission-form-title"><strong><?php echo $this->lang->line('academic_information'); ?>:</strong></p> </div>
                    </div>
                      <div class="row">    
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="matric_school_name">Matric School Name</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="matric_school_name"  id="matric_school_name" value="<?php echo isset($post['matric_school_name']) ?  $post['matric_school_name'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('matric_school_name'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="matric_total_marks">Total Marks Matric</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="matric_total_marks"  id="matric_total_marks" value="<?php echo isset($post['matric_total_marks']) ?  $post['matric_total_marks'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('matric_total_marks'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="matric_obtain_marks">Obtain Marks Matric</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="matric_obtain_marks"  id="matric_obtain_marks" value="<?php echo isset($post['matric_obtain_marks']) ?  $post['matric_obtain_marks'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('matric_obtain_marks'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="percentage_matric">Percentage in Matric</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="percentage_matric" readonly="readonly" id="percentage_matric" value="<?php echo isset($post['percentage_matric']) ?  $post['percentage_matric'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('percentage_matric'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="matric_board_name">Matric Board Name</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="matric_board_name"  id="matric_board_name" value="<?php echo isset($post['matric_board_name']) ?  $post['matric_board_name'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('matric_board_name'); ?></div>
                             </div>
                         </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                               <div class="item form-group">
                                   <label for="matric_result_photo">Matric Result <?php echo $this->lang->line('photo'); ?></label>
                                   <input  class="form-control col-md-7 col-xs-12"  name="matric_result_photo"  id="matric_result_photo" type="file">
                                   <div class="text-info" style="font-size: 9px;"><?php echo $this->lang->line('valid_file_format_img'); ?></div>
                                   <div class="help-block"><?php echo form_error('matric_result_photo'); ?></div>
                               </div>
                           </div>
                    </div>
                    <div class="row">    
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="previous_college_name">Previous College Name</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="previous_college_name"  id="previous_college_name" value="<?php echo isset($post['previous_college_name']) ?  $post['previous_college_name'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('previous_college_name'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="inter_total_marks">Total Marks Inter</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="inter_total_marks"  id="inter_total_marks" value="<?php echo isset($post['inter_total_marks']) ?  $post['inter_total_marks'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('inter_total_marks'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="inter_obtain_marks">Obtain Marks Inter</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="inter_obtain_marks"  id="inter_obtain_marks" value="<?php echo isset($post['inter_obtain_marks']) ?  $post['inter_obtain_marks'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('inter_obtain_marks'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="percentage_inter">Percentage in Inter</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="percentage_inter" readonly="readonly" id="percentage_inter" value="<?php echo isset($post['percentage_inter']) ?  $post['percentage_inter'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('percentage_inter'); ?></div>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                             <div class="item form-group">
                                <label for="inter_board_name">Inter Board Name</label>
                                <input  class="form-control col-md-7 col-xs-12"  name="inter_board_name"  id="inter_board_name" value="<?php echo isset($post['inter_board_name']) ?  $post['inter_board_name'] : ''; ?>"  type="text" autocomplete="off">
                                <div class="help-block"><?php echo form_error('inter_board_name'); ?></div>
                             </div>
                         </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                               <div class="item form-group">
                                   <label for="inter_result_photo">Inter Result <?php echo $this->lang->line('photo'); ?></label>
                                   <input  class="form-control col-md-7 col-xs-12"  name="inter_result_photo"  id="inter_result_photo" type="file">
                                   <div class="text-info" style="font-size: 9px;"><?php echo $this->lang->line('valid_file_format_img'); ?></div>
                                   <div class="help-block"><?php echo form_error('inter_result_photo'); ?></div>
                               </div>
                           </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                             <p class="admission-form-title">
                                 <input  class=""  name="declaration"  id="declaration" value="1"  type="checkbox" <?php echo isset($post['declaration']) ?  'checked="checked"' : ''; ?>>
                                 <strong>Declaration :</strong><br>
                            ✔  The Particulars given above are correct, and If found false, I shall be liable for any action as per the policy of the DYIMS<br>
                            ✔  I am not a member of any political party or religious motivative sectarian group and I shall not indulge in any kind of political or sectarian activity as long as I remain a student of DYIMS<br>
                            ✔  To abide by the Rules & Regulations, Policies, etc. framed by the Institution from time to time and shall be liable to any penalty Including rustication/expulsion, In case of violation on my part.<br>
                            ✔  In case, failure of submission of all documents, required By GCUF, DYIMS has the right to cancel my admission.<br>
                            ✔  GCUF reserves the right to change any clause of admission policy Or refuse admission to any applicant without any reason.<br>
                            ✔  I am not suffering from any infectious disease.<br>
                                </p>
                        </div>
                    </div>
                    
                         <div class="row">
                        <div class="col-md-12 col-sm-12">
                             <p class="admission-form-title">
                                 <input  class=""  name="undertaking"  id="undertaking" value="1"  type="checkbox" <?php echo isset($post['undertaking']) ?  'checked="checked"' : ''; ?>>
                                 <strong>Undertaking :</strong><br>
                                  I undertake to submit an attested photocopy of my Intermediate/ A Level/ DAE / Bachelor result before the last date of admission.<br>
                                ✔  In case, If I Fail to fulfill the eligibility criteria of admission, DYIMS has the right to cancel my admission.<br>
                                ✔  I have read the prospectus of the DYIMS and understood the contents thereof.<br>
                                ✔  I must provide 4 attested copies of all academic degrees/ result cards, Within one month from the date of announcement of the result to the DYIMS otherwise my admission will be considered as canceled.
                                                                
                             </p>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                             <p class="admission-form-title">
                                 <strong>Note :</strong><br>
                                Please Fill the correct Information.<br>
                                Students who have Punjab Domicile are applicable to apply.
                             </p>
                        </div>
                    </div>
                    
                    <div class="ln_solid"><hr/></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 margin-top">
                            <button type="submit" class="btn btn-info glbscl-link-btn hvr-bs"> <?php echo $this->lang->line('apply_now'); ?></button>
                            <a  class="btn btn-info glbscl-link-btn hvr-bs"  href="<?php echo site_url('admission-form'); ?>"><?php echo $this->lang->line('admission_form'); ?></a>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        </form>     
    </div>
</div>

 <link href="<?php echo VENDOR_URL; ?>datepicker/datepicker.css" rel="stylesheet">
 <script src="<?php echo VENDOR_URL; ?>datepicker/datepicker.js"></script>
 <script type="text/javascript">     
     
    $('#dob').datepicker({ startView: 2 });
    $('#admission').validate();
    
    function check_guardian_type(guardian_type){

         $('#relation_with').val('');  
         $('#gud_name').val('');  
         $('#gud_phone').val('');  
         $('#father_present_address').val('');  
         $('#father_permanent_address').val('');  
         $('#gud_religion').val(''); 
         $('#gud_profession').val(''); 
         $('#gud_national_id').val(''); 
         $('#gud_email').val(''); 
         $('#gud_other_info').val(''); 

        if(guardian_type == 'father'){

            $('#relation_with').val('<?php echo $this->lang->line('father'); ?>'); 
            $('.fn_existing_guardian').hide();
            $('.fn_except_exist').show();                          
            $('#gud_name').prop('required', true);               
            $('#gud_phone').prop('required', true);               
            $('#gud_email').prop('required', true);               

            var f_name = $('#father_name').val();
            var f_phone = $('#father_phone').val(); 
            var f_profession = $('#father_profession').val(); 

            $('#gud_name').val(f_name);  
            $('#gud_phone').val(f_phone); 
            $('#gud_profession').val(f_profession); 

        }else if(guardian_type == 'mother'){

            $('#relation_with').val('<?php echo $this->lang->line('mother'); ?>');   
            $('.fn_existing_guardian').hide();
            $('.fn_except_exist').show();            
            $('#gud_name').prop('required', true);               
            $('#gud_phone').prop('required', true);               
            $('#gud_email').prop('required', true); 

            var m_name = $('#mother_name').val();
            var m_phone = $('#mother_phone').val(); 
            var m_profession = $('#mother_profession').val(); 

            $('#gud_name').val(m_name);  
            $('#gud_phone').val(m_phone); 
            $('#gud_profession').val(m_profession); 

        }else if(guardian_type == 'other'){
            $('#relation_with').val('<?php echo $this->lang->line('other'); ?>');    
            $('.fn_existing_guardian').hide();
            $('.fn_except_exist').show();           
            $('#gud_name').prop('required', true);               
            $('#gud_phone').prop('required', true);               
            $('#gud_email').prop('required', true); 

        }else if(guardian_type == 'exist_guardian'){
            $('.fn_existing_guardian').show();
            $('.fn_except_exist').hide();            
            $('#gud_name').prop('required', false);               
            $('#gud_phone').prop('required', false);               
            $('#gud_email').prop('required', false); 

        }else{
             $('#relation_with').val('');   
             $('.fn_existing_guardian').hide();
             $('.fn_except_exist').show();             
             $('#gud_name').prop('required', true);               
             $('#gud_phone').prop('required', true);               
             $('#gud_email').prop('required', true); 
        }

     }
     
    $('#same_as_guardian').on('click', function(){
        
        if($(this).is(":checked")) {
            
            var present =  $('#fath_present_address').val();  
            var permanent = $('#fath_permanent_address').val(); 
            
            $('#present_address').val(present);  
            $('#permanent_address').val(permanent);  
        }else{
             $('#present_address').val('');  
             $('#permanent_address').val(''); 
        }
    });
        
         
    $('#fn_find').on('click', function(){
           
            var phone = $('#gud_phone').val();
            
            if(!phone){
                $('#gud_phone').focus();
                return false;
            }
            
            $.ajax({       
            type   : "POST",
            dataType: "json",
            url    : "<?php echo site_url('web/get_guardian_info'); ?>",
            data   : { phone : phone},               
            async  : true,
            success: function(response){ 
               if(response)
               {
                    $('#guardian_id').val(response.id);  
                    $('#gud_name').val(response.name);  
                    $('#gud_email').val(response.email);  
                    $('#gud_national_id').val(response.national_id);  
                    $('#gud_profession').val(response.profession);  
                    $('#gud_religion').val(response.religion);  
                    $('#father_present_address').val(response.present_address);  
                    $('#father_permanent_address').val(response.permanent_address); 
                    $('#gud_phone').val(response.phone);                    
                    
               }else{
                   
                    $('#guardian_id').val('');  
                    $('#gud_name').val('');  
                    $('#gud_email').val('');  
                    $('#gud_national_id').val('');  
                    $('#gud_profession').val('');  
                    $('#gud_religion').val('');  
                    $('#father_present_address').val('');  
                    $('#father_permanent_address').val(''); 
                    $('#gud_phone').val('');                     
               }
            }
        });  
    });
        
</script>
<script>
$(function(){
    
    $('#matric_total_marks').on('input', function() {
      calculate();
    });
    $('#matric_obtain_marks').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#matric_total_marks').val()); 
        var pEarned = parseInt($('#matric_obtain_marks').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/pPos) * 100).toFixed(3);
           }
        
        $('#percentage_matric').val(perc);
    }

});
$(function(){
    
    $('#inter_total_marks').on('input', function() {
      calculate();
    });
    $('#inter_obtain_marks').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#inter_total_marks').val()); 
        var pEarned = parseInt($('#inter_obtain_marks').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/pPos) * 100).toFixed(3);
           }
        
        $('#percentage_inter').val(perc);
    }

});
    </script>