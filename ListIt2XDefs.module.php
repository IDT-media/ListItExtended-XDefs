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

class ListIt2XDefs extends CMSModule {
    
    public function GetName() 
	{
        return get_class($this);
    }
    
    public function GetFriendlyName() 
	{
        return $this->Lang('module_friendlyname');
    }
	
    public function GetAdminDescription() 
	{
        return $this->Lang('module_description');
    }  	
    
    public function GetVersion() 
	{
        return '1.2';
    }
	
	public function MinimumCMSVersion()
	{
		return '1.11';
	}	
	
	public function GetAuthor()
	{
		return 'IDT Media Team';
	}

	public function GetAuthorEmail()
	{
		return 'hi@i-do-this.com';
	}	 
	
	public function GetChangeLog()
	{
		return @file_get_contents(dirname(__FILE__).'/changelog.html');
	}	
} //end of class
?>