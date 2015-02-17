<?php
#-------------------------------------------------------------------------
#
# Tapio Löytty, <tapsa@orange-media.fi>
# Web: www.orange-media.fi
#
# Goran Ilic, <uniqu3e@gmail.com>
# Web: www.ich-mach-das.at
#
#-------------------------------------------------------------------------
#
# ListIt2XDefs is a CMS Made Simple Dummy module that adds ListIt2 Module 
# Core Team supported List Definitions to ListIt2 Module.
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------

class listit2fd_FEUDropdown extends ListIt2FielddefBase
{
    public function __construct(&$db_info) 
    {   
        parent::__construct($db_info);
        
        $this->SetFriendlyType($this->ModLang('fielddef_'.$this->GetType()));
    }
    
    static public function GetModuleDeps() {
        
        return array(
            'FrontEndUsers' => '1.18.1',
            'CMSMailer' => '1.73.9',
            'CGExtensions' => '1.29.1'
        );
    }
    
    // get available groups from FEU module 
    public function GetFEUGroups() {
        
        $FEU = cmsms()->GetModuleInstance('FrontEndUsers');
        if(is_object($FEU)) {
            $groups = $FEU->GetGroupListFull();
            
            if($groups) {
                $options = array();
                foreach($groups as $option) {
                    $options[$option['id']] = $option['groupname'];
                }
            }
            
            return $options;
        }
    }

    // set available FEU identifier options
    public function GetFEUIdentifier() {

        $options = array(
            'id' => $this->ModLang('fielddef_feu_id'),
            'username' => $this->ModLang('fielddef_feu_username')
            );

        return $options;
    }

    // set available FEU identifier options
    public function GetFEUProperties() {

        $FEU = cmsms()->GetModuleInstance('FrontEndUsers');
        if(is_object($FEU)) {
            
            $properties = $FEU->GetPropertyDefns();

            if($properties) {
                $options = array_merge(array('' => $this->ModLang('select_one')));
                foreach($properties as $key => $val) {
                    $options[$key] = $val['prompt'];
                }
            }

            return $options;
        }
    }
    
    // get list of users from FEU module based on selected group
    public function GetFEUUserList() {
        
        $FEU = cmsms()->GetModuleInstance('FrontEndUsers');
        if(is_object($FEU)) {
            
            $users = $FEU->GetFullUsersInGroup($this->GetOptionValue('feu_options'));
            
            if($users) {
                $options = array_merge(array('' => $this->ModLang('select_one')));
                foreach($users as $option) {

                    if ($this->GetOptionValue('feu_property')) {
                        $val = $FEU->GetUserPropertyFull($this->GetOptionValue('feu_property'), $option['id']);
                    } else {
                        $val = $option['username'];
                    }

                    $options[$option[$this->GetOptionValue('feu_identifier')]] = $val;
                }
            }
            
            return $options;
        }
    }
    
    // return username from id in item summary
    public function RenderForAdminListing($id, $returnid) {
        
        if(!$this->HasValue() && !is_numeric($this->GetValue()))
            return;
        
        $FEU = cmsms()->GetModuleInstance('FrontEndUsers');
        if(is_object($FEU)) {
            return $FEU->GetUserName($this->GetValue());
        }
    }
}// end of class
?>
